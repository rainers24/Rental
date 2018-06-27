@section('sidebar')

		<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<style>
		/* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
		#map {
			height: 500px;

		}
		/* Optional: Makes the sample page fill the window. */
		html, body {
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
<div id="map"></div>

	<script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 56.950674, lng: 24.116029},
                zoom: 17
            });
        }
	</script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA&callback=initMap"async defer></script>

</body>
</html>


	@show