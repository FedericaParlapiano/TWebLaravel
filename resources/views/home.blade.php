<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/publicstyle.css') }}" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <title>HomeforStudents | @yield('title', 'Homepage')</title>
        <script src="https://kit.fontawesome.com/ea82011960.js" crossorigin="anonymous"></script>
        
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        </style>
        
        <script type="text/javascript">
            function displayFAQ(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("show-FAQ") == -1) {
                  x.className += " show-FAQ";
                }
                else { 
                  x.className = x.className.replace(" show-FAQ", "");
                }
            }
            
            
            // Get the modal
            var modal = document.getElementById("modal-log");

            // Get the button that opens the modal
            var a = document.getElementById("anchor-log");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            a.onclick = function() {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            
          
        </script>
        
    </head>
    <body>
        <!-- Header -->
        <div class="header">
          <h1>Home for Students</h1>
          <p>Trova l'alloggio giusto per te!</p>
        </div>
        <!-- end header -->
        
        <!-- Navbar -->
        <div class="navbar">
            @include('layouts/_navpublic')
        </div>
        <!-- end navbar -->
        
        
        <!-- Chi siamo e Mission -->
        <div class="row">
          <div class="about">
            <h1>Chi siamo</h1>
            Benvenuti sul nostro sito. 
            <br>
            Siamo un gruppo di studentesse universitarie e abbiamo creato questo sito per tutti gli studenti come noi alla ricerca dell'alloggio perfetto per gli studi.<br>
            <br><img src="risorse/chiavi.jpg" alt="Consegna delle chiavi" class="chiavi">
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

        <h2>FAQ</h2>
        <p>Sebbene siamo sempre veloci e disponibili a rispondere, vi consigliamo di consultare questa sezione prima di contattarci. </p>

        <button onclick="displayFAQ('FAQ1')" class="section-FAQ">Come posso fare una ricerca sul sito?</button>
        <div id="FAQ1" class="container-FAQ hide-FAQ">
          <h4>Come posso fare una ricerca sul sito?</h4>
          <p>Per poter fare una ricerca, basta cliccare sulla sezione ricerca. Comparirà una form in cui inserire i criteri di ricerca.
          <br> Ti consigliamo di indicare almeno la città di interesse. Inoltre puoi indicare il tipo di camera che cerchi o se cerchi
          un intero appartamento. <br> Puoi anche indicare molti altri filtri.</p>
        </div>
        
        <button onclick="displayFAQ('FAQ2')" class="section-FAQ">Come posso contattare un host?</button>
        <div id="FAQ2" class="container-FAQ hide-FAQ">
          <h4>Come posso contattare un host?</h4>
          <p>Puoi contattare l'host direttamente all'interno del sito tramite la chat interna, a cui puoi accedere solo dopo aver 
          effettuato il login. <br> Altrimenti, sul profilo dell'host puoi trovare informazioni su come contattarlo.</p>
        </div>
        </div>
        
        
        <!-- Regulation -->
        <div class="container-regolamento"> 
        <span>Regolamento</span> 
            <a href="risorse/Regolamento.pdf"> <button id="visualizza" onclick="" class="button black"> <i class="fa-solid fa-file-pdf"></i> Visualizza</button></a>
            <a href="risorse/Regolamento.pdf" download> <button id="download" onclick="" class="button black"> <i class="fa-solid fa-download"></i> Download</button></a>
        </div>
        
        
        <!-- Address -->
        <address id="contatti">
        <div class="row">
            <div class="contatti">
                <div>I nostri contatti</div> <br>
                <div class="contatti_dove_link">
                    <a href="#"><i class="fa-solid fa-phone"></i> 321456987</a>
                    <a href="#"><i class="fa-solid fa-phone"></i> 321456988</a>
                    <a href="#"><i class="fa-solid fa-envelope"></i> homeforstudents@gmail.com</a>
                </div>
            </div>
            <div class="dove">
                <div>Dove siamo</div> <br>
                <div class="contatti_dove_link">
                    <a href="https://www.google.it/maps/place/Universit%C3%A0+Politecnica+delle+Marche+-+Facolt%C3%A0+di+Ingegneria/@43.586779,13.4990855,14z/data=!4m9!1m2!2m1!1sunivpm+ingegneria!3m5!1s0x132d80233dd931ef:0x161719e4f3f5daaf!8m2!3d43.586779!4d13.516595!15sChF1bml2cG0gaW5nZWduZXJpYVoTIhF1bml2cG0gaW5nZWduZXJpYZIBCnVuaXZlcnNpdHmaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVTXllSEZ5VUdGQkVBRQ" target="blank"><i class="fa-solid fa-map-location-dot"></i> Via Brecce Bianche, 12, Ancona</a>
                    <a href="https://www.google.com/maps?client=firefox-b-d&q=silicon+valley&um=1&ie=UTF-8&sa=X&ved=2ahUKEwi22-bfw6_3AhXxsaQKHXqJDswQ_AUoAnoECAIQBA" target="blank"><i class="fa-solid fa-map-location-dot"></i> Silicon Valley, California</a>
                </div>
            </div>
        </div>
        </address>
        
        <!-- Footer -->
        <footer>
            <div class="social">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/?lang=it"><i class="fa-brands fa-twitter"></i></a>
            <br>
            Progetto di Tecnologie Web - Home for Students
            </div>
        </footer>
        
        
    </body>
</html>