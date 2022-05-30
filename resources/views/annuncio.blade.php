@extends('layouts.public')

@section('title', 'Annuncio')

@section('scripts')

@parent
<script src="{{ asset('js/incrementalvalidation.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('proposta') }}";
    var formId = 'proposta';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#proposta").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection


@section('content')
<!-- inizio sezione prodotti -->
@isset($annuncio)
@foreach($annuncio as $singoloannuncio)
<div class="annuncio-singolo">
<div class="flex-annuncio">
    <div class="container-annuncio">
      @php
        $assente=true;
      @endphp
      
      @foreach($foto as $singolafoto)
      @isset($singolafoto)
      @php
        $assente=false;
      @endphp
      <div class="mySlides">
        <img src="{{ asset('images/annunci/' . $singolafoto->immagine) }}" alt="Immagine non disponibile" class="resize-image-annuncio">
      </div>
      @endisset
      @endforeach
      
      @if($assente)
      <div class="mySlides">
        <img src="{{ asset('images/annunci/noimage.jpg') }}" class="resize-image-annuncio">
      </div>
      @endif

      <a class="prev" onclick="plusSlides(-1)">&#60</a>
      <a class="next" onclick="plusSlides(1)">&#62</a>

      @php
        $contatore=1;
      @endphp
      
      
      <div class="row-annuncio">
        @foreach($foto as $singolafoto)
        @isset($singolafoto)
        <div class="column-annuncio">
          <img class="demo cursor resize-thumbnail" src="{{ asset('images/annunci/' . $singolafoto->immagine) }}" onclick="currentSlide({{$contatore}})" alt="Not found">
        @php
            $contatore++;
        @endphp
        </div>
        @endisset
        @endforeach
      </div>
     
      
      <div class="flex-annuncio
           " style="text-align: center">
          <div id="prezzo">
              <h3> Canone </h3> 
              {{$singoloannuncio->canoneAffitto}}&#8364
          </div>
          <div id="periodo">
              <h3> Periodo </h3>
               Da: {{$singoloannuncio->inizioPeriodoDisponibilita}}
               A: {{$singoloannuncio->finePeriodoDisponibilita}}
          </div>
        </div>
    </div>
    <div class="cards">
        @if($singoloannuncio->disponibilita)
        <p style="text-align: end"> Disponibile </p>
        @else
        <p style="text-align: end; color:red"> NON DISPONIBILE </p>
        @endif
        
        <h1 style="text-align: center">{{$singoloannuncio->tipologia}}</h1>
        <div>
        <h3> Descrizione </h3>
        <p>{{$singoloannuncio->descrizione}}</p>
        <ul>
            @isset($singoloannuncio->superficie)
            <li>Superficie: {{$singoloannuncio->superficie}} mq </li>
            @endisset
            
            @if($singoloannuncio->tipologia=="Appartamento")
                @isset($singoloannuncio->superficie)
                <li>Numero camere: {{$singoloannuncio->numCamere}} </li>
                @endisset
                @isset($singoloannuncio->superficie)
                <li>Posti letto totali: {{$singoloannuncio->postiLettoTotali}} </li>
                @endisset
            @else
                @isset($singoloannuncio->superficie)
                <li>Posti letto nella stanza: {{$singoloannuncio->postiNellaStanza}} </li>
                @endisset
            @endif
        </ul>
        </div>
        
        @php
        $assente=true;
        @endphp
        <div class="split3">
            <h3> Servizi </h3>
        <div>
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='bagni')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-toilet" style="margin-right:16px"></i> Bagni ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-toilet" style="margin-right:16px"></i> Bagni </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='cucina')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-kitchen-set" style="margin-right:16px"></i> Cucina ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-kitchen-set" style="margin-right:16px"></i> Cucina </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='sala studio')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-book" style="margin-right:16px"></i> Sala studio ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-book" style="margin-right:16px"></i> Sala studio </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='lavatrice')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-faucet" style="margin-right:16px"></i> Lavanderia ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-faucet" style="margin-right:16px"></i> Lavanderia </p>
            @endif
            
        </div>
        <div>
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='giardino')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-tree" style="margin-right:16px"></i> Giardino ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-tree" style="margin-right:16px"></i> Giardino </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='parcheggio')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-square-parking" style="margin-right:16px"></i> Parcheggio ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-square-parking" style="margin-right:16px"></i> Parcheggio </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='garage')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-car-side" style="margin-right:16px"></i>Garage ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-car-side" style="margin-right:16px"></i> Garage </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='locale ricreativo')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-chess" style="margin-right:16px"></i>Locale ricreativo ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-chess" style="margin-right:16px"></i> Locale ricreativo </p>
            @endif
            
        </div>
            <div>
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='forno')
            @php
            $assente=false;
            @endphp   
            <p><i class="fa-solid fa-toilet-portable" style="margin-right:16px"></i> Forno ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-toilet-portable" style="margin-right:16px"></i> Forno </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='frigo')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-snowflake" style="margin-right:16px"></i> Frigo ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-snowflake" style="margin-right:16px"></i> Frigo </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='lavastoviglie')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-soap" style="margin-right:16px"></i>Lavastoviglie ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-soap" style="margin-right:16px"></i> Lavastoviglie </p>
            @endif
            
            @php
            $assente=true;
            @endphp
            
            @foreach($servizi as $servizioAnnuncio)
            @if($servizioAnnuncio->servizi=='condizionatore')
            @php
            $assente=false;
            @endphp
            <p><i class="fa-solid fa-fan" style="margin-right:16px"></i>Aria condizionata ({{$servizioAnnuncio->quantita}})</p>
            @endif
            @endforeach
            @if($assente)
            <p style="text-decoration: line-through solid red 15%"><i class="fa-solid fa-fan" style="margin-right:16px"></i> Aria condizionata </p>
            @endif
            
            
        </div>
        </div>
        
        
        @isset($vincoli)
        <div class="vincoli">
            <br>
            <h3> Non sono ammessi </h3>
            
            @foreach($vincoli as $vincoloAnnuncio)
            @if($vincoloAnnuncio->vincolo=='animali')
            <p> <i class="fa-solid fa-dog" style="margin-right:16px"></i> Animali </p>
            @elseif($vincoloAnnuncio->vincolo=='fumatori')
            <p> <i class="fa-solid fa-smoking" style="margin-right:16px"></i> Fumatori </p>
            @elseif($vincoloAnnuncio->vincolo=='feste')
            <p> <i class="fa-solid fa-champagne-glasses" style="margin-right:16px"></i> Party </p>
            @elseif($vincoloAnnuncio->vincolo=='matricole')
            <p> <i class="fa-solid fa-baby" style="margin-right:16px"></i> Matricole </p>
            @endif
            @endforeach
        </div>
        @endisset
        </div>    
    </div>
    
    
    <div class="flex-annuncio">
    <div class="container-annuncio">
        <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDKrpbaW7f4DAhXkdkXw3T_f62wW2zFwtg&q={{ $annuncio->first()->indirizzo }} {{ $annuncio->first()->zonaLocazione }}"frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

            <a href="https://www.whatismyip-address.com"></a>
            <br>
            <a href="https://www.embedgooglemap.net">inserting google maps</a>
        </div>
    </div>
    
    <div class="cards">
        <h1> Informazioni utili </h1> 
        <h3> Localizzazione </h3>
        <i class="fa-solid fa-location-dot" style="margin-right:16px"></i> {{ $annuncio->first()->indirizzo }}, {{ $annuncio->first()->zonaLocazione }}
        <hr>
        <div class="split2">
        <h3> Contatti Host </h3>
        <div>
        {{ $locatore->first()->nome }} {{ $locatore->first()->cognome }} 
        <br>
        <br>
        <i class="fa-solid fa-envelope" style="margin-right:16px"></i> {{ $locatore->first()->email }}
        <br>
        <br>
        <i class="fa-solid fa-phone" style="margin-right:16px"></i> {{ $locatore->first()->numTelefono }}
        </div>
        @can("isLocatario")
        <div>
        <button type="button" class="button ourblue" onclick="messaggio()">Messaggia</button>
        <br>
        <br>
        @if($singoloannuncio->disponibilita == 1)
        <button type="button" class="button ourblue" onclick="proposta()">Proponiti !</button> 
        @else
        <button type="button" class="button-nondisponibile grey" style="text-decoration: line-through;" onclick="proposta()">Proponiti !</button> 
        @endif
        </div>
        @endcan
        </div>
    </div>
    </div>
</div>
@endforeach

        @can("isLocatario")
        <div class="chat-popup" id="form-messaggio">
            <div id="close-div"><i id="close-messaggio" class="fa-solid fa-xmark" onclick="closeMessaggio()"></i></div>

                {{ Form::open(array('route' => 'messaggio', 'id' => 'messaggio', 'class' => 'form-container')) }}            
                {{ Form::token() }} 

                {{ Form::label('testo', 'Invia il tuo messaggio', ['class' => 'label']) }}
                {{ Form::textarea('testo', '', ['class' => 'input', 'id' => 'testo', 'placeholder' => 'Scrivi il tuo messaggio..']) }}
                @if ($errors->first('testo'))
                    <script> document.getElementById("form-messaggio").style.display = "block"; </script>
                    <div class="errors" >
                        @foreach ($errors->get('testo') as $message)
                        <p>{{ $message }}</p>
                        @endforeach
                    </div>
                @endif
            
                {{ Form::hidden('destinatario', $locatore->first()->username, ['id' => 'destinatario']) }}

                {{ Form::submit('Invia', ['class' => 'button ourblue', 'id' => 'invia-messaggio']) }}
                {{ Form::close() }}
                
        </div>

       @if($singoloannuncio->disponibilita == 1)
        <div class="chat-popup" id="form-proposta">
        @else
        <div style="display: none;">
        @endif
            <div id="close-div"><i id="close-proposta" class="fa-solid fa-xmark" onclick="closeProposta()"></i></div>

            {{ Form::open(array('route' => 'proposta', 'id' => 'proposta','class' => 'form-container')) }}            
            {{ Form::token() }} 

            
            {{ Form::label('messaggio', 'Invia la tua proposta.', ['class' => 'label']) }}
            {{ Form::textarea('messaggio', '', ['class' => 'input', 'id' => 'messaggio', 'placeholder' => 'Proponiti..']) }}
            
            <div style="text-align:center; margin-top: 0.5em;"> Periodo di affitto </div>         
            <div style="text-align:center; margin-top: 0.5em;">
                {{ Form::label('inizioAffitto', 'Inizio', ['style' =>'margin-right: 0.5em;']) }}
                {{ Form::date('inizioAffitto', '', ['id' => 'inizioAffitto', 'class' => 'input'])}}
            </div>
            <div style="text-align:center; margin-top: 0.5em;">
                {{ Form::label('fineAffitto', 'Fine',  ['style' =>'margin-right: 0.5em;']) }}
                {{ Form::date('fineAffitto', '', ['id' => 'fineAffitto', 'class' => 'input'])}}
            </div> 
            
                        
            <div style="margin: 0.8em;">
            {{ Form::label('canoneProposto', 'Fai un offerta:', ['class' => 'label']) }}
            {{ Form::text('canoneProposto', '', ['class' => 'input', 'id' => 'canoneProposto', 'placeholder' => '€', 'style' =>'margin-right: 1em;']) }}           
            </div>
            
            
            {{ Form::hidden('locatore', $locatore->first()->username, ['id' => 'locatore']) }}
            {{ Form::hidden('annuncio', $singoloannuncio->id, ['id' => 'annuncio']) }}
            
            {{ Form::submit('Invia', ['class' => 'button ourblue', 'id' => 'invia-proposta']) }}
            {{ Form::close() }}
            
        </div>
       @endcan


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
</script>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3500); // Change image every 5 seconds
    }
</script>

<script>
        function messaggio() {
          document.getElementById("form-messaggio").style.display = "block";
          document.getElementById("form-proposta").style.display = "none";          
        }

        function closeMessaggio() {
          document.getElementById("form-messaggio").style.display = "none";
        }
        
        function proposta() {
          document.getElementById("form-proposta").style.display = "block";
          document.getElementById("form-messaggio").style.display = "none";

        }

        function closeProposta() {
          document.getElementById("form-proposta").style.display = "none";
        }
    </script>

@endisset
@endsection


