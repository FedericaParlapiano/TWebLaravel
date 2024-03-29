
function displayFAQ(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("show-FAQ") == -1) {
      x.className += " show-FAQ";
    }
    else { 
      x.className = x.className.replace(" show-FAQ", "");
    }
}


// Prendo il riferimento al modal
var modal = document.getElementById("modal-filter");

function openForm() {
    modal.style.display = "block";
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }

    };
}

function closeForm() {
    modal.style.display = "none";
}
            
            
function checkRole(){
    var locatore = document.getElementById("locatore");
    var locatario = document.getElementById("locatario");
    var universita = document.getElementById("divuniversita");
    var facolta = document.getElementById("divfacolta");
    var anno = document.getElementById("divimmatricolazione");

    if (locatario.checked) {
         universita.style.display = "flex";
         facolta.style.display = "flex";
         anno.style.display = "flex";
    }

    if (locatore.checked){
      universita.style.display = "none";
      facolta.style.display = "none";
      anno.style.display = "none";

    }
  }
  
// check tipologia function to display field into the form
    function check_tipologia()
    {
        var tipologia = document.getElementById("tipologia");
        var selectedValue = tipologia.options[tipologia.selectedIndex].value;
        var appartamento = document.getElementById("appartamento");
        var postoletto = document.getElementById("postoletto");

          if (selectedValue == "Appartamento")
          {
               appartamento.style.display = "flex";
               postoletto.style.display = "none";

          }
          if (selectedValue == "PostoLettoSingolo" || selectedValue == "PostoLettoDoppia")
          {
               postoletto.style.display = "flex";
               appartamento.style.display = "none";
          }
          
       }

 
        // increment function
        function increment(id) {
        document.getElementById(id).value = String(Number(document.getElementById(id).value)+1);
        }
        // decrement function
        function decrement(id) {
            if(Number(document.getElementById(id).value)>0){
                document.getElementById(id).value = String(Number(document.getElementById(id).value)-1);

            }
            
    }
    
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}


//Script per generare i grafici delle statistiche: vedere vista "accountadmin.blade.php".

//Script per il carosel, per il pop-up per inviare un messsaggio o una proposta dalla vista annuncio: vedere vista "annuncio.blade.php".


  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ 0, 1000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "€" + $( "#slider-range" ).slider( "values", 0 ) +
      " - €" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  
  
  $(document).ready(function() {
        
    $('#show-hidden-menu').click(function() {
        var element = $(this);
        
        $('#show-hidden-menu-appartamento').removeClass('card-modificata-filtri');
        $('#show-hidden-menu-posto-letto').removeClass('card-modificata-filtri');
        element.addClass('card-modificata-filtri');
        
        $('.hidden-menu-posto-letto').hide();
        $('.hidden-menu-appartamento').hide();
        $('.hidden-menu').slideToggle("slow");
        $('#tutti').prop('checked', true);

        
    });
    
    $('#show-hidden-menu-appartamento').click(function() {
        
        var element = $(this);
        
        $('#show-hidden-menu').removeClass('card-modificata-filtri');
        $('#show-hidden-menu-posto-letto').removeClass('card-modificata-filtri');
        element.addClass('card-modificata-filtri');
        
        $('.hidden-menu').hide();
        $('.hidden-menu-posto-letto').hide();
        $('.hidden-menu-appartamento').slideToggle("slow");
        $('#Appartamento').prop('checked', true);
        
    });
    
    $('#show-hidden-menu-posto-letto').click(function() {
         
         var element = $(this);
        
        $('#show-hidden-menu').removeClass('card-modificata-filtri');
        $('#show-hidden-menu-appartamento').removeClass('card-modificata-filtri');
        element.addClass('card-modificata-filtri');
        
        $('.hidden-menu').hide();
        $('.hidden-menu-appartamento').hide();
        $('.hidden-menu-posto-letto').slideToggle("slow");
        $('#PostoLetto').prop('checked', true);

    });

    });
    
    $(function() {
      $(document).on("click", "#pagination-filtri a,#button-cerca", function() {

        //get url and make final url for ajax 
        var url = $(this).attr("href");
        var append = url.indexOf("?") === -1 ? "?" : "&";
        var finalURL = url + append + $("#filtri-form").serialize();

        //set to current url
        window.history.pushState({}, null, finalURL);

        $.post(finalURL, function(data) {

          $("#pagination_data").html(data);
          $("html, body, pagination_data").animate({ scrollTop: 0 }, 200);

        });

        return false;
      });

    });
    
    //Il codice javaScript con cui viene gestito l'iframe si trova nella vista "messaggistica.blade.php"
    
    
        