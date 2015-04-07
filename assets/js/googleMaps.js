/**
 * Inicializa Google Maps API
 */
function initialize(){

	// Inicializa instância do mapa e seleção de div
	var map = new google.maps.Map(document.getElementById("map"), {zoom: 16, disableDefaultUI: true});

	// Inicializa localizador geográfico
	var geocoder = new google.maps.Geocoder();

	// Ícone personalizado
	var iconMarker = new google.maps.MarkerImage(google_maps_data.icon, null, null, new google.maps.Point(25, 50), new google.maps.Size(50, 50));	
	
	// Inicializa marcador temporário de posição
	var marker = new google.maps.Marker({
		map: map,
		draggable: false,
		icon: iconMarker,
		position: null
	});
	// Geolocalizador de endereços
	geocoder.geocode({ 'address': google_maps_data.address + ', Brasil', 'region': 'BR' }, function (results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if (results[0]) {
				var latitude = results[0].geometry.location.lat();
				var longitude = results[0].geometry.location.lng();

				var position = new google.maps.LatLng(latitude, longitude);
				marker.setPosition(position);
				map.setCenter(position);
			}
		}
	});
}

google.maps.event.addDomListener(window, 'load', initialize);