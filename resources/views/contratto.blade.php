@extends('layouts.public')

@section('title', 'Le tue proposte')

@section('content')

<div class='contenitore-contratto'>
    <h1 style='text-align: center;'>{{ $title }}</h1>

        <p> Il Sig./la Sig.ra <i> {{ $contratto->nomelocatore }} {{ $contratto->cognomelocatore }} </i>
            nato/a il <i> {{ $contratto->datanascitalocatore }} </i>, di seguito denominato/a, per brevità, “Locatore” </p>
        <p style='text-align: center;'>E</p>
        <p> il Sig./la Sig.ra <i> {{ $contratto->nomelocatario }} {{ $contratto->cognomelocatario }} </i>
            nato/a il <i> {{ $contratto->datanascitalocatario }} </i> di seguito denominato, per brevità, “Locatario”</p>
        <p style='text-align: center;'> SI CONVIENE E SI STIPULA QUANTO SEGUE </p>    
        <p> Il Locatore concede in locazione al Locatario l'immobile <i>{{ $contratto->titoloannuncio }} </i>  <i> ({{ $contratto->tipologiaannuncio }}) </i> ad uso abitativo di sua esclusiva proprietà sito in
            <i> {{ $contratto->indirizzo }}, {{ $contratto->zonalocazione }}</i>. 
            <br>
            L’immobile viene consegnato come visto e piaciuto tra le parti all’atto della consegna del bene. 
            L’immobile sarà adibito ad uso esclusivo del Locatario.
            <br>
            La locazione è regolata dalle seguenti concordate pattuizioni:
            <ol>
                <li> <h4>DURATA</h4>
                    La durata della locazione è stabilita con decorrenza dal <i> {{ $contratto->inizioAffitto }} </i> al <i> {{ $contratto->fineAffitto }}. </i> </li>
                <li> <h4>CANONE</h4>
                    Il canone mensile di locazione, escluse le spese di condominio ordinarie e di riscaldamento, viene consensualmente determinato tra le parti in € 
                    @isset($contratto->canoneProposto)
                    <i>{{ $contratto->canoneProposto }}.</i>
                    @else 
                    <i>{{ $contratto->canoneAffitto }}.</i>
                    @endisset
                </li>
            </ol>
        </p>
        <p style='text-align: right; margin-top: 200px;'>
            FIRMA ..........................
        </p>     
</div>

<div style="margin-top: 50px; margin-bottom: 20px; text-align: right;">
    <a href="{{ route('pdf', [$contratto->idannuncio]) }}" onclick="return confirm('Vuoi scaricare il contratto?')" class="button-proposta">Scarica</a>
    <a href="mailto:{{ $contratto->emaillocatario }}?subject=Contratto di locazione&body=Buongiorno {{ $contratto->nomelocatario }} {{ $contratto->cognomelocatario }} il contratto per l'immobile da lei richiesto è stato generato. Cordiali saluti, {{ $contratto->nomelocatore}} {{ $contratto->cognomelocatore }} " onclick="return confirm('Vuoi inviare il contratto al locatario?')"  class="button-proposta" style="margin-left:15px;">Invia</a>  
</div>

@endsection