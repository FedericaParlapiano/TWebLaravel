@extends('layouts.useraccount', ['user'=>$user])

@section('link')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}">
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
    <p><i class="fa-solid fa-cake-candles margine-right" title="data di nascita"></i>
        {{$user->dataNascita}}
    </p>
    @else
    <p><i class="fa-solid fa-cake-candles margine-right" title="data di nascita"></i>Non è stata indicata la data di nascita</p>
    @endisset
    @isset($user->sesso)
    <p><i class="fa-solid fa-venus-mars margine-right" title="sesso"></i>
        {{$user->sesso}}
    </p>
    @endisset
    
    
    <p><i class="fa-solid fa-address-card margine-right" title="username"></i>
        {{$user->username}}
    </p>
    
    <p><i class="fa-solid fa-graduation-cap margine-right" title="universita"></i>
    @isset($user->universita)
    {{$user->universita}}
    @isset($user->universita)
    , {{$user->facolta}}
    @endisset
    @else
        Non è stata indicata l'università
    @endisset
    </p>
    
    
    
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
        <p>Non è stata inserito la città</p>
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
        
    <div id="proposte-inviate">
        <div><span class="xlarge"> <b> Le mie proposte</b></span><a id="bottone-vedi-tutte-proposte" href="{{ route('propostelocatario') }}" title="Visualizza tutte le proposte"> Vedi tutte </a></div>         
        <hr>
        
        @isset($proposte)
        <div id="elenco-proposte">
        @php
        $counter=0;
        @endphp
        @foreach ($proposte as $proposta)
        @php
        if($counter >= 6){
            break;
        }
        @endphp
        
           <div class="card-proposta-inviata">
               <div class="container-proposta-inviata">
                 <h4><b> Proposta </b></h4> 
                 <p>Ti sei proposto per l'annuncio <b> {{ $proposta->titoloannuncio }} </b> ({{ $proposta->tipologiaannuncio }}) di <b> {{ $proposta->nomelocatore }}  {{ $proposta->cognomelocatore }}</b></p>
                 <p>
                     Periodo di affitto: da {{ $proposta->inizioAffitto }} a {{ $proposta->fineAffitto }}
                     <br>
                     @isset($proposta->messaggio)
                     Messaggio:  "{{ $proposta->messaggio }}"
                     @else
                     Nessun messaggio specificato.
                     @endisset
                     <br>
                     @isset($proposta->canoneProposto)
                     Canone proposto:  <b> {{ $proposta->canoneProposto }} € </b>
                     @else
                     Nessuna proposta di canone
                     @endisset
                 </p>
                 <p>
                     Stato: <i> {{ $proposta->stato }} </i>
                 </p>

               </div>
        </div> 
        
        @php
        $counter++;
        @endphp
        
        @endforeach
        </div>
        @endisset
          
    </div> 
  </div>

@endisset
@endsection


