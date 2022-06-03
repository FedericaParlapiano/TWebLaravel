@extends('layouts.useraccount')

<link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}">

@section('title', 'Area riservata')

@section('content')

<!-- !PAGE CONTENT! -->
    
    <a href="#"><img src="images/users/profiloLocatario.jpg" style="width:65px;" class="circle right margine hide-large hover-opacity"></a>
    <span class="button hide-large xxlarge hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    
    <div class="container">
    
   <div class="row-info">
   <div id="info" class="container about-class" >
    <h2>Lucia Bianchi</h2>
    <div>
    <p>Sono una musicista e mi piace viaggiare. Nel mio tempo libero leggo libri per bambini.</p>
    <p><i class="fa-solid fa-cake-candles margine-right"></i>27/04/1980</p>
    <p><i class="fa-solid fa-venus-mars margine-right"></i>F</p>
    <p><i class="fa-solid fa-briefcase margine-right"></i>Musicista</p>
   </div>
    
    @can('isUser')
    <br> 
    <button class="button black padding-12"><i class="fa-solid fa-pencil"></i> Modifica </button>
    @endcan
    </div>
    
    <!-- Contact Section -->
    <div class="container contact-class">
    <h4 id="contact"><b>Contattami</b></h4>
    <div class="row-padding center padding-16">
      <div class="third mediumturquoise">
        <p><i class="fa fa-envelope text-light-grey"></i></p>
        <p>luciabianchi@gmail.com</p>
      </div>
      <div class="third teal">
        <p><i class="fa fa-map-marker text-light-grey"></i></p>
        <p>Ancona</p>
      </div>
      <div class="third cadetblue">
        <p><i class="fa fa-phone text-light-grey"></i></p>
        <p>3214561235</p>
      </div>
    </div>
    </div>
      
   </div> 
   
   <hr>

  <!-- Annunci -->
  <div id="annunci">
    <div class="xlarge"><b>I miei annunci</b> <button class="button"><i class="fa-solid fa-circle-plus xlarge"></i></button></div>
    
    <hr>
    <div class="section bottombar padding-16">
      <span class="margine-right">Filter:</span> 
      <button class="button black">Tutti</button>
      <button class="button white"><i class="fa-regular fa-calendar-check margine-right"></i>Disponibili</button>
      <button class="button white hide-small"><i class="fa-regular fa-calendar-xmark margine-right"></i>Non disponibili</button>
      <button class="button white hide-small"><i class="fa-solid fa-note-sticky margine-right"></i>Opzionati</button>
    </div>
    </div>
  </div>
  
  
  <div style="align-content: center; background-color: #e6e6fa;">
  <!-- First Photo Grid-->
  <div class="row-padding">
    <div class="third container contenitore-annuncio">
        <div class="button-div-class">
        <button id="modifica-button" onclick="" class="button black button-class"><i class="fa-regular fa-pen-to-square"></i></button>
        <button id="elimina-button" onclick="" class="button black button-class"><i class="fa-solid fa-trash-can"></i></button>
        </div>
        <br>
        <div class="img-class"><a href=""><img src="risorse/house.png" alt="Casa1" style="width:80%" class="hover-opacity img-class"></a></div> 
       
      <div class="container white">
        <b>
            <a href="">Casa 1</a>
            
        </b>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="button-div-class"><button id="proposte-button" onclick="" class="button grey button-class">Proposte</button><div>
      </div>
    </div>
    </div>
    </div>
    <div class="third container contenitore-annuncio">
        <div class="button-div-class">
        <button id="modifica-button" onclick="" class="button black button-class"><i class="fa-regular fa-pen-to-square"></i></button>
        <button id="elimina-button" onclick="" class="button black button-class"><i class="fa-solid fa-trash-can"></i></button>
        </div>
        <br>
        <div class="img-class"><a href=""><img src="risorse/house.png" alt="Casa2" style="width:80%" class="hover-opacity img-class"></a></div> 
       
      <div class="container white">
        <b>
            <a href="">Casa 2</a>
            
        </b>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="button-div-class"><button id="proposte-button" onclick="" class="button grey button-class">Proposte</button><div>
      </div>
    </div>
    </div>
    </div>
    <div class="third container contenitore-annuncio">
        <div class="button-div-class">
        <button id="modifica-button" onclick="" class="button black button-class"><i class="fa-regular fa-pen-to-square"></i></button>
        <button id="elimina-button" onclick="" class="button black button-class"><i class="fa-solid fa-trash-can"></i></button>
        </div>
        <br>
        <div class="img-class"><a href=""><img src="risorse/house.png" alt="Casa3" style="width:80%" class="hover-opacity img-class"></a></div> 
       
      <div class="container white">
        <b>
            <a href="">Casa 3</a>
            
        </b>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="button-div-class"><button id="proposte-button" onclick="" class="button grey button-class">Proposte</button><div>
      </div>
    </div>
    </div>
    </div>
  </div>
  
  
  <!-- Second Photo Grid-->
  <div class="row-padding">
    <div class="third container contenitore-annuncio">
        <div class="button-div-class">
        <button id="modifica-button" onclick="" class="button black button-class"><i class="fa-regular fa-pen-to-square"></i></button>
        <button id="elimina-button" onclick="" class="button black button-class"><i class="fa-solid fa-trash-can"></i></button>
        </div>
        <br>
        <div class="img-class"><a href=""><img src="risorse/house.png" alt="Casa1" style="width:80%" class="hover-opacity img-class"></a></div> 
       
      <div class="container white">
        <b>
            <a href="">Casa 1</a>
            
        </b>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="button-div-class"><button id="proposte-button" onclick="" class="button grey button-class">Proposte</button><div>
      </div>
    </div>
    </div>
    </div>
    <div class="third container contenitore-annuncio">
        <div class="button-div-class">
        <button id="modifica-button" onclick="" class="button black button-class"><i class="fa-regular fa-pen-to-square"></i></button>
        <button id="elimina-button" onclick="" class="button black button-class"><i class="fa-solid fa-trash-can"></i></button>
        </div>
        <br>
        <div class="img-class"><a href=""><img src="risorse/house.png" alt="Casa2" style="width:80%" class="hover-opacity img-class"></a></div> 
       
      <div class="container white">
        <b>
            <a href="">Casa 2</a>
            
        </b>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="button-div-class"><button id="proposte-button" onclick="" class="button grey button-class">Proposte</button><div>
      </div>
    </div>
    </div>
    </div>
    <div class="third container contenitore-annuncio">
        <div class="button-div-class">
        <button id="modifica-button" onclick="" class="button black button-class"><i class="fa-regular fa-pen-to-square"></i></button>
        <button id="elimina-button" onclick="" class="button black button-class"><i class="fa-solid fa-trash-can"></i></button>
        </div>
        <br>
        <div class="img-class"><a href=""><img src="risorse/house.png" alt="Casa3" style="width:80%" class="hover-opacity img-class"></a></div> 
       
      <div class="container white">
        <b>
            <a href="">Casa 3</a>
            
        </b>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="button-div-class"><button id="proposte-button" onclick="" class="button grey button-class">Proposte</button><div>
      </div>
    </div>
    </div>
    </div>
  </div>
  
  <!-- Pagination -->
  <div class="center padding-32">
    <div class="bar">
      <a href="#" class="bar-item button hover-black">&laquo;</a>
      <a href="#" class="bar-item button hover-black">1</a>
      <a href="#" class="bar-item button hover-black">2</a>
      <a href="#" class="bar-item button hover-black">3</a>
      <a href="#" class="bar-item button hover-black">4</a>
      <a href="#" class="bar-item button hover-black">&raquo;</a>
    </div>
  </div>
  
  </div>
  
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
@endsection


