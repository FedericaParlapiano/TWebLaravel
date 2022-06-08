@extends('layouts.useraccount', ['user'=>$user])


@section('link')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalogostyle.css') }}">
@endsection

@section('scripts')
@parent
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('title', 'Area riservata')


@section('content')
@isset($user)

<!-- !PAGE CONTENT! -->
    
    <a href="#"><img src="images/users/admin.jpg" alt="immagine di profilo" style="width:65px;" class="circle right margine hide-large hover-opacity"></a>
    <span class="button hide-large xxlarge hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    
    <div class="container">
    
   <div class="row-info">
   <div id="info" class="container about-class" >
        <h2>{{$user->nome}} {{$user->cognome}}</h2>
        <div>
        <p>{{$user->role}}</p>

        @isset($user->dataNascita)
        <p><i class="fa-solid fa-cake-candles margine-right"></i>{{$user->dataNascita}}</p>
        @else
        <p><i class="fa-solid fa-cake-candles margine-right"></i>Non è stata indicata la data di nascita</p>
        @endisset
        @isset($user->sesso)
        <p><i class="fa-solid fa-venus-mars margine-right"></i>{{$user->sesso}}</p>
        @endisset


        <p><i class="fa-solid fa-address-card margine-right"></i>{{$user->username}}</p>

        </div>
    </div>
    
    <!-- Contact Section -->
    <div class="container contact-class">
    <h4 id="contact"><b>Contattami</b></h4>
    <div class="row-padding center padding-16">
      <div class="third mediumturquoise">
        <p><i class="fa fa-envelope text-light-grey"></i></p>
        <p>{{$user->email}}</p>
      </div>
      <div class="third teal">
        <p><i class="fa fa-map-marker text-light-grey"></i></p>
        @isset($user->citta)
        <p>{{$user->citta}}</p>
        @else
        <p>Non è stata inserita la città</p>
        @endisset
      </div>
      <div class="third cadetblue">
        <p><i class="fa fa-phone text-light-grey"></i></p>
        @isset($user->numTelefono)
        <p>{{$user->numTelefono}}</p>
        @else
        <p>Non è stato inserito il numero di telefono</p>
        @endisset
      </div>
    </div>
    </div>
      
   </div> 

  </div>
    
@isset($stats)    
<div id="statistiche">
        <div class="xlarge" style="margin-left: 30px;"><b>Statistiche</b>
        <hr> </div>
        
        <div class="contenitore-form" > 
            {{ Form::open(array('route' => 'admin', 'id' => 'search', 'files' => false, 'class' => '')) }}
            <div class = "row">    
                
                <div style="margin-left:2em; margin-bottom: 1em">  
                    {{ Form::label('from', 'Da', ['class' => 'label']) }}
                        {{ Form::date('from', '', ['class' => 'input', 'id' => 'from']) }}
                        @if ($errors->first('from'))
                        <div class="errors">
                            @foreach ($errors->get('from') as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                        </div>
                        @endif 
                </div>  

                <div style="margin-left:3em; margin-bottom: 1em">
                    {{ Form::label('to', 'A', ['class' => 'label']) }}
                    {{ Form::date('to', '', ['class' => 'input', 'id' => 'to']) }}
                        @if ($errors->first('to'))
                        <div class="errors">
                            @foreach ($errors->get('to') as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                        </div>
                        @endif  
                </div> 
                
                <div style="margin-left: 3em; margin-bottom: 1em">
                {{ Form::label('tipologia', 'Tipologia', ['class' => 'label']) }}
                {{ Form::select('tipologia', [ 'nessuno'=>'','Appartamento' => 'Appartamento', 'PostoLettoSingolo' => 'Posto letto (camera singola)',  'PostoLettoDoppia' => 'Posto letto (camera doppia)'], '',['class' => 'input', 'id' => 'tipologia'], ['onchange' => 'check_tipologia() ']) }}
            </div>

                <div style="margin-left:6em; margin-top:2.5em;">                
                {{ Form::submit('Calcola', ['class' => 'button ourblue']) }}
                </div>
            </div>  
        </div>
    
    <div style='text-align: center; margin: 10px auto 10px auto;'>
    
        
        <p>I criteri di ricerca indicati hanno dato dato luogo a questi risultati:
        
        <ul style="list-style-position: inside;">
        <li>numero annunci: {{$stats["annunci"]}},</li>

        <li>numero richieste: {{$stats["richieste"]}},</li>

        <li>numero affitti: {{$stats["affitti"]}}.</li>
        
        </ul>
        </p>
            

        <div class="grafico-statistiche">
        <canvas id="graphStats"></canvas>
        </div>
        
        
        
    </div>
        
        
</div>
@endisset
    
    <br>
    <br>
    
    <div id="FAQ">
            <div class="xlarge"><b>FAQ</b> 
                <a href="{{ route('nuovafaq') }}" title="Inserisci una FAQ" class="button"><i class="fa-solid fa-circle-plus xlarge"></i></a>
            </div>

            <hr>
            @isset($faqs)
            <div class="FAQ">
                @foreach($faqs as $faq)
                <div style="display: flex;">
                <h2>{{ $faq->domanda }} </h2> 
                <div style="float:left; margin-left:20px; margin-top:15px; ">
                    <a href="{{ route('modificafaq', ['faqId'=> $faq->id]) }}" title="Modifica la FAQ" class="button ourblue" style="height: 40px;"><i class="fa-regular fa-pen-to-square"></i></a>
                </div>
                <div style="float:left; margin-left:20px; margin-top:15px; ">
                    <a onclick="return confirm('Sei sicuro di voler eliminare questa FAQ?')"> 
                        <form method="POST" action="{{ route('eliminafaq', ['faqId'=> $faq->id]) }}">
                        @csrf
                        
                        <button type='submit' name='elimina' class='button ourblue' style="height: 40px;" ><i class="fa-solid fa-trash-can"></i> </button>
                        </form> 
                    </a>
                </div> 
                </div>
                
                <p>{{ $faq->risposta }}</p>                
            @endforeach 
            </div>               
    @endisset
    </div>

@endisset


<script> 
    $(document).ready(function() {
      var annunci = '<?php echo $stats["annunci"]; ?>';
      var richieste = '<?php echo $stats["richieste"]; ?>';
      var affitti = '<?php echo $stats["affitti"]; ?>';
      
      var barColors = ["#AAECEB", "#61E8E6", "#4DB8B6"];
      
      var chartdata = {
        labels: ['annunci', 'richieste', 'affitti'],
        datasets: [{
          backgroundColor: barColors,
          borderColor: '#46d5f1',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          data: [annunci, richieste, affitti]
        }]
      };

      var graphTarget = $("#graphStats");

      var barGraph = new Chart(graphTarget, {
        type: 'bar',
        data: chartdata,
        options: {
          plugins: {
         legend: {
            display: false
          }
        },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
        });
    });
    
</script>


@endsection