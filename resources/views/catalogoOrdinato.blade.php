@extends('layouts.public')

<link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}">

@section('title', 'Area riservata')

@section('content')



@can('isLocatario')
@isset($annunci)
<div class="contenitore-annunci">
    
<div class="catalogo-annunci">
    @foreach ($annunci as $annuncio)
    
    @if($annuncio->disponibilita == 0)
        <div class="annuncio" style="height: 485px; opacity: 0.5;">
    @else
        <div class="annuncio white" style="height: 485px;">
    @endif

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
            <h3><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank">{{ $annuncio->titolo }} ({{ $annuncio->tipologia }}) </a></h3>
        </b>
        <p>{{ $annuncio->zonaLocazione }}, Canone: {{ $annuncio->canoneAffitto }}€</p>
        <p class="descrizione2">{{ $annuncio->descrizione }}</p>
        
        @foreach($vincolisoddisfatti as $key=>$value)
        @if($key == $annuncio->id)      
        <p><mark style="background-color: violet;"><i> Criteri soddisfatti: {{ $value }} </i> </mark></p>      
        @endif
        @endforeach
    </div>
    @endforeach
    
    @endisset
    @endcan
</div>
</div>

@endsection


