<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWkGllTMlUJIIOa54QPYFozJs8CT5LcrM&language=it&sensor=false"></script>
<script type="text/javascript">
google.maps.event.addDomListener(window, 'load', init);

function vediInfo(elem,msg) {
	$(elem).html(msg);
}

var map;

function init() {
	var myLatlng = new google.maps.LatLng(38.1184572,14.010389); 

	// altre opzioni -> https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	var mapOptions = {
		zoom: 3,               
		center: myLatlng,
		styles: [{'featureType':'water','stylers':[{'visibility':'on'},{'color':'#428BCA'}]},{'featureType':'landscape','stylers':[{'color':'#f2e5d4'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#c5c6c6'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#e4d7c6'}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#fbfaf7'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#c5dac6'}]},{'featureType':'administrative','stylers':[{'visibility':'on'},{'lightness':33}]},{'featureType':'road'},{'featureType':'poi.park','elementType':'labels','stylers':[{'visibility':'on'},{'lightness':20}]},{},{'featureType':'road','stylers':[{'lightness':20}]}]
	};

	var mapElement = document.getElementById('map-rete');
	map = new google.maps.Map(mapElement, mapOptions);
	
	// loop per ogni marker 
	var pos=new google.maps.LatLng(44.111319,12.038973); //affiliato.coord
	var marker=new google.maps.Marker({
		map: map,
		position: pos,
		title: 'Click to zoom', //affiliato.nome
		name: 'marker1' //affiliato.id
	});
	marker.addListener('click', function() {
		map.setZoom(12);
		map.setCenter(this.getPosition());
		var info="<strong>Nome 1</strong>Indirizzo 1<br>etc etc"; //affiliato.nome, affiliato.indirizzo, affiliato.email, affiliato.tel, affiliato.tipologia
		vediInfo("#descr",info); 
	});
	// fine loop	
}

</script>
