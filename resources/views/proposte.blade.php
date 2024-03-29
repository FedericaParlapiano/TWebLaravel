@extends('layouts.public')


@section('title', 'Le tue proposte')

@section('content')

@can('isLocatario')
@isset($proposte)
<div id="elenco-proposte">
    @foreach ($proposte as $proposta)        
        <div class="card-tutte-proposte">
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
                <p>Stato: <i> {{ $proposta->stato }} </i></p>
               </div>
        </div> 
        @endforeach
    </div> 

    <div class="pagination">
        <!--Paginate-->
        @include('pagination.paginator', ['paginator' => $proposte])
    </div>
@endisset
@endcan

@can('isLocatore')
@isset($proposte)
        <div id="elenco-proposte-ricevute">
        
        @foreach ($proposte as $proposta)      
        
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
                <a href="{{ route('eliminaproposta', [$proposta->id]) }}" onclick="return confirm('Sei sicuro di voler reliminare la proposta? ')" class="button-proposta">Elimina</a>                
                 @endif
                 
                </div>
                
            </div>
        </div> 
        @endforeach
      </div>
        <div class="pagination">
                <!--Paginate-->
                @include('pagination.paginator', ['paginator' => $proposte])
        </div>
        @endisset

@endcan

@endsection