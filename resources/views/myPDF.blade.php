<!DOCTYPE html>

<html>
    <head>
        <title>Contratto</title>
    </head>

    <body>
        <h1>{{ $title }}</h1>

        <p> Il Sig./la Sig.ra <i> {{ $nomelocatore }} {{ $cognomelocatore }} </i>
            nato/a il <i> {{ $datanascitalocatore }} </i>, di seguito denominato/a, per brevità, “Locatore” </p>
        <p style='text-align: center;'>E</p>
        <p> il Sig./la Sig.ra <i> {{ $nomelocatario }} {{ $cognomelocatario }} </i>
            nato/a il <i> {{ $datanascitalocatario }} </i> di seguito denominato, per brevità, “Locatario”</p>
        <p style='text-align: center;'> SI CONVIENE E SI STIPULA QUANTO SEGUE </p>    
        <p> Il Locatore concede in locazione al Locatario l'immobile <i>{{ $titoloannuncio }} </i>  <i> ({{ $tipologiaannuncio }}) </i> ad uso abitativo di sua esclusiva proprietà sito in
            <i> {{ $indirizzo }}, {{ $zonalocazione }}</i>. 
            <br>
            L’immobile viene consegnato come visto e piaciuto tra le parti all’atto della consegna del bene. 
            L’immobile sarà adibito ad uso esclusivo del Locatario.
            <br>
            La locazione è regolata dalle seguenti concordate pattuizioni:
            <ol>
                <li> <h4>DURATA</h4>
                    La durata della locazione è stabilita con decorrenza dal <i> {{ $inizioAffitto }} </i> al <i> {{ $fineAffitto }}. </i> </li>
                <li> <h4>CANONE</h4>
                    Il canone mensile di locazione, escluse le spese di condominio ordinarie e di riscaldamento, viene consensualmente determinato tra le parti in € 
                    @isset($canoneProposto)
                    <i>{{ $canoneProposto }}.</i>
                    @else 
                    <i>{{ $canoneAffitto }}.</i>
                    @endisset
                </li>
            </ol>
        </p>
        <p style='text-align: right; margin-top: 200px;'>
            FIRMA ..........................
        </p> 
    </body>

</html>


