@extends('layouts.user')

@section('title', 'Inserimento di un annuncio')

@section('content')
    


<div class="contain">
  <div class="wrapper">
      <h3>Aggiungi il tuo nuovo annuncio</h3>
        <p>Utilizza questa form per inserire un nuovo annuncio che sarà reso immediatamente visibile sul sito.</p>

            {{ Form::open(array('route' => 'nuovoannuncio', 'id' => 'inserisciannuncio', 'files' => true, 'class' => 'form')) }}
            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('titolo', 'Titolo annuncio', ['class' => 'label']) }}
                {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('titolo'))
                <ul class="errors">
                    @foreach ($errors->get('titolo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  >
                {{ Form::label('tipologia', 'Tipologia', ['class' => 'label']) }}
                {{ Form::select('tipologia', ['1' => 'Appartamento', '0' => 'Posto letto'], 1, ['class' => 'input','id' => 'tipologia']) }}
            </div>


            <div >
                {{ Form::label('image', 'Immagine', ['class' => 'label']) }}
                {{ Form::file('image', [ 'id' => 'image', 'multiple' => 'true']) }}
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div style="text-align:center; margin-top: 1em;"> Periodo di disponibilità </div>
            <div class="row">
                <div class="left">
                {{ Form::label('inizio', 'Inizio', ['class' => 'label, tab', 'style' =>'margin-top: 0;']) }}
                {{ Form::date('inizio', '', ['class' => 'input', 'style' =>'width: 200px;'])}}
                </div>
                <div style="margin-left:2.5em;">
                {{ Form::label('fine', 'Fine', ['class' => 'label, tab', 'style' =>'margin-top: 0;']) }}
                {{ Form::date('fine', '', ['class' => 'input', 'style' =>'width: 200px;'])}}
                </div> 
            </div>
            
            
            <div>
                {{ Form::label('descrizione', 'Descrizione', ['class' => 'label']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input', 'id' => 'descrizione', 'rows' => 4]) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('canone', 'Canone Affitto', ['class' => 'label']) }}
                {{ Form::text('canone', '', ['class' => 'input', 'id' => 'price']) }}
                @if ($errors->first('price'))
                <ul class="errors">
                    @foreach ($errors->get('canone') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="row">
                <div class="left">
                {{ Form::label('zona', 'Zona di locazione', ['class' => 'label']) }}
                {{ Form::text('zona', '', ['class' => 'input', 'id' => 'zona', 'style' =>'width: 250px;']) }}
                @if ($errors->first('zona'))
                <ul class="errors">
                    @foreach ($errors->get('zona') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                </div>
                
                <div style="margin-left:2em;">
                {{ Form::label('indirizzo', 'Indirizzo', ['class' => 'label']) }}
                {{ Form::text('indirizzo', '', ['class' => 'input', 'id' => 'indirizzo', 'style' =>'width: 250px;']) }}
                @if ($errors->first('indirizzo'))
                <ul class="errors">
                    @foreach ($errors->get('indirizzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            </div>
              
             
            <div class="split2">
            <h3> Servizi </h3>
            <div>
                <input type="checkbox" id="bagno" onclick="check() ">

                {{ Form::checkbox('bagno', 'presente', ['id' => 'bagno'], ['onclick' => 'check() ']) }} Bagno <i class="fa-solid fa-toilet" ></i>
            <br>
            <br>
                {{ Form::checkbox('cucina', 'presente') }}  Cucina <i class="fa-solid fa-kitchen-set"></i>
            <br>
            <br>
                {{ Form::checkbox('salastudio', 'presente') }}  Sala studio <i class="fa-solid fa-book"></i>
            <br>
            <br>
                {{ Form::checkbox('lavanderia', 'presente') }}  Lavanderia <i class="fa-solid fa-faucet"></i> 
            <br>
            <br>
                {{ Form::checkbox('giardino', 'presente') }} Giardino   <i class="fa-solid fa-tree" style="margin-left:10px"></i>   
            <br>
            <br>
                {{ Form::checkbox('parcheggio', 'presente') }}  Parcheggio <i class="fa-solid fa-square-parking"></i>
            <br>
            <br>
                {{ Form::checkbox('garage', 'presente') }}  Garage <i class="fa-solid fa-car-side"></i>
            <br>
            <br>
                {{ Form::checkbox('localcericreativo', 'presente') }}  Locale ricreativo  <i class="fa-solid fa-chess"></i>   
            <br>
            <br>
                {{ Form::checkbox('forno', 'presente') }}  Forno  <i class="fa-solid fa-toilet-portable"></i>    
            <br>
            <br>
                {{ Form::checkbox('frigo', 'presente') }}  Frigo   <i class="fa-solid fa-snowflake"></i> 
            <br>
            <br>
                {{ Form::checkbox('lavastoviglie', 'presente') }}  Lavastoviglie <i class="fa-solid fa-soap"></i>   
            <br>
            <br>
                {{ Form::checkbox('aria', 'presente') }}  Aria condizionata  <i class="fa-solid fa-fan"></i>  
            </div>
            <div>
                {{ Form::text('quantitabagni', '', ['id' => 'quantitabagni', 'class' => 'quantita', 'style' => 'display:block; width: 80px;', 'placeholder' => 'qunatità']) }}
            
                {{ Form::text('quantitacucina', '', ['id' => 'quantitacucina', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
            
                {{ Form::text('quantitasalastudio', '', ['id' => 'quantitasalastudio', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
            
                {{ Form::text('quantitalavanderia', '', ['id' => 'quantitalavanderia', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
           
                {{ Form::text('quantitagiardino', '', ['id' => 'quantitagiardino', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
            
                {{ Form::text('quantitaparcheggio', '', ['id' => 'quantitaparcheggio', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
           
                {{ Form::text('quantitagarage', '', ['id' => 'quantitagarage', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
            
                {{ Form::text('quantitalocale', '', ['id' => 'quantitalocale', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
           
                {{ Form::text('quantitaforno', '', ['id' => 'quantitaforno', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
            
                {{ Form::text('quantitafrigo', '', ['id' => 'quantitafrigo', 'class' => 'quantita', 'style' => 'display:block; width: 80px;margin-top: 17px;', 'placeholder' => 'qunatità']) }}
           
                {{ Form::text('quantitalavastoviglie', '', ['id' => 'quantitalavastoviglie', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}

                {{ Form::text('quantitaaria', '', ['id' => 'quantitaaria', 'class' => 'quantita', 'style' => 'display:block; width: 80px; margin-top: 17px;', 'placeholder' => 'qunatità']) }}
            

            </div>
            </div>
             
        </div>
             
             
            <div>                
                {{ Form::submit('Aggiungi Prodotto', ['class' => 'button input']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;">
        <span class="step"></span>
        <span class="step"></span>
      </div>
    </div>
    

</div>

<script type="text/javascript">
// Script to open and close sidebar


</script>

@endsection



