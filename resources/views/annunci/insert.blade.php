@extends('layouts.public')

@section('title', 'Inserimento di un annuncio')

@section('content')
    
<div class="contain">
  <div class="wrapper">
      <h3>Aggiungi il tuo nuovo annuncio</h3>
        <p>Utilizza questa form per inserire un nuovo annuncio che sarà reso immediatamente visibile sul sito.</p>

        
        {{ Form::open(array('route' => 'nuovoannuncio', 'id' => 'inserisciannuncio', 'files' => true, 'class' => 'form')) }}            
        @csrf    
            <div>
                {{ Form::label('titolo', 'Titolo', ['class' => 'label']) }}
                {{ Form::text('titolo', '', ['class' => 'input-annuncio', 'id' => 'titolo']) }}
                @if ($errors->first('titolo'))
                <div class="errors" >
                    @foreach ($errors->get('titolo') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>
            
            <div>
                {{ Form::label('tipologia', 'Tipologia', ['class' => 'label']) }}
                {{ Form::select('tipologia', ['Appartamento' => 'Appartamento', 'PostoLettoSingolo' => 'Posto letto (camera singola)',  'PostoLettoDoppia' => 'Posto letto (camera doppia)'], ['class' => 'input-annuncio', 'id' => 'tipologia'], ['onchange' => 'check_tipologia() ']) }}
            </div>
            
            <div  id="appartamento" class="row">
                <div class="left">
                {{ Form::label('numCamere', 'Camere totali', ['style' =>'margin-top: 0;']) }}
                {{ Form::text('numCamere', '', ['class' => 'input-annuncio', 'style' =>'width: 80px;','id' => 'numCamere'])}}
                 @if ($errors->first('numCamere'))
                <div class="errors" >
                    @foreach ($errors->get('numCamere') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                </div>
                <div style="margin-left:2em;">
                {{ Form::label('postiLettoTotali', 'Letti totali', ['style' =>'margin-top: 0;']) }}
                {{ Form::text('postiLettoTotali', '', ['class' => 'input-annuncio', 'style' =>'width: 80px;' ,'id' => 'postiLettoTotali'])}}
               @if ($errors->first('postiLettoTotali'))
                <div class="errors" >
                    @foreach ($errors->get('postiLettoTotali') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                </div> 
            </div>
            
            <div id="postoletto" class="row" style="display: none">
                <div class="left">
                {{ Form::label('postiNellaStanza', 'Letti nella stanza', ['style' =>'margin-top: 0;']) }}
                {{ Form::text('postiNellaStanza', '', ['class' => 'input-annuncio', 'style' =>'width: 80px;','id' => 'postiNellaStanza'])}}
                @if ($errors->first('postiNellaStanza'))
                <div class="errors" >
                    @foreach ($errors->get('postiNellaStanza') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                </div>
               
                <div style="margin-left:2em;">
                {{ Form::label('postiLettoTotali', 'Letti totali', ['style' =>'margin-top: 0;']) }}
                {{ Form::text('postiLettoTotali', '', ['class' => 'input-annuncio', 'style' =>'width: 80px;' ,'id' => 'postiLettoTotali'])}}
               @if ($errors->first('postiLettoTotali'))
                <div class="errors" >
                    @foreach ($errors->get('postiLettoTotali') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                </div> 
            </div>

            <div>
                {{ Form::label('superficie', 'Superficie', ['class' => 'label']) }}
                {{ Form::text('superficie', '', ['class' => 'input-annuncio', 'id' => 'superficie']) }}
                @if ($errors->first('superficie'))
                <div class="errors" >
                    @foreach ($errors->get('superficie') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>

            <div >
                {{ Form::label('image', 'Immagine', ['class' => 'label']) }}
                {{ Form::file('image', [ 'id' => 'image', 'multiple' => 'true']) }}
                @if ($errors->first('image'))
                <div class="errors" >
                    @foreach ($errors->get('image') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                
            </div>
            
            <div style="text-align:center; margin-top: 1em;"> Periodo di disponibilità </div>
            <div class="row">
                <div class="left">
                {{ Form::label('inizioPeriodoDisponibilita', 'Inizio', ['style' =>'margin-top: 0;']) }}
                {{ Form::date('inizioPeriodoDisponibilita', '', ['class' => 'input-annuncio', 'style' =>'width: 200px;'])}}
                
                @if ($errors->first('inizioPeriodoDisponibilita'))
                <div class="errors" >
                    @foreach ($errors->get('inizioPeriodoDisponibilita') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                </div>
                <div style="margin-left:2.5em;">
                {{ Form::label('finePeriodoDisponibilita', 'Fine', ['style' =>'margin-top: 0;']) }}
                {{ Form::date('finePeriodoDisponibilita', '', ['class' => 'input-annuncio', 'style' =>'width: 200px;'])}}
                
                @if ($errors->first('finePeriodoDisponibilita'))
                <div class="errors" >
                    @foreach ($errors->get('finePeriodoDisponibilita') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                </div> 
            </div>
            
            
            <div>
                {{ Form::label('descrizione', 'Descrizione', ['class' => 'label']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input-annuncio', 'id' => 'descrizione', 'rows' => 4]) }}
                @if ($errors->first('descrizione'))
                <div class="errors" >
                    @foreach ($errors->get('descrizione') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>

            <div>
                {{ Form::label('canoneAffitto', 'Canone Affitto', ['class' => 'label']) }}
                {{ Form::text('canoneAffitto', '', ['class' => 'input-annuncio', 'id' => 'canoneAffitto']) }}
                @if ($errors->first('canoneAffitto'))
                <div class="errors" >
                    @foreach ($errors->get('canoneAffitto') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="row">
                <div class="left">
                {{ Form::label('zonaLocazione', 'Zona di locazione', ['class' => 'label']) }}
                {{ Form::text('zonaLocazione', '', ['class' => 'input-annuncio', 'id' => 'zonaLocazione', 'style' =>'width: 250px;']) }}
                @if ($errors->first('zonaLocazione'))
                <div class="errors" >
                    @foreach ($errors->get('zonaLocazione') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
                </div>
                
                <div style="margin-left:2em;">
                {{ Form::label('indirizzo', 'Indirizzo', ['class' => 'label']) }}
                {{ Form::text('indirizzo', '', ['class' => 'input-annuncio', 'id' => 'indirizzo', 'style' =>'width: 250px;']) }}
               @if ($errors->first('indirizzo'))
                <div class="errors" >
                    @foreach ($errors->get('indirizzo') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>
            </div>
              
            <hr>
            <h3> Servizi </h3>
            <div>
                <div class="quantity_container">
                <span class="servizi">Bagno <i class="fa-solid fa-toilet" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-bagno')" > </i>
                  {{ Form::text('counting-bagno', '0', ['id' => 'counting-bagno', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-bagno')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Cucina <i class="fa-solid fa-kitchen-set" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-cucina')" > </i>
                  {{ Form::text('counting-cucina', '0', ['id' => 'counting-cucina', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-cucina')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Sala studio <i class="fa-solid fa-book" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-studio')" > </i>
                  {{ Form::text('counting-studio', '0', ['id' => 'counting-studio', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-studio')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Lavanderia <i class="fa-solid fa-faucet" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-lavanderia')" > </i>
                  {{ Form::text('counting-lavanderia', '0', ['id' => 'counting-lavanderia', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-lavanderia')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Giardino <i class="fa-solid fa-tree" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-giardino')" > </i>
                  {{ Form::text('counting-giardino', '0', ['id' => 'counting-giardino', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-giardino')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Parcheggio <i class="fa-solid fa-square-parking" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-parcheggio')" > </i>
                  {{ Form::text('counting-parcheggio', '0', ['id' => 'counting-parcheggio', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-parcheggio')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Garage <i class="fa-solid fa-car-side" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-garage')" > </i>
                  {{ Form::text('counting-garage', '0', ['id' => 'counting-garage', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-garage')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Locale ricreativo <i class="fa-solid fa-chess" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-localericreativo')" > </i>
                  {{ Form::text('counting-localericreativo', '0', ['id' => 'counting-localericreativo', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-localericreativo')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Frigo <i class="fa-solid fa-snowflake" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-frigo')" > </i>
                  {{ Form::text('counting-frigo', '0', ['id' => 'counting-frigo', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-frigo')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Forno <i class="fa-solid fa-toilet-portable" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-forno')" > </i>
                  {{ Form::text('counting-forno', '0', ['id' => 'counting-forno', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-forno')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Lavastoviglie <i class="fa-solid fa-soap" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-lavastoviglie')" > </i>
                  {{ Form::text('counting-lavastoviglie', '0', ['id' => 'counting-lavastoviglie', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-lavastoviglie')" ></i>       
                </div>
                <br>
                <div class="quantity_container">
                <span class="servizi">Aria condizionata <i class="fa-solid fa-fan" style="margin-right: 5px;" ></i></span>
                  <i type="button" class="fa-solid fa-circle-plus" onclick="increment('counting-aria')" > </i>
                  {{ Form::text('counting-aria', '0', ['id' => 'counting-aria', 'style' => 'width: 30px; margin-left: 5px; margin-right: 5px; text-align: center;']) }}
                  <i type="button" class="fa-solid fa-circle-minus" onclick="decrement('counting-aria')" ></i>       
                </div>

            </div>
            

            <hr>            
            <h3> Vincoli </h3>
              <div>
                {{ Form::checkbox('animali', 'Animali', false, ['id' => 'animali']) }}  Animali  <i class="fa-solid fa-dog"></i>               
              </div>
              <div>
                {{ Form::checkbox('fumatori', 'Fumatori', false, ['id' => 'fumatori']) }}  Fumatori  <i class="fa-solid fa-smoking"></i>
              </div>
              <div>
                {{ Form::checkbox('matricole', 'Matricole', false, ['id' => 'matricole']) }}  Matricole  <i class="fa-solid fa-baby"></i>
              </div>
              <div>
                {{ Form::checkbox('feste', 'Feste', false, ['id' => 'feste']) }}  Feste  <i class="fa-solid fa-champagne-glasses"></i>
              </div>
              <div>
                {{ Form::label('sesso', 'Sesso', ['class' => 'label']) }}
                {{ Form::select('sesso', ['Tutti' => '', 'uomini' => 'Solo uomini', 'donne' => 'Solo donne'], '', ['class' => 'input-annuncio', 'id' => 'sesso']) }}
              </div>

            <div>        
                
                {{ Form::submit('Aggiungi annuncio', ['class' => 'button-annuncio input-annuncio']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    
</div>
@endsection
