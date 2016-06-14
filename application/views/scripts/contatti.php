<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWkGllTMlUJIIOa54QPYFozJs8CT5LcrM&language=it&sensor=false"></script>
<script type="text/javascript">
google.maps.event.addDomListener(window, 'load', init);

function init() {
	var myLatlng = new google.maps.LatLng(38.1667252,14.8962394); 

	// altre opzioni -> https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	var mapOptions = {
		zoom: 14,               
		center: myLatlng,
		styles: [{'featureType':'water','stylers':[{'visibility':'on'},{'color':'#428BCA'}]},{'featureType':'landscape','stylers':[{'color':'#f2e5d4'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#c5c6c6'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#e4d7c6'}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#fbfaf7'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#c5dac6'}]},{'featureType':'administrative','stylers':[{'visibility':'on'},{'lightness':33}]},{'featureType':'road'},{'featureType':'poi.park','elementType':'labels','stylers':[{'visibility':'on'},{'lightness':20}]},{},{'featureType':'road','stylers':[{'lightness':20}]}]
	};

	var mapElement = document.getElementById('map');
	var map = new google.maps.Map(mapElement, mapOptions);
	
	var contentString="<strong>Saver prodotti</strong><br>Viale Regione Siciliana 32";
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Saver prodotti'
	});
	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});
}

// form contatti

function testExp (campo,expr) {
	return expr.test(campo);
}

$(document).ready(function() {
    $('#submit_btn').click(function(){ 
        //get input field values
        var user_name       = $('#nome').val(); 
        var user_email      = $('#email').val();
        var user_subject    = $('#oggetto').val();
        var user_message    = $('#messaggio').val();
        
        var notice     = $("#notice");
        var $req_fields    = "Tutti i campi sono obbligatori.";

        //simple validation at client's end
        var proceed = true;
        var regexp = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
        
        if ( notice.is(":visible") ) notice.hide();

        if ( "" == user_name || "" == user_email || "" == user_subject || "" == user_message || false == testExp(user_email,regexp) ){

               notice.removeClass().html($req_fields).addClass("alert alert-warning").fadeIn(400);
               proceed = false;

         }
        
        if(user_name==""){ 
            $('#nome').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('#email').css('border-color','red'); 
            proceed = false;
        }
        // controllo email valida
		
		if (!testExp(user_email,regexp)) {
			$("#email").val("");
			$('#email').css('border-color','red');
			notice.append(" Formato email non valido."); 
			proceed = false;
		}
        
        if(user_subject=="") {    
            $('#oggetto').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('#messaggio').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if (proceed) {
			notice.removeClass().html("Invio in corso...").addClass("alert alert-info").fadeIn(400);
            // data to be sent to server
            post_data = $("#contact_form").serialize();
            
            //Ajax post data to server
            $.post('<?php echo site_url('contatti/sendmail'); ?>', post_data, function(response){                  
                //load json data from server and output message     
                if(response) {
					output="Mail inviata. Grazie per averci contattato.";                    
                    //reset values in all input fields
                    $('#contact_form input').val(''); 
                    $('#contact_form textarea').val(''); 
					notice.removeClass().html(output).addClass("alert alert-success").fadeIn(400);
                }else{                
					output="Errore durante l'invio della comunicazione. E' pregato di riprovare.";
                    //reset values in all input fields
                    $('#contact_form input').val(''); 
                    $('#contact_form textarea').val(''); 
					notice.removeClass().html(output).addClass("alert alert-danger").fadeIn(400);
                }               
            });            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
    });
    
});
</script>

