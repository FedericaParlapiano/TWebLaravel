
<!-- Overlay effect when opening sidebar on small screens -->
<div class="overlay hide-large animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<!-- Sidebar/menu -->
<nav class="sidebar collapse animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>

  <div class="container">
    <a href="#" onclick="w3_close()" class="hide-large right padding hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    @isset($user->fotoProfilo)  
    <img src="{{ asset('images/users/' . $user->fotoProfilo) }}" alt="immagine di profilo" style="width:45%; margin: 10px;" class="round"><br><br>
    @else
    <img src="images/users/profiloLocatario.jpg" style="width:45%; margin: 10px;" class="round"><br><br>
    @endisset
    <h4><b>{{$user->nome}} {{$user->cognome}}</b></h4>
    <p class="text-grey">{{$user->role}}</p>
  </div>
    
  @can('isUser')
  <div class="bar-block">
    <a href="#info" onclick="w3_close()" class="bar-item button padding"> <i class="fa-solid fa-user margine-right"></i> PROFILO</a> 
    @can('isLocatore')
    <a href="#annunci" onclick="w3_close()" class="bar-item button padding text-teal"><i class="fa-solid fa-shop margine-right"></i>I MIEI ANNUNCI</a> 
    @endcan
    <a href="{{ route('messaggistica') }}" onclick="w3_close()" class="bar-item button padding"><i class="fa-solid fa-comments margine-right"></i>MESSAGGI</a>
    @can('isLocatario')
    <a href="#proposte-inviate" onclick="w3_close()" class="bar-item button padding"><i class="fa-regular fa-paper-plane margine-right"></i> PROPOSTE</a>
    @endcan
    @can('isLocatore')
    <a href="#propostericevute" onclick="w3_close()" class="bar-item button padding"><i class="fa-regular fa-paper-plane margine-right"></i> PROPOSTE</a>
    @endcan
  </div>
  @endcan
  
    @can('isAdmin')
  <div class="bar-block">
    <a href="#statistiche" onclick="w3_close()" class="bar-item button padding text-teal"><i class="fa-solid fa-chart-pie margine-right"></i>STATISTICHE</a> 
    <a href="#FAQ" onclick="w3_close()" class="bar-item button padding text-teal"> <i class="fa-solid fa-question margine-right"></i> FAQ</a>
  </div>
  @endcan
  
  
</nav>    