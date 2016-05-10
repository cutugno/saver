<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWkGllTMlUJIIOa54QPYFozJs8CT5LcrM&language=it&sensor=false"></script>
<script type="text/javascript">
google.maps.event.addDomListener(window, 'load', init);

function init() {
	var myLatlng = new google.maps.LatLng(38.1662186,14.8969281); 

	// altre opzioni -> https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	var mapOptions = {
		zoom: 14,               
		center: myLatlng,
		styles: [{'featureType':'water','stylers':[{'visibility':'on'},{'color':'#428BCA'}]},{'featureType':'landscape','stylers':[{'color':'#f2e5d4'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#c5c6c6'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#e4d7c6'}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#fbfaf7'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#c5dac6'}]},{'featureType':'administrative','stylers':[{'visibility':'on'},{'lightness':33}]},{'featureType':'road'},{'featureType':'poi.park','elementType':'labels','stylers':[{'visibility':'on'},{'lightness':20}]},{},{'featureType':'road','stylers':[{'lightness':20}]}]
	};

	var mapElement = document.getElementById('map');
	var map = new google.maps.Map(mapElement, mapOptions);
	
	var contentString="<strong>Saver Imbarcazioni</strong><br>Viale Regione Siciliana 32";
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Saver Imbarcazioni'
	});
	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});
}

// form contatti
$(document).ready(function() {
    $('#submit_btn').click(function(){ 
        //get input field values
        var user_name       = $('#name').val(); 
        var user_email      = $('#email').val();
        var user_subject    = $('#subject').val();
        var user_message    = $('#message').val();
        
        var notice     = $("#notice");
        var $req_fields    = "Please fill in all the fields.";

        //simple validation at client's end
        var proceed = true;
        
        if ( notice.is(":visible") ) notice.hide();

        if ( "" == user_name || "" == user_email || "" == user_subject || "" == user_message ){

               notice.removeClass().html($req_fields).addClass("alert alert-warning alert-dismissable").fadeIn(400);
               proceed = false;

          }
        
        if(user_name==""){ 
            $('#name').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('#email').css('border-color','red'); 
            proceed = false;
        }
        if(user_subject=="") {    
            $('#subject').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('#message').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userSubject':user_subject, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('contact.php', post_data, function(response){  
                
                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = response.text;
		notice.removeClass().html(output).addClass("alert alert-warning alert-dismissable").fadeIn(400);
                }else{
                
                    output = response.text;
                    
                    //reset values in all input fields
                    $('#contact_form input').val(''); 
                    $('#contact_form textarea').val(''); 
		notice.removeClass().html(output).addClass("alert alert-success alert-dismissable").fadeIn(400);
                }
                
            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
    });
    
});
</script>

