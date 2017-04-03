<?php
	ob_start();
?>
<div class="container">
	<div id="getintouch" class="row">
		<div id="col1" class="col-md-5">
			<div class="roww text-scouted contact">
				<div>
					<p style="font-family: CoolveticaRg-Regular;font-size:8.12em;line-height:90%">
						Get in <br/>
						touch.
					</p><br/>
					<div class="emails_contact">
						<a href="mailto:info@coastmodels.co.uk" target="_blank" class="texto">info@coastmodels.co.uk</a></br></br>
						<b class="text-contact">Coast Models</b></br>
						<b class="text-contact">Pinecliff Rd</b></br>
						<b class="text-contact">Branksome Chine</b></br>
						<b class="text-contact">Poole</b></br>
						<b class="text-contact">BH13 6LP</b></br>
					</div>
				</div>
			</div>
		</div>
		<div id="col2" class="col-md-7">
			<div class="row">
				<img src="images/contact/Male Strip.jpg" width="100%" height="auto">
			</div>
			<form style="padding-top:10%">
				<div class="row">
					<input type="text" placeholder="Nome" style="width: 100%" size='85'><br>
				</div>
				<div class="row">
					<input type="email" placeholder="Email" style="width: 100%" size='85'><br>
				</div>
				<div class="row">
					<textarea placeholder="Message" style="width: 100%;resize: none;" cols="82" rows="5"></textarea>
				</div>
				<div class="row">
					<button class="btn-send">Send</button>
				</div>
			</form>
		</div>
	</div>
	<div id="heythere" class="row" style="z-index: 4;position: relative;">
		<div class="text-center">
			<img src="images/contact/Hey There.png" style="text-align:center" width="70%" height="auto">
		</div>
	</div>
</div>
<div id="map" class="map" style="height:400px;">
	<div id="map"></div>
	<script>
		var myLatLng = {lat: 41.049790, lng: 28.991658};
		var map;
		var custom = [
				{
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f5f5f5"
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#616161"
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"color": "#f5f5f5"
						}
					]
				},
				{
					"featureType": "administrative.land_parcel",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#bdbdbd"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#eeeeee"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#757575"
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#e5e5e5"
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#9e9e9e"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ffffff"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#757575"
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dadada"
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#616161"
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#9e9e9e"
						}
					]
				},
				{
					"featureType": "transit.line",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#e5e5e5"
						}
					]
				},
				{
					"featureType": "transit.station",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#eeeeee"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#c9c9c9"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#9e9e9e"
						}
					]
				}
			] ;

		function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
					center: myLatLng,
					zoom: 14,
					styles: custom,
					scrollwheel: false
				});
				var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					title: 'Brave Model MGMT'
				});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyWHDTd86NQvN3gkR6RVPLG0T1zvIl7Fg&callback=initMap" async defer></script>
</div>
<?php
	$content  .= ob_get_clean();
?>
