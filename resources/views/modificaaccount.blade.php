@extends('layouts.public')

@section('title', 'Modifica Account')

@section('content')

@isset($user)
<h3 class="text-center">Modifica il tuo account</h3>
    <p class="login-paragraph">Attenzione! Le modifiche non sono reversibili.</p>


            {{ Form::open(array('route' => 'modificaaccount', 'class' => 'form login')) }}
            
            @csrf
            <div  class="form-field">
                {{ Form::label('nome', 'Nome', ['class' => 'register-label']) }}
                {{ Form::text('nome', $user->nome, ['class' => 'form-input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="form-field">
                {{ Form::label('cognome', 'Cognome', ['class' => 'register-label']) }}
                {{ Form::text('cognome', $user->cognome, ['class' => 'form-input', 'id' => 'cognome']) }}
                @if ($errors->first('cognome'))
                <ul class="errors">
                    @foreach ($errors->get('cognome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="form-field">
                {{ Form::label('email', 'Email', ['class' => 'register-label']) }}
                {{ Form::text('email', $user->email, ['class' => 'form-input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="form-field">
                {{ Form::label('numTelefono', 'Telefono', ['class' => 'register-label']) }}
                {{ Form::text('numTelefono', $user->numTelefono, ['class' => 'form-input','id' => 'numTelefono']) }}
                @if ($errors->first('numTelefono'))
                <ul class="errors">
                    @foreach ($errors->get('numTelefono') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div class="form-field">
                {{ Form::label('sesso', 'Sesso', ['class' => 'register-label']) }}
                {{ Form::select('sesso', ['F' => 'Donna', 'M' => 'Uomo'], isset($user->sesso) ? $user->sesso : null,  ['class' => 'form-input', 'id' => 'sesso']) }}
            </div>
            
            <div class="form-field">
            {{ Form::label('dataNascita', 'Data di nascita', ['class' => 'register-label']) }}
            {{ Form::date('dataNascita', isset($user->dataNascita) ? $user->dataNascita : null, ['class' => 'form-input', 'id' => 'dataNascita'])}}
            @if ($errors->first('dataNascita'))
                <ul class="errors">
                    @foreach ($errors->get('dataNascita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="form-field">
                {{ Form::label('citta', 'Citta', ['class' => 'register-label']) }}
                {{ Form::text('citta', isset($user->citta) ? $user->citta : null, ['class' => 'form-input','id' => 'citta']) }}
                @if ($errors->first('citta'))
                <ul class="errors">
                    @foreach ($errors->get('citta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            
            <div  class="form-field">
                {{ Form::label('fotoProfilo', 'Immagine', ['class' => 'register-label']) }}
                {{ Form::file('fotoProfilo', ['class' => 'form-input', 'id' => 'fotoProfilo']) }}
                @if ($errors->first('fotoProfilo'))
                <ul class="errors">
                    @foreach ($errors->get('fotoProfilo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            @can('isLocatario')
            <div  id="divuniversita" class="form-field" style="display: flex;">
                {{ Form::label('universita', 'Universita', ['class' => 'register-label']) }}
                {{ Form::text('universita', isset($user->universita) ? $user->universita : null, ['class' => 'form-input','id' => 'universita']) }}
                @if ($errors->first('universita'))
                <ul class="errors">
                    @foreach ($errors->get('universita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  id="divfacolta" class="form-field" style="display: flex;">
                {{ Form::label('facolta', 'Facolta', ['class' => 'register-label']) }}
                {{ Form::text('facolta', isset($user->facolta) ? $user->facolta : null, ['class' => 'form-input','id' => 'facolta']) }}
                @if ($errors->first('facolta'))
                <ul class="errors">
                    @foreach ($errors->get('facolta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  id="divimmatricolazione" class="form-field" style="display: flex;">
                {{ Form::label('annoImmatricolazione', 'Iscrizione', ['class' => 'register-label']) }}
                {{ Form::text('annoImmatricolazione', isset($user->annoImmatricolazione) ? $user->annoImmatricolazione : null, ['class' => 'form-input','id' => 'annoImmatricolazione']) }}
                @if ($errors->first('annoImmatricolazione'))
                <ul class="errors">
                    @foreach ($errors->get('annoImmatricolazione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            @endcan
            
             <div  class="form-field">
                {{ Form::label('username', 'Username', ['class' => 'register-label']) }}
                {{ Form::text('username', isset($user->username) ? $user->username : null, ['class' => 'form-input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="form-field">
                {{ Form::label('password', 'Password', ['class' => 'register-label']) }}
                {{ Form::password('password',['class' => 'form-input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="form-field">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'register-label']) }}
                {{ Form::password('password_confirmation', ['class' => 'form-input', 'id' => 'password-confirm']) }}
            </div>
            
            <div class="form-field">                
                {{ Form::submit('Aggiorna') }}
            </div>
            
            {{ Form::close() }}
@endisset
@endsection
