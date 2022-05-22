@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div class="static">
    <h3>Registrazione</h3>
    <p>Utilizza questa form per registrarti al sito</p>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

            <div  class="wrap-input">
                {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome']) }}
                @if ($errors->first('cognome'))
                <ul class="errors">
                    @foreach ($errors->get('cognome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('sesso', 'Sesso', ['class' => 'label-input']) }}
                {{ Form::select('sesso', ['F' => 'F', 'M' => 'M'],  ['class' => 'input','id' => 'sesso']) }}
            </div>
            
            <div>
            {{ Form::label('dataNascita', 'Data di nascita', ['class' => 'label, tab', 'style' =>'margin-top: 0;']) }}
            {{ Form::date('dataNascita', '', ['class' => 'input', 'style' =>'width: 200px;', 'id' => 'dataNascita'])}}
            @if ($errors->first('dataNascita'))
                <ul class="errors">
                    @foreach ($errors->get('dataNascita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('citta', 'citta', ['class' => 'label-input']) }}
                {{ Form::text('citta', '', ['class' => 'input','id' => 'citta']) }}
                @if ($errors->first('citta'))
                <ul class="errors">
                    @foreach ($errors->get('citta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('numTelefono', 'numTelefono', ['class' => 'label-input']) }}
                {{ Form::text('numTelefono', '', ['class' => 'input','id' => 'numTelefono']) }}
                @if ($errors->first('numTelefono'))
                <ul class="errors">
                    @foreach ($errors->get('numTelefono') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('fotoProfilo', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('fotoProfilo', ['class' => 'input', 'id' => 'fotoProfilo']) }}
                @if ($errors->first('fotoProfilo'))
                <ul class="errors">
                    @foreach ($errors->get('fotoProfilo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            
            <div > Ruolo </div>

                {{ Form::label('role', 'Locatore', ['class' => 'label-input']) }}
                {{ Form::radio('role', 'locatore', false, ['class' => 'input', 'id' => 'locatore']) }}
                <br>
                {{ Form::label('role', 'Locatario', ['class' => 'label-input']) }}
                {{ Form::radio('role', 'locatario', false, ['class' => 'input', 'id' => 'locatario']) }}
                @if ($errors->first('role'))
                <ul class="errors">
                    @foreach ($errors->get('role') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
               
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('universita', 'universita', ['class' => 'label-input']) }}
                {{ Form::text('universita', '', ['class' => 'input','id' => 'universita']) }}
                @if ($errors->first('universita'))
                <ul class="errors">
                    @foreach ($errors->get('universita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('facolta', 'facolta', ['class' => 'label-input']) }}
                {{ Form::text('facolta', '', ['class' => 'input','id' => 'facolta']) }}
                @if ($errors->first('facolta'))
                <ul class="errors">
                    @foreach ($errors->get('facolta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('annoImmatricolazione', 'annoImmatricolazione', ['class' => 'label-input']) }}
                {{ Form::text('annoImmatricolazione', '', ['class' => 'input','id' => 'annoImmatricolazione']) }}
                @if ($errors->first('annoImmatricolazione'))
                <ul class="errors">
                    @foreach ($errors->get('annoImmatricolazione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
            
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection
