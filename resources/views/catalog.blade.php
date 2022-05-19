@extends('layouts.public')
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalogostyle.css') }}">
@section('title', 'Catalogo Annunci')

 

@section('content')
<!-- inizio sezione prodotti -->
@isset($annunci)
<div class="contenitore-annunci">
<div class="catalogo-annunci">
    @foreach ($annunci as $annuncio)
    <div class="annuncio white">
        
        <div class="button-div-class">
            <button id="proposte-button" onclick="" class="button ourblue button-class">Proposta</button>
            <button id="save-button" onclick="" class="button ourblue button-class"><i class="fa-solid fa-heart"></i></button>
        </div>
        
        
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

