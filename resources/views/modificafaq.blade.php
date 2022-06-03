@extends('layouts.admin')

@section('title', 'Modifica FAQ')

@section('content')

<div class="contain">
  <div class="wrapper">
      <h3>Modifica la FAQ</h3>
        <p>Utilizza questa form per modificare una FAQ. Attenzione! Le modifiche non sono reversibili.</p>


            {{ Form::open(array('route' => ['modificafaq', 'faqId'=>$faqId], 'class' => 'form')) }}
            {{ Form::token () }}
            
            <div  class="wrap-input  rs1-wrap-input">
                {{ Form::label('domanda', 'Domanda', ['class' => 'label']) }}
                {{ Form::textarea('domanda', $faqs->domanda, ['class' => 'input', 'id' => 'domanda', 'rows' => 2]) }}
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
                {{ Form::textarea('risposta', $faqs->risposta, ['class' => 'input', 'id' => 'risposta',  'rows' => 5]) }}
                @if ($errors->first('risposta'))
                <div class="errors">
                    @foreach ($errors->get('risposta') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                </div>
                @endif
            </div>
            
            <div>                
                {{ Form::submit('Modifica FAQ', ['class' => 'button input']) }}
            </div>
            
            {{ Form::close() }}
  </div>
</div>
@endsection
