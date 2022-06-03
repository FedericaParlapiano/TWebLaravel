@extends('layouts.public')

<script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

@section('link')
@parent
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
@endsection

@section('scripts')
@parent
@endsection

@section('title', 'Catalogo Annunci')
 

@section('content')

@can('isLocatario')

<!-- inizio sezione prodotti -->
<div class="contenitore-form"> 
    {{ Form::open(array('route' => 'catalogoordinato', 'id'=>'filtri-form', 'target'=>'_blank')) }}
    {{ Form::token() }}
    <div type="button" id="filtri-button" onclick="openForm()" ><i class="fa-solid fa-ellipsis-vertical"></i></div> 

    <div class = "row">    
        <div class="left" style="margin-left:2em;">
        {{ Form::label('citta', 'Zona di locazione', ['class' => 'label-cerca']) }} 
        {{ Form::text('citta', '', ['class' => 'input', 'id' => 'citta']) }}
        @if ($errors->first('citta'))
        <div class="errors">
            @foreach ($errors->get('citta') as $message)
            <p>{{ $message }}</p>
            @endforeach
        </div>
        @endif  
         </div>
                    
        <div style="margin-left:2.5em;">  
            {{ Form::label('da', 'Da', ['class' => 'label-cerca']) }}
            {{ Form::date('da', '', ['class' => 'input', 'id' => 'da']) }}
            @if ($errors->first('da'))
            <div class="errors">
                @foreach ($errors->get('da') as $message)
                <p>{{ $message }}</p>
                @endforeach
            </div>
            @endif 
        </div>  
                    
        <div style="margin-left:2.5em;">
            {{ Form::label('a', 'A', ['class' => 'label-cerca']) }}
            {{ Form::date('a', '', ['class' => 'input', 'id' => 'a']) }}
            @if ($errors->first('a'))
            <div class="errors">
                @foreach ($errors->get('a') as $message)
                <p>{{ $message }}</p>
                @endforeach
            </div>
            @endif  
        </div> 
                
        <div class='submit-filter'>         
        <a href='{{url("catalog")}}' id='button-cerca'>Cerca</a>
        </div>
        
        {{ Form::submit('Ordina per rilevanza', array('title' => 'mostra anche quelli che non soddisfano tutti i requisiti' ,'name' => 'submitbutton', 'id' => 'ordinarilevanza')) }}
        
    </div>  
</div>


           



<!-- The Modal -->
<div id="modal-filter" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
      
    
    <div id="close" onclick="closeForm()"> &times; </div>
    <h1 id="h1-filtri"> Filtri </h1>

    
          <h2 id="h2-filtri"> Fascia di prezzo </h2>
          
          <p>
            {{ Form::text('amount', '', ['id' => 'amount', 'readonly' => 'readonly']) }}
          </p>

          <div id="slider-range"></div>
          
          <hr>
          <br>
          
          <h2 id="h2-filtri"> Tipo di alloggio </h2>
          
            <div class="row-card-filtri">
            <div class="column-card-filtri">
              <div class="card-filtri" id="show-hidden-menu">
                <h3>Tutti</h3>
              </div>
            </div>
            
            <div class="column-card-filtri" >
              <div class="card-filtri" id="show-hidden-menu-appartamento">
                <h3>Appartamento</h3>
              </div>
            </div>

            <div class="column-card-filtri">
              <div class="card-filtri" id="show-hidden-menu-posto-letto">
                <h3>Posto letto </h3>
              </div>
            </div>

          </div>
          
          <hr>
          <br>
          
          <div class="hidden-menu" id="tutti-menu" style="display: none; ">
          <h2 id="h2-filtri"> Caratteristiche </h2>
            
            {{ Form::radio('tipologia', 'tutti', false, ['style'=> 'display: none', 'id'=>'tutti']) }}
            
            {{ Form::label('superficieT', 'Superfcie (in mq)') }}
            {{ Form::text('superficieT', '', ['class' => 'input','id' => 'superficieT', 'style' => 'width: 30%']) }}
            @if ($errors->first('superficieT'))
              <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("tutti-menu").style.display = "block";
                
              </script>
              <ul class="errors">
                @foreach ($errors->get('superficieT') as $message)
                <li>{{ $message }}</li>
                @endforeach
              </ul>
            @endif
            
            <br>
            <br>
            {{ Form::label('postiLettoTotaliT', 'Numero posti letto totali') }}
            {{ Form::text('postiLettoTotaliT', '', ['class' => 'input','id' => 'postiLettoTotaliT', 'style' => 'width: 30%']) }}
            @if ($errors->first('postiLettoTotaliT'))
              <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("tutti-menu").style.display = "block";
                
              </script>
              <ul class="errors">
                @foreach ($errors->get('postiLettoTotaliT') as $message)
                <li>{{ $message }}</li>
                @endforeach
              </ul>
            @endif
            
            <br>
          
            <h5>
                Filtri specifici per un appartamento
            </h5>

            {{ Form::label('numCamereT', 'Numero di camere') }}
            {{ Form::text('numCamereT', '', ['class' => 'input','id' => 'numCamereT', 'style' => 'width: 30%']) }}
            @if ($errors->first('numCamereT'))
              <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("tutti-menu").style.display = "block";
                
              </script>
              <ul class="errors">
                  @foreach ($errors->get('numCamereT') as $message)
                  <li>{{ $message }}</li>
                  @endforeach
              </ul>
            @endif
              
              <br>
              
            <h5>
                Filtri specifici per un posto letto
            </h5>
              
            {{ Form::label('postiNellaStanzaT', 'Numero posti letto nella stanza') }}
            {{ Form::text('postiNellaStanzaT', '', ['class' => 'input','id' => 'postiNellaStanzaT', 'style' => 'width: 30%']) }}
            @if ($errors->first('postiNellaStanzaT'))
              <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("tutti-menu").style.display = "block";
                
              </script>
              <ul class="errors">
                @foreach ($errors->get('postiNellaStanzaT') as $message)
                <li>{{ $message }}</li>
                @endforeach
              </ul>
            @endif
          
            </div>
          
          
          <div class="hidden-menu-appartamento" id="appartamento-menu" style="display: none;">
          <h2 id="h2-filtri"> Caratteristiche </h2>
            
            {{ Form::label('superficieA', 'Superfcie (in mq)') }}
            {{ Form::text('superficieA', '', ['class' => 'input','id' => 'superficieA', 'style' => 'width: 30%']) }}
            @if ($errors->first('superficieA'))
              <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("appartamento-menu").style.display = "block";
                
              </script>
              <ul class="errors">
                  @foreach ($errors->get('superficieA') as $message)
                  <li>{{ $message }}</li>
                  @endforeach
              </ul>
            @endif
          <br>
          <br>
          {{ Form::label('postiLettoTotaliA', 'Numero posti letto totali') }}
          {{ Form::text('postiLettoTotaliA', '', ['class' => 'input','id' => 'postiLettoTotaliA', 'style' => 'width: 30%']) }}
           @if ($errors->first('postiLettoTotaliA'))
            <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("appartamento-menu").style.display = "block";
                
            </script>
              <ul class="errors">
                @foreach ($errors->get('postiLettoTotaliA') as $message)
                <li>{{ $message }}</li>
                @endforeach
              </ul>
           @endif
            
          <br>
          <br>
          {{ Form::radio('tipologia', 'Appartamento', false, ['id' => 'Appartamento', 'style'=> 'display: none']) }}

          {{ Form::label('numCamere', 'Numero di camere') }}
          {{ Form::text('numCamere', '', ['class' => 'input','id' => 'numCamere', 'style' => 'width: 30%']) }}
          @if ($errors->first('numCamere'))
            <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("appartamento-menu").style.display = "block";
                
            </script>
            <ul class="errors">
              @foreach ($errors->get('numCamere') as $message)
              <li>{{ $message }}</li>
              @endforeach
            </ul>
          @endif
            
          </div>
          
          <div class="hidden-menu-posto-letto" id="postoletto-menu" style="display: none;">
          <h2 id="h2-filtri"> Caratteristiche </h2>
          {{ Form::radio('tipologia', 'PostoLetto', false, ['style'=> 'display: none', 'id' => 'PostoLetto']) }} 
          
          {{ Form::radio('tipologia', 'PostoLettoSingolo', false, ['id' => 'PostoLettoSingolo']) }} 
          {{ Form::label('tipologia', 'Posto Letto in camera singola') }}
          <br>
          {{ Form::radio('tipologia', 'PostoLettoDoppia', false, ['id' => 'PostoLettoDoppia']) }} 
          {{ Form::label('tipologia', 'Posto Letto in camera doppia') }}
          <br>
          <br>
          {{ Form::label('superficieP', 'Superfcie (in mq)') }}
          {{ Form::text('superficieP', '', ['class' => 'input','id' => 'superficieP', 'style' => 'width: 30%']) }}
          @if ($errors->first('superficieP'))
            <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("postoletto-menu").style.display = "block";
                
            </script>
            <ul class="errors">
                @foreach ($errors->get('superficieP') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
          @endif
          <br>
          <br>
          {{ Form::label('postiLettoTotalP', 'Numero posti letto totali') }}
          {{ Form::text('postiLettoTotaliP', '', ['class' => 'input','id' => 'postiLettoTotaliP', 'style' => 'width: 30%']) }}
          @if ($errors->first('postiLettoTotaliP'))
            <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("postoletto-menu").style.display = "block";
                
            </script>
              <ul class="errors">
                @foreach ($errors->get('postiLettoTotaliP') as $message)
                <li>{{ $message }}</li>
                @endforeach
              </ul>
           @endif
          <br>
          <br>
          {{ Form::label('postiNellaStanza', 'Numero posti letto nella stanza') }}
          {{ Form::text('postiNellaStanza', '', ['class' => 'input','id' => 'postiNellaStanza', 'style' => 'width: 30%']) }}
          @if ($errors->first('postiNellaStanza'))
            <script> 
                
                document.getElementById("modal-filter").style.display = "block"; 
                document.getElementById("postoletto-menu").style.display = "block";
                
            </script>
          <ul class="errors">
            @foreach ($errors->get('postiNellaStanza') as $message)
            <li>{{ $message }}</li>
            @endforeach
          </ul>
        @endif
          </div>
          
          
          <br>
          <div  style="text-align: right;">
          <div class='submit-filter' style="clear: both; text-align: right;">
              
            <a href='{{url("catalog")}}' id='button-cerca' onclick='closeForm();'>Applica</a>
         </div>
         </div>
          
      {{ Form::close() }}
    
    </div>
</div>


<br>

<div id="pagination_data" style="text-align: center">
    @include("catalog-pagination", ["annunci"=>$annunci, "foto"=>$foto, "annunciconfoto"=>$annunciconfoto])
</div>
@endcan

@cannot('isLocatario')
@isset($annunci)
<div class="contenitore-annunci">
<div class="catalogo-annunci">
    @foreach ($annunci as $annuncio)
    
    @if($annuncio->disponibilita == 0)
        <div class="annuncio" style="opacity: 0.5;">
    @else
        <div class="annuncio white">
    @endif

        @php
        $assente=true;
        @endphp
        @foreach($foto as $singolafoto)
        @if($singolafoto->annuncio!=$annuncio->id)
            @continue
        @endif
        @if($singolafoto->annuncio==$annuncio->id)
            @php
            $assente=false
            @endphp
            <div class="img-class"><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank"><img src="{{ asset('images/annunci/' . $singolafoto->immagine) }}" alt="Immagine Casa" class="resize-img"></a></div>
            @break
        @endif
        @endforeach
        
        @if($assente)
        <div class="img-class"><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank"><img src="images/annunci/noimage.jpg" alt="Casa" class="resize-img"></a></div>
        @endif
        
        
        
        
        <b>
            <h3><a href="{{ route('annuncio', [$annuncio->id]) }}" target="_blank">{{ $annuncio->titolo }} ({{ $annuncio->tipologia }}) </a></h3>
        </b>
        <p>{{ $annuncio->zonaLocazione }}, Canone: {{ $annuncio->canoneAffitto }}€</p>
        <p class="descrizione2">{{ $annuncio->descrizione }}</p>
        
    </div>
    @endforeach
    <div class="pagination">
    <!--Paginate-->
    @include('pagination.paginator', ['paginator' => $annunci])
    </div>
    @endisset
    @endcannot
</div>    
</div>

@endsection()

