@extends('layouts.public')

<link rel="stylesheet" type="text/css" href="{{ asset('css/accountstyle.css') }}">

@section('title', 'Messaggi')

@section('content')

<script>
    
    $(function() {
      $(document).on("click", "#button-cerca", function() {
        
        //get url and make final url for ajax 
        var url = $(this).attr("href");
        var append = url.indexOf("?") === -1 ? "?" : "&";
        var finalURL = url + append + $("#messaggio-form").serialize();

        //set to current url
        window.history.pushState({}, null, finalURL);

        $.post(finalURL, function(data) {

          $("#messages-data").html(data);
          $("html, body, messages-data").animate({ scrollTop: 0 }, 200);

        });

        return false;
      });

    });
    
</script>

 <script src="https://kit.fontawesome.com/ea82011960.js" crossorigin="anonymous"></script>
    <style>
        .container{
            width:1200px; 
            margin:auto;
        }
        
        .text-center{
            text-align:center;
        }
        
        .messaging { 
           border: 1px solid #cdcdcd;
           
        }
        
        img { 
            vertical-align:middle;
            border-style:none;
            max-width:100%;
        }
        
        .inbox_people {
            background:scroll;
            float: left;
            overflow: hidden;
            width: 36%; 
            border-right:1px solid #c4c4c4;
          }
          
        .inbox_msg {
          clear: both;
          overflow: hidden;
        }
        
        .headind_srch{ 
            padding:10px 30px 10px 20px; 
            overflow:hidden; 
            border-bottom:1px solid #c4c4c4;
        }
        
        
        .srch_bar {
            display: inline-block;
            text-align: right;
            width: 90%;
          }

        .srch_bar input{ 
            border-width:0 0 1px 0; 
            width:80%; 
            padding:2px 0 4px 6px; 
            background:none;
           margin-right: 5px;
        }
        
        
        #search:hover{
            opacity: 0.6;
        }
        
        .inbox_chat {
            height: 580px; 
            overflow-y: scroll;
            border: 1px solid #c4c4c4;

        }
        
        .chat_people{ 
            overflow:hidden; 
            clear:both;
        }
        
        .chat_list {
          border-bottom: 1px solid #c4c4c4;
          margin: 0;
          padding: 18px 16px 10px;
        }
        
        .active_chat{ 
            background:#ebebeb;
        }
        
        .chat_ib h5{ 
            font-size:15px; 
            color:#464646; 
            margin:0 0 8px 0;
        }
        
        .chat_ib h5 span{ 
            font-size:13px; 
            float:right;
        }
        .chat_ib p{ 
            font-size:14px; 
            color:#989898; 
            margin:auto;
        }
        .chat_img {
          float: left;
          width: 11%;
        }
        .chat_ib {
          float: left;
          padding: 0 0 0 15px;
          width: 80%;
        }
        
        .mesgs {
          float: left;
          padding: 30px 15px 0 25px;
          width: 60%;
        }
        
        .msg_history {
            width: 1000px;
            height: 500px;
            overflow-y: auto;
          }
          
        .incoming_msg_img {
            display: inline-block;
            width: 5%;
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
         margin: 0; color:#fff;
         padding: 5px 10px 5px 12px;
         width:50%;
       }
       
        .outgoing_msg{ 
            overflow:hidden; 
            margin:26px 0 26px;
        }
        
        
        .input_msg_write input {
          background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
          border: medium none;
          color: #4c4c4c;
          font-size: 15px;
          min-height: 48px;
          width: 85%;
          margin-right: 5px;
        }

        .type_msg {
            border-top: 1px solid #c4c4c4;
            position: relative;
            width: 800px;
        }
        
        #send{
            display: inline-block;
        }
        
        #send:hover{
            opacity: 0.6;
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
<div class="container">
<h1 class=" text-center">Le tue conversazioni</h1>
<div class="messaging">
    <div id="CHAT"> </div>
      <div class="inbox_msg">
        <div class="inbox_people">
          
          <div class="inbox_chat">
            
            @isset($chat) 
            @foreach($chat as $singolachat)
            @if($singolachat->user1 == $authuser)
            <div  id="chat1" onclick="{{ route('chat', [$singolachat->user2]) }}" class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><a href="{{ route('chat', [$singolachat->user2]) }}" target="chatframe"> {{$singolachat->user2}} </a></h5>
                </div>
              </div>
            </div>
          
            @else
            <div  id="chat1" onclick="{{ route('chat', [$singolachat->user1]) }}" class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><a href="{{ route('chat', [$singolachat->user1]) }}" target="chatframe"> {{$singolachat->user1}} </a></h5>
                </div>
              </div>
            </div>
            @endif
            @endforeach
            @endisset
          </div>
        </div>
        <div class="mesgs">
            
              <iframe id="chatframe" src="" name="chatframe" style="width:100%; height: 500px;">
                  
              </iframe>
        </div>
</div>
</div>    
</div>   

    <script>
    
    var ifrm = document.getElementById('chatframe');
    ifrm = ifrm.contentWindow || ifrm.contentDocument.document || ifrm.contentDocument;
    ifrm.document.open();
    ifrm.document.write('Seleziona una chat');
    ifrm.document.close();
    </script>
    


@endsection


