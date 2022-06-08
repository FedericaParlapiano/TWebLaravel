@extends('layouts.useraccount', ['user'=>$user])


@section('link')
<link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalogostyle.css') }}">
@parent
@endsection

@section('scripts')
@parent
@endsection

@section('title', 'Area riservata')


@section('content')
@isset($user)

<!-- !PAGE CONTENT! -->


    <a href="#"><img src="{{ asset('images/users/' . $user->fotoProfilo) }}" alt="immagine di profilo" style="width:65px;" class="circle right margine hide-large hover-opacity"></a>
    <span class="button hide-large xxlarge hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    
    <div class="container-account">
    
   <div class="row-info">
   <div id="info" class="container-account about-class" >
    <h2>{{$user->nome}} {{$user->cognome}}</h2>
    <div>
    <p>{{$user->role}}</p>
    
    @isset($user->dataNascita)
    <p><i class="fa-solid fa-cake-candles margine-right"></i>{{$user->dataNascita}}</p>
    @else
    <p><i class="fa-solid fa-cake-candles margine-right"></i>Non è stata indicata la data di nascita</p>
    @endisset
    @isset($user->sesso)
    <p><i class="fa-solid fa-venus-mars margine-right"></i>{{$user->sesso}}</p>
    @endisset
    
    
    <p><i class="fa-solid fa-address-card margine-right"></i>{{$user->username}}</p>
    
    </div>
    <br> 
    <a href="{{ route('modificaaccount') }}" title="Modifica i tuoi dati" class="a-modifica"><i class="fa-solid fa-pencil margine-right"></i>Modifica</a>
    
    </div>
    
    <!-- Contact Section -->
    <div class="container-account contact-class">
    <h4 id="contact"><b>Contattami</b></h4>
    <div class="row-padding center padding-16">
      <div class="third mediumturquoise">
        <p><i class="fa fa-envelope text-light-grey"></i></p>
        <p>{{$user->email}}</p>
      </div>
      <div class="third teal">
        <p><i class="fa fa-map-marker text-light-grey"></i></p>
        @isset($user->citta)
        <p>{{$user->citta}}</p>
        @else
        <p>Non è stata inserita la città</p>
        @endisset
      </div>
      <div class="third cadetblue">
        <p><i class="fa fa-phone text-light-grey"></i></p>
        @isset($user->numTelefono)
        <p>{{$user->numTelefono}}</p>
        @else
        <p>Non è stato inserito il numero di telefono</p>
        @endisset
      </div>
    </div>
    </div>
      
   </div> 
  </div>   
    
  <div style="align-content: center; padding: 40px;">  
  <!-- Annunci -->
  <div id="annunci">
    <div class="xlarge"><b>I miei annunci</b> <a class="button" href="{{ route('nuovoannuncio') }}" title="Aggiungi un annuncio"><i class="fa-solid fa-circle-plus xlarge"></i></a></div>
    
    <hr>
    <div class="section bottombar padding-16" style="display:none;">
      <span class="margine-right">Filter:</span> 
      <button class="button black">Tutti</button>
      <button class="button white"><i class="fa-regular fa-calendar-check margine-right"></i>Disponibili</button>
      <button class="button white hide-small"><i class="fa-regular fa-calendar-xmark margine-right"></i>Non disponibili</button>
      <button class="button white hide-small"><i class="fa-solid fa-note-sticky margine-right"></i>Opzionati</button>
    </div>
    </div>    
    @isset($annunci)
    <div class="contenitore-annunci">
    <div class="catalogo-annunci">
    @foreach ($annunci as $annuncio)
    
    @if($annuncio->disponibilita == 0)
        <div class="annuncio" style="height:530px; opacity: 0.5;">
    @else
        <div class="annuncio white" style="height:530px;">
    @endif
    
        
        <div class="button-div-class">
            <a id="modifica-annuncio-button" href = "{{ route('modificaannuncio', [$annuncio->id]) }}" onclick="" class="button ourblue button-class" title="modifica l'annuncio"><i class="fa-solid fa-pencil"></i></a>
            <a id="elimina-annuncio-button" href = "{{ route('eliminaannuncio', [$annuncio->id]) }}" onclick="return confirm('Sei sicuro di voler eliminare questo annuncio?')" class="button ourblue button-class" title="elimina l'annuncio"><i class="fa-solid fa-trash-can"></i></a>
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
            <h3><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank">{{ $annuncio->zonaLocazione }}, {{ $annuncio->titolo }} ({{ $annuncio->tipologia }}) </a></h3>
        </b>
        <p>Canone: {{ $annuncio->canoneAffitto }}€</p>
        <p class="descrizione2">{{ $annuncio->descrizione }}</p>
        
    </div>
    @endforeach
    <div class="pagination">
    <!--Paginate-->
    @include('pagination.paginator', ['paginator' => $annunci])
    </div>
    </div>
    
    @else
    <b>Non hai ancora pubblicato annunci.</b>
    @endisset    
  </div>
</div>
@endisset
@endsection


