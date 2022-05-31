@extends('layouts.admin')

@section('title', 'Inserimento di una FAQ')

@section('content')   


<div class="contain">
  <div class="wrapper">
      <h3>Aggiungi una nuova FAQ</h3>
        <p>Utilizza questa form per inserire una nuova FAQ che sarà resa immediatamente visibile sul sito.</p>

            {{ Form::open(array('route' => 'nuovafaq', 'id' => 'inseriscifaq', 'files' => false, 'class' => 'form')) }}
            {{ FOrm::token }}
            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('domanda', 'Domanda', ['class' => 'label']) }}
                {{ Form::textarea('domanda', '', ['class' => 'input', 'id' => 'domanda', 'rows' => 2]) }}
                @if ($errors->first('domanda'))
                <div class="errors">
                    @foreach ($errors->get('domanda') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>
            
            <div>
                {{ Form::label('risposta', 'Risposta', ['class' => 'label']) }}
                {{ Form::textarea('risposta', '', ['class' => 'input', 'id' => 'risposta', 'rows' => 5]) }}
                @if ($errors->first('risposta'))
                <div class="errors">
                    @foreach ($errors->get('risposta') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>
                          
            <div>                
                {{ Form::submit('Aggiungi FAQ', ['class' => 'button input']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>
@endsection



