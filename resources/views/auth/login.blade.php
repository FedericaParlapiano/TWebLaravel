@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
    
    <h3 class="text-center">Login</h3>
    <p class="login-paragraph"> Accedi al tuo account </p>

            {{ Form::open(array('route' => 'login', 'class' => 'form login')) }}
            {{ Form::token() }}
          
             <div title= "username" class="form-field">
                {!! Form::label('username', '<i class="fa-solid fa-user"></i>', [], false) !!}
                {{ Form::text('username', '', ['class' => 'form-input','id' => 'login__username', 'placeholder' => 'username' ]) }} 
            </div>
            
            
            <div title = "password" class="form-field">
                {!! Form::label('password', '<i class="fa-solid fa-lock"></i>', [], false) !!}
                {{ Form::password('password',['class' => 'form-input','id' => 'login__password', 'placeholder' => 'password' ]) }}     
            </div>
            
            @if ($errors->first('username'))
                <div class="errors" style=" color: #EB2F42; margin-left: auto; margin-right: auto; ">
                    @foreach ($errors->get('username') as $message)
                    <div>{{ $message }}</div>
                    @endforeach
                </div>
                @endif
                
            @if ($errors->first('password'))
                <div class="errors" style=" color: #EB2F42; margin-left: auto; margin-right: auto; ">
                    @foreach ($errors->get('password') as $message)
                    <div>{{ $message }}</div>
                    @endforeach
                </div>
            @endif
            
            <div class="form-field">
                {{ Form::submit('Login') }}
            </div>
                        
            <p class="text-center" style="color: black;"> Non sei ancora registrato? <a  href="{{ route('register') }}"> Registrati ora.</a></p>
            
            {{ Form::close() }}


@endsection
