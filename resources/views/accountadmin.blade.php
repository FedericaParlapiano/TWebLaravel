@extends('layouts.useraccount', ['user'=>$user])

<link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}">

@section('title', 'Area riservata')


@section('content')
@isset($user)

<!-- !PAGE CONTENT! -->
    
    <a href="#"><img src="{{ asset('images/users/' . $user->fotoProfilo) }}" alt="immagine di profilo" style="width:65px;" class="circle right margine hide-large hover-opacity"></a>
    <span class="button hide-large xxlarge hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    
    <div class="container">
    
   <div class="row-info">
   <div id="info" class="container about-class" >
        <h2>{{$user->nome}} {{$user->cognome}}</h2>
        <div>
        <p>{{$user->role}}</p>

        @isset($user->dataNascita)
        <p><i class="fa-solid fa-cake-candles margine-right"></i>{{$user->dataNascita}}</p>
        @else
        <p><i class="fa-solid fa-cake-candles margine-right"></i>Non è stata indicata la data di nascita</p>
        @endisset
        @isset($user->sesso)
        <p><i class="fa-solid fa-venus-mars margine-right"></i>{{$user->sesso}}</p>
        @endisset


        <p><i class="fa-solid fa-address-card margine-right"></i>{{$user->username}}</p>

        </div>
    </div>
    
    <!-- Contact Section -->
    <div class="container contact-class">
    <h4 id="contact"><b>Contattami</b></h4>
    <div class="row-padding center padding-16">
      <div class="third mediumturquoise">
        <p><i class="fa fa-envelope text-light-grey"></i></p>
        <p>{{$user->email}}</p>
      </div>
      <div class="third teal">
        <p><i class="fa fa-map-marker text-light-grey"></i></p>
        @isset($user->citta)
        <p>{{$user->citta}}</p>
        @else
        <p>Non è stata inserito la città</p>
        @endisset
      </div>
      <div class="third cadetblue">
        <p><i class="fa fa-phone text-light-grey"></i></p>
        @isset($user->numTelefono)
        <p>{{$user->numTelefono}}</p>
        @else
        <p>Non è stato inserito il numero di telefono</p>
        @endisset
      </div>
    </div>
    </div>
      
   </div> 

  </div>
    
    <div id="FAQ">
            <div class="xlarge"><b>FAQ</b> 
                <a href="{{ route('nuovafaq') }}" title="Inserisci una FAQ" class="button"><i class="fa-solid fa-circle-plus xlarge"></i></a>
            </div>

            <hr>
            @isset($faqs)
            <div class="FAQ">
                @foreach($faqs as $faq)
                <div style="display: flex;">
                <h2>{{ $faq->domanda }} </h2> 
                <div style="float:left; margin-left:20px; margin-top:15px; ">
                    <a href="{{ route('modificafaq', ['faqId'=> $faq->id]) }}" title="Modifica la FAQ" class="button ourblue" style="height: 40px;"><i class="fa-regular fa-pen-to-square"></i></a>
                </div>
                <div style="float:left; margin-left:20px; margin-top:15px; ">
                    <a> 
                        <form method="POST" action="{{ route('eliminafaq', ['faqId'=> $faq->id]) }}">
                        @csrf
                        <button type='submit' name='elimina' class='button ourblue' style="height: 40px;" ><i class="fa-solid fa-trash-can"></i> </button>
                        </form> 
                    </a>
                </div> 
                </div>
                
                <p>{{ $faq->risposta }}</p>                
            @endforeach 
            </div>               
    @endisset
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
@endisset
@endsection


