<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        
       @section('link')
       
        <link rel="stylesheet" type="text/css" href="{{ asset('css/publicstyle.css') }}" > 
        <link rel="stylesheet" type="text/css" href="{{ asset('css/formannunciostyle.css') }}" >   
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">     
        @show
        
        @section('scripts')
        <script src="https://kit.fontawesome.com/ea82011960.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        @show 
        
        
        <title>HomeforStudents | @yield('title', 'Catalogo')</title>
    </head>
    
    <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    </style>
    
    <body id="bodyadmin">
        <!-- Header -->
        <div class="header">
          <h1>Home for Students</h1>
          <p>Trova l'alloggio giusto per te!</p>
        </div>
        <!-- end header -->
        
        <div id="wrapper">
            <div id="menu">
                @include('layouts/_navpublic')
            </div>

            <!-- end #menu -->
            
            <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        @yield('content')
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>

            <!-- end #content -->
            
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
        <!-- End footer -->
            
        </div>
    </body>
</html>