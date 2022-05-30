<html>
<head>




<script src="https://kit.fontawesome.com/ea82011960.js" crossorigin="anonymous"></script>
    <style>
        .msg_history {
            width: 600px;
            height: 415px;
            overflow-y: auto;
          }
          
        .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: 60%;
           } 
           
        .received_withd_msg p {
                background: #ebebeb none repeat scroll 0 0;
                border-radius: 3px;
                color: #646464;
                font-size: 14px;
                margin: 0;
                padding: 5px 10px 5px 12px;
                width: 100%;
          }
          
        .received_withd_msg { 
              width: 50%;
          }
          
        .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
          }
          
        .sent_msg {
          float: right;
          width: 60%;
        }
        
        .sent_msg p {
         background: #05728f none repeat scroll 0 0;
         border-radius: 3px;
         font-size: 14px;
         margin: 0; 
         color:#fff;
         padding: 5px 10px 5px 12px;
         width:50%;
       }
        
       .outgoing_msg{ 
            overflow:hidden; 
            margin:27px 0 0 0;
        }
        
        
        .input_msg_write input {
          background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
          border: medium none;
          color: #4c4c4c;
          font-size: 15px;
          min-height: 48px;
          width: 300px;
          
        }
        
        .type_msg {
            border-top: 1px solid #c4c4c4;
            position: relative;
            width: 600px;
        }
        
        #send{
            display: inline-block;
        }
        
        #send:hover{
            opacity: 0.6;
        }
        
        .split2chat {
            display: flex;
        }
        
        .split2chat input[type="text"] {
            width: 300px;
        }
        
    </style> 
    
    <script type="text/javascript">
            function activate_chat(id) {
                var x = document.getElementById(id);
                x.className += " active_chat";
              for(i = 1; i < 3; i++){
                  
                  var other_id = "chat"+i;
                  if(id != other_id){
                  var y = document.getElementById(other_id);
                  y.className = y.className.replace(" active_chat", "");
                }
              }
                
            }
    </script> 

</head>

<body>
@isset($messaggi)

<div class="msg_history">
            
            @foreach($messaggi as $messaggio)  
                
                @if($messaggio->destinatario==$authuser)
                <div class="received_msg">
                 <div class="received_withd_msg">
                  <p>{!! $messaggio->testo !!}</p>
                  <span class="time_date">{{ $messaggio->dataOraInvio }}</span></div>
                </div>
                @else
                <div class="outgoing_msg">
                  <div class="sent_msg">
                    <p>{!! $messaggio->testo !!}</p>
                    <span class="time_date">{{ $messaggio->dataOraInvio }}</span> </div>
                </div>
                
                @endif
                
            @endforeach
</div>
    
    <div class="type_msg">
            <div class="input_msg_write split2chat">
                <div>
                {{ Form::open(array('route' => 'messaggisticapost', 'id' => 'messaggio-form', 'class' => 'form-container', 'method' => 'POST')) }}            
                {{ Form::token() }} 

                {{ Form::text('testo', '', ['id' => 'testo', 'placeholder' => 'Scrivi il tuo messaggio']) }}
                @if($errors->first('testo'))
                    <div class="errors" >
                        @foreach ($errors->get('testo') as $message)
                        <p>{{ $message }}</p>
                        @endforeach
                    </div>
                @endif
                </div>
                <div>
                {{ Form::submit('Invia', ['id'=>'send', 'class'=> 'ourblue']) }}
                </div>
                {{ Form::hidden('destinatario', $user, ['id' => 'destinatario']) }}
                
            </div>
              {{ Form::close() }}
    </div>
@endisset
</body>
</html>