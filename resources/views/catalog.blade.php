@extends('layouts.public')
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalogostyle.css') }}">
@section('title', 'Catalogo Annunci')
 

@section('content')
@can('isLocatario')
<!-- inizio sezione prodotti -->
<div class="contenitore-form"> 
    {{ Form::open(array('route' => 'ricerca', 'id' => 'search', 'files' => false, 'class' => '')) }}
    <div class = "row">    
        <div class="left">
        {{ Form::label('where', 'Zona di locazione', ['class' => 'label']) }} 
                {{ Form::text('where', '', ['class' => 'input', 'id' => 'where']) }}
                @if ($errors->first('where'))
                <ul class="errors">
                    @foreach ($errors->get('where') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif  
         </div>
                    
        <div style="margin-left:2.5em;">  
            {{ Form::label('from', 'Da', ['class' => 'label']) }}
                {{ Form::date('from', '', ['class' => 'input', 'id' => 'from']) }}
                @if ($errors->first('from'))
                <ul class="errors">
                    @foreach ($errors->get('from') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif 
        </div>  
                    
        <div style="margin-left:2.5em;">
            {{ Form::label('to', 'A', ['class' => 'label']) }}
                {{ Form::date('to', '', ['class' => 'input', 'id' => 'to']) }}
                @if ($errors->first('to'))
                <ul class="errors">
                    @foreach ($errors->get('to') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif  
        </div> 
        
        <div style="margin-left:2.5em; margin-top:1.5em;">                
        {{ Form::submit('Cerca', ['class' => 'button-form ourblue']) }}
        </div>
    </div>  
</div>
@endcan

@isset($annunci)
<div class="contenitore-annunci">
<div class="catalogo-annunci">
    @foreach ($annunci as $annuncio)
    <div class="annuncio white">

        @php
        $assente=true;
        @endphp
        @foreach($foto as $singolafoto)
        @if($singolafoto->annuncio!=$annuncio->id)
            @continue
        @endif
        @if($singolafoto->annuncio==$annuncio->id)
            @php
            $assente=false
            @endphp
            <div class="img-class"><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank"><img src="{{ asset('images/annunci/' . $singolafoto->immagine) }}" alt="Immagine Casa" class="resize-img"></a></div>
            @break
        @endif
        @endforeach
        
        @if($assente)
        <div class="img-class"><a href=""><img src="images/annunci/noimage.jpg" alt="Casa" class="resize-img"></a></div>
        @endif
        
        
        
        
        <b>
            <h3><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank">{{ $annuncio->tipologia }}, {{ $annuncio->zonaLocazione }} </a></h3>
        </b>
        <p>Canone: {{ $annuncio->canoneAffitto }}€</p>
        <p class="descrizione2">{{ $annuncio->descrizione }}</p>
        
    </div>
    @endforeach
    
</div>
    <br>
    <div class="pagination">
    <!--Paginate-->
    @include('pagination.paginator', ['paginator' => $annunci])
    </div>
</div>

 

@endisset()
@endsection()

