<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @section('link')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/publicstyle.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/catalogostyle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">      
        @show
        
        @section('scripts')
        <script src="https://kit.fontawesome.com/ea82011960.js" crossorigin="anonymous"></script>
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
            
            
            function checkRole(){
                    var locatore = document.getElementById("locatore");
                    var locatario = document.getElementById("locatario");
                    var universita = document.getElementById("divuniversita");
                    var facolta = document.getElementById("divfacolta");
                    var anno = document.getElementById("divimmatricolazione");

                    if (locatario.checked) {
                         universita.style.display = "flex";
                         facolta.style.display = "flex";
                         anno.style.display = "flex";
                    }
                    
                    if (locatore.checked){
                      universita.style.display = "none";
                      facolta.style.display = "none";
                      anno.style.display = "none";

                    }
              }                               
              
        </script>
        @show

        <title>HomeforStudents | @yield('title', 'Homepage')</title>
        
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        </style>
        
        
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
        
        <div>
        @yield('content')
        </div>
     
        
        <!-- Footer -->
        <footer style="clear: both;">
            <div class="social">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/?lang=it"><i class="fa-brands fa-twitter"></i></a>
            <br>
            Progetto di Tecnologie Web - Home for Students
            </div>
        </footer>
        
        
    </body>
    
    <script type="text/javascript">           
            // Prendo il riferimento al modal
            var modal = document.getElementById("modal-filter");
     
            function openForm() {
                modal.style.display = "block";
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                
                };
            }

            function closeForm() {
                modal.style.display = "none";
            }
          
        </script> 
    
</html>