@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')

<h3 class="text-center">Registrazione</h3>
    <p class="login-paragraph"> Inserisci i tuoi dati per registrarti al nostro sito</p>


            {{ Form::open(array('route' => 'register', 'files' => 'true', 'class' => 'form login')) }}
            {{ Form::token() }}
            
            <div  class="form-field">
                {{ Form::label('nome', 'Nome', ['class' => 'register-label']) }}
                {{ Form::text('nome', '', ['class' => 'form-input', 'id' => 'nome','autofocus']) }}                
            </div>
            @if ($errors->first('nome'))
                <div class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif

            <div  class="form-field">
                {{ Form::label('cognome', 'Cognome', ['class' => 'register-label']) }}
                {{ Form::text('cognome', '', ['class' => 'form-input', 'id' => 'cognome']) }}
                </div>
                @if ($errors->first('cognome'))
                <div class="errors">
                    @foreach ($errors->get('cognome') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
            
             <div  class="form-field">
                {{ Form::label('email', 'Email', ['class' => 'register-label']) }}
                {{ Form::text('email', '', ['class' => 'form-input','id' => 'email']) }}
             </div>
                @if ($errors->first('email'))
                <div class="errors">
                    @foreach ($errors->get('email') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
            <div  class="form-field">
                {{ Form::label('numTelefono', 'Telefono', ['class' => 'register-label']) }}
                {{ Form::text('numTelefono', '', ['class' => 'form-input','id' => 'numTelefono']) }}
                </div>
                @if ($errors->first('numTelefono'))
                <div class="errors">
                    @foreach ($errors->get('numTelefono') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
            <div class="form-field">
                {{ Form::label('sesso', 'Sesso', ['class' => 'register-label']) }}
                {{ Form::select('sesso', ['F' => 'Donna', 'M' => 'Uomo'], 'Donna', ['class' => 'form-input', 'id' => 'sesso']) }}
            </div>
            
            <div class="form-field">
            {{ Form::label('dataNascita', 'Data di nascita', ['class' => 'register-label']) }}
            {{ Form::date('dataNascita', '', ['class' => 'form-input', 'id' => 'dataNascita'])}}
            </div>
            @if ($errors->first('dataNascita'))
                <div class="errors">
                    @foreach ($errors->get('dataNascita') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
            <div  class="form-field">
                {{ Form::label('citta', 'Citta', ['class' => 'register-label']) }}
                {{ Form::text('citta', '', ['class' => 'form-input','id' => 'citta']) }}
                </div>
                @if ($errors->first('citta'))
                <div class="errors">
                    @foreach ($errors->get('citta') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
            
            <div  class="form-field">
                {{ Form::label('fotoProfilo', 'Immagine', ['class' => 'register-label']) }}
                {{ Form::file('fotoProfilo', ['class' => 'form-input', 'id' => 'fotoProfilo']) }}
                </div>
                @if ($errors->first('fotoProfilo'))
                <div class="errors">
                    @foreach ($errors->get('fotoProfilo') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
           
            
            <div  class="form-field">
                {{ Form::label('role', 'Ruolo', ['class' => 'register-label']) }}
                <div style="margin-top: 18px; margin-left: 10px;">
                {{ Form::radio('role', 'locatore', false, ['id' => 'locatore', 'onclick' => 'checkRole()']) }} <span style="color: black;"> Locatore </span> 
                </div>
                <div style="margin-top: 18px; margin-left: 18px;">
                {{ Form::radio('role', 'locatario', false, ['id' => 'locatario', 'onclick' => 'checkRole()']) }} <span style="color: black;"> Locatario </span>  
                </div>
            </div>
                @if ($errors->first('role'))
                <div class="errors">
                    @foreach ($errors->get('role') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
               
            
            <div  id="divuniversita" class="form-field" style="display: none; width: 380px;">
                {{ Form::label('universita', 'Universita', ['class' => 'register-label']) }}
                {{ Form::text('universita', '', ['class' => 'form-input','id' => 'universita']) }}
            </div>
                @if ($errors->first('universita'))
                <div class="errors">
                    @foreach ($errors->get('universita') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
            <div  id="divfacolta" class="form-field" style="display: none; width: 380px;">
                {{ Form::label('facolta', 'Facolta', ['class' => 'register-label']) }}
                {{ Form::text('facolta', '', ['class' => 'form-input','id' => 'facolta']) }}
                </div>
                @if ($errors->first('facolta'))
                <div class="errors">
                    @foreach ($errors->get('facolta') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
            <div  id="divimmatricolazione" class="form-field" style="display: none; width: 380px;">
                {{ Form::label('annoImmatricolazione', 'Iscrizione', ['class' => 'register-label']) }}
                {{ Form::text('annoImmatricolazione', '', ['class' => 'form-input','id' => 'annoImmatricolazione']) }}
                </div>
                @if ($errors->first('annoImmatricolazione'))
                <div class="errors">
                    @foreach ($errors->get('annoImmatricolazione') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
             <div  class="form-field">
                {{ Form::label('username', 'Username', ['class' => 'register-label']) }}
                {{ Form::text('username', '', ['class' => 'form-input','id' => 'username']) }}
                </div>
                @if ($errors->first('username'))
                <div class="errors">
                    @foreach ($errors->get('username') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            
             <div  class="form-field">
                {{ Form::label('password', 'Password', ['class' => 'register-label']) }}
                {{ Form::password('password', ['class' => 'form-input', 'id' => 'password']) }}
                </div>
                @if ($errors->first('password'))
                <div class="errors">
                    @foreach ($errors->get('password') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif

            <div  class="form-field">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'register-label']) }}
                {{ Form::password('password_confirmation', ['class' => 'form-input', 'id' => 'password-confirm']) }}
            </div>
            
            <div class="form-field">                
                {{ Form::submit('Registra') }}
            </div>
            
            {{ Form::close() }}

@endsection