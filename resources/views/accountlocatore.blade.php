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
    
      <div id="propostericevute">
          <div><span class="xlarge"> <b> Proposte</b></span><a id="bottone-vedi-tutte-proposte" href="{{ route('propostelocatore') }}" title="Visualizza tutte le proposte"> Vedi tutte </a></div> 
        <hr>
        <p> 1-6 di  @php echo sizeof($proposte); @endphp proposte ricevute </p>
        
        @isset($proposte)
        <div id="elenco-proposte-ricevute">
        @php
        $counter=0;
        @endphp
        @foreach ($proposte as $proposta)
        @php
        if($counter >= 6){
            break;
        }
        @endphp
        
        <div class="card-proposta-ricevuta">
            <div class="container-proposta-ricevuta">
               
                <h4><b> Proposta </b></h4>
                <p>Hai ricevuto una proposta per l'annuncio <b> {{ $proposta->titoloannuncio }} </b> ({{ $proposta->tipologiaannuncio }}) di <b> {{ $proposta->nomelocatario }}  {{ $proposta->cognomelocatario }}</b></p>
              
                <div class="split2">
                    <div>
                        <p>
                            <i>Nome: </i> {{ $proposta->nomelocatario }}
                            <br>
                            <i>Cognome: </i> {{ $proposta->cognomelocatario }}
                            <br>
                            @isset($proposta->datanascitalocatario)
                            <i>Data di nascita: </i> {{ $proposta->datanascitalocatario }}
                            @else
                            Non è stata indicata la data di nascita.
                            @endisset
                            <br>
                            <i>Sesso: </i> {{ $proposta->sessolocatario }}
                            <br>
                            <i>Email: </i> {{ $proposta->emaillocatario }}
                            <br>
                            @isset($proposta->telefonolocatario)
                            <i>Telefono: </i> {{ $proposta->telefonolocatario }}
                            @else
                            Non è stato inserito il numero di telefono.
                            @endisset
                        </p>
                    </div>
                 
                    <div>                  
                        <p>
                        <i>Periodo: </i> da {{ $proposta->inizioAffitto }} a {{ $proposta->fineAffitto }}
                        <br>
                        @isset($proposta->messaggio)
                        <i>Messaggio: </i> {{ $proposta->messaggio }}
                        @else
                        Nessun messaggio specificato.
                        @endisset
                        <br>
                        @isset($proposta->canoneProposto)
                        <i>Canone proposto: </i> {{ $proposta->canoneProposto }} €
                        @else
                        Nessuna proposta di canone.
                        @endisset                       
                        </p>
                        <i>Stato: </i> {{ $proposta->stato }}                       
                    </div>
                </div>
                
                <div style="clear: both; text-align: right;">
                @if($proposta->stato=='da valutare')                
                <a href="{{ route('accettaproposta', [$proposta->id]) }}" onclick="return confirm('Sei sicuro di voler accettare la proposta?')" class="button-proposta">Accetta</a>
                <a href="{{ route('rifiutaproposta', [$proposta->id]) }}" onclick="return confirm('Sei sicuro di voler rifiutare la proposta?')"  class="button-proposta" style="margin-left:15px;">Rifiuta</a>                
                @endif
                
                @if($proposta->stato=='accettato')
                <a href="{{ route('showcontratto', [$proposta->id]) }}" class="button-proposta" style="margin-left:15px;">Contratto</a>
                <a href="{{ route('disdettaproposta', [$proposta->id]) }}" onclick="return confirm('Sei sicuro di voler rendere nuovamente disponibile il tuo alloggio? Se la data di fine affitto è futura questa scelta implica la disdetta anticipata del contratto di locazione.')" class="button-proposta">Rendi disponibile</a>                
                @endif
                 
                @if($proposta->stato=='rifiutato') 
                <a href="{{ route('eliminaproposta', [$proposta->id]) }}" onclick="return confirm('Sei sicuro di voler eliminare la proposta? ')" class="button-proposta">Elimina</a>                
                @endif
                </div>
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


