@extends('layouts.public')

@section('title', 'Homepage')

<!-- inizio sezione homepage -->
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/publicstyle.css') }}" >
        <!-- The Modal -->
        <div id="modal-log" class="modal">

            <!-- Modal content -->
            <div class="modal-content">


            <span class="close"> &times; </span>
            <p class="login-paragraph"> Accedi al tuo account </p>

              <form action="{{ route('login') }}" class="form login" method="get">

                <div title= "username" class="form-field">
                  <label for="login__username">

                    <i class="fa-solid fa-user"></i>
                    <span class="hidden">Nome utente</span>
                  </label>
                  <input autocomplete="username" id="login__username" type="text" name="username" class="form-input" placeholder="Username" required>
                </div>

                <div title = "password" class="form-field">
                  <label for="login__password">
                    <i class="fa-solid fa-lock"></i>
                    <span class="hidden">Password</span>
                  </label>
                  <input id="login__password" type="password" name="password" class="form-input" placeholder="Password" required>
                </div>

                <div class="form-field">
                  <input type="submit" value="Accedi">
                </div>

              </form>

              <p class="text-center"> Non sei ancora registrato? <a href="#"> Registrati ora.</a> 


            </div>

        </div>


        
        <!-- Chi siamo e Mission -->
        <div class="row">
          <div class="about">
            <h1>Chi siamo</h1>
            Benvenuti sul nostro sito. 
            <br>
            Siamo un gruppo di studentesse universitarie e abbiamo creato questo sito per tutti gli studenti come noi alla ricerca dell'alloggio perfetto per gli studi.<br>
            <br><img src="images/chiavi.jpg" alt="Consegna delle chiavi" class="chiavi">
          </div>
          <div class="mission">
            <h1>La nostra missione</h1>
            Siamo qui per sostenervi in questa faticosa ricerca. Vantiamo di oltre 20000 annunci.
            Sicuramente tra uno di questi troverai quello giusto per te. <br>
            Indica la città, il periodo di affitto e le tue richieste e noi ti mostreremo gli alloggi che fanno al caso tuo.<br>
            Potrai contattare direttamente dal sito gli host e inviare a loro una proposta.<br>
            Fatta la tua scelta, penseremo a tutto noi e il tuo contratto verrà gestito in modo automatico e semplice.
            Vi garantiamo la massima sicurezza, i nostri host sono controllati e certificati. <br>
            Ora tocca a te! Inizia a navigare!
          </div>
        </div>
        
        
        <!-- FAQ -->
        <div class="container-FAQ">
        
       
        @isset($faqs)
        <h2>FAQ</h2>
        <p>Sebbene siamo sempre veloci e disponibili a rispondere, vi consigliamo di consultare questa sezione prima di contattarci. </p>

            @foreach($faqs as $faq)
            <button onclick="displayFAQ({{ $faq->id }})" class="section-FAQ"> {{ $faq->domanda }} </button>
            <div id="{{ $faq->id }}" class="container-FAQ hide-FAQ">
              <p>{{ $faq->risposta }}</p>
            </div>
            @endforeach
        @endisset()    
        </div>
        
        
        
        <!-- Regulation -->
        <div class="container-regolamento"> 
        <span>Regolamento</span> 
            <a href="Regolamento.pdf"> <button id="visualizza" onclick="" class="button ourblue"> <i class="fa-solid fa-file-pdf"></i> Visualizza</button></a>
            <a href="Regolamento.pdf" download> <button id="download" onclick="" class="button ourblue"> <i class="fa-solid fa-download"></i> Download</button></a>
        </div>
        
        
        <!-- Address -->
        <address id="contatti">
        <div class="row">
            <div class="contatti">
                <h3>I nostri contatti</h3>
                <div class="contatti_dove_link">
                    <a href="#"><i class="fa-solid fa-phone"></i> 321456987</a>
                    <a href="#"><i class="fa-solid fa-phone"></i> 321456988</a>
                    <a href="mailto:homeforstudents@gmail.com"><i class="fa-solid fa-envelope"></i> homeforstudents@gmail.com</a>
                </div>
            </div>
            <div class="dove">
                <h3>Dove siamo</h3>
                <div class="contatti_dove_link">
                    <a href="https://www.google.it/maps/place/Universit%C3%A0+Politecnica+delle+Marche+-+Facolt%C3%A0+di+Ingegneria/@43.586779,13.4990855,14z/data=!4m9!1m2!2m1!1sunivpm+ingegneria!3m5!1s0x132d80233dd931ef:0x161719e4f3f5daaf!8m2!3d43.586779!4d13.516595!15sChF1bml2cG0gaW5nZWduZXJpYVoTIhF1bml2cG0gaW5nZWduZXJpYZIBCnVuaXZlcnNpdHmaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVTXllSEZ5VUdGQkVBRQ" target="blank"><i class="fa-solid fa-map-location-dot"></i> Via Brecce Bianche, 12, Ancona</a>
                    <a href="https://www.google.com/maps?client=firefox-b-d&q=silicon+valley&um=1&ie=UTF-8&sa=X&ved=2ahUKEwi22-bfw6_3AhXxsaQKHXqJDswQ_AUoAnoECAIQBA" target="blank"><i class="fa-solid fa-map-location-dot"></i> Silicon Valley, California</a>
                </div>
            </div>
        </div>
        </address>
       
@endsection

