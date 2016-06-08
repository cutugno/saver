<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWkGllTMlUJIIOa54QPYFozJs8CT5LcrM&language=it&sensor=false"></script>
<script type="text/javascript">
google.maps.event.addDomListener(window, 'load', init);

function vediInfo(elem,msg) {
	$(elem).html(msg);
}

var map;

function init() {
	var myLatlng = new google.maps.LatLng(41.9041088,12.3962582); 

	// altre opzioni -> https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	var mapOptions = {
		zoom: 5,               
		center: myLatlng,
		styles: [{'featureType':'water','stylers':[{'visibility':'on'},{'color':'#428BCA'}]},{'featureType':'landscape','stylers':[{'color':'#f2e5d4'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#c5c6c6'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#e4d7c6'}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#fbfaf7'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#c5dac6'}]},{'featureType':'administrative','stylers':[{'visibility':'on'},{'lightness':33}]},{'featureType':'road'},{'featureType':'poi.park','elementType':'labels','stylers':[{'visibility':'on'},{'lightness':20}]},{},{'featureType':'road','stylers':[{'lightness':20}]}]
	};

	var mapElement = document.getElementById('map');
	map = new google.maps.Map(mapElement, mapOptions);
	
	// loop per ogni marker 
	<?php foreach ($affiliati as $key=>$val) : ?>
	var pos=new google.maps.LatLng(<?php echo $val->coord; ?>);
	var marker=new google.maps.Marker({
		map: map,
		position: pos,
		title: '<?php echo $val->nome; ?>', 
		name: '<?php echo $val->id; ?>'
	});
	marker.addListener('click', function() {
		map.setZoom(14);
		map.setCenter(this.getPosition());
		var info="<strong><?php echo $val->nome; ?></strong><br><?php echo $val->indirizzo; ?><br><?php echo $val->email; ?><br><?php echo $val->tel; ?><br><?php echo $val->tipologia; ?>";
		vediInfo("#descr",info); 
	});
	<?php endforeach ?>
	// fine loop	
}

</script>
