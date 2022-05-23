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
        
    </head>
             
    @include('layouts/_sidebaraccount', ['user'=>$user])
    
    <body>
        <div class="main" style="margin-left:300px">
        <!-- Header -->
        <div class="header">
          <h1>Home for Students</h1>
          <p>Trova l'alloggio giusto per te!</p>
        </div>
        <!-- end header -->
        
        <!-- Navbar -->
        <div class="navbar">
            @include('layouts/_navuser')
        </div>
        <!-- end navbar --> 
        
        <div>
        @yield('content')
        </div>
     
        
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
        
        </div>
    </body>
</html>