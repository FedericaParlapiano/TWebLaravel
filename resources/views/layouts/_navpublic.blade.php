<!-- Navigation Bar -->
<div class="navbar">
    <a href="{{ route('homepage') }}" title="Homepage del sito">Home</a>
    <a href="{{ route('catalog') }}" title="Consulta il catalogo">Catalogo</a>
    
    @can('isAdmin')
        <a href="{{ route('nuovafaq') }}" title="Inserisci una FAQ">Inserisci FAQ</a>
        <a href="" title="Visualizza il tuo profilo">Account</a>
    @endcan
    
    @can('isLocatore')
        <a href="{{ route('nuovoannuncio') }}" title="Aggiungi un annuncio">Inserisci Annuncio</a>
        <a href="" title="Visualizza il tuo profilo">Account</a>
    @endcan
    
    @can('isLocatario')
        <a href="" title="Visualizza il tuo profilo">Account</a>
    @endcan
    
    @auth
        <a href="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth
    
    @guest
        <a href="{{ route('login') }}" title="Login">Login</a>
    @endguest
     
    <a href="#contatti" title="Contattaci">Supporto</a>
</div>