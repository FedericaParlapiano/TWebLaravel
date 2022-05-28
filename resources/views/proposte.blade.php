@extends('layouts.public')


@section('title', 'Le tue proposte')

@section('content')
 
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

@endsection