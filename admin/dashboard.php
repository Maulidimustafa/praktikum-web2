<?php
// session_start();
?>
<div class="card">
<div class="card-header">
    <strong>INFORMASI</strong>
</div>
<div class="card-body">
    <p>Selamat Datang <strong><i><?php echo$_SESSION['username']?></i></strong>,</p>
<html>
	<head>
		<title> WebGIS GeoJSON </title>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>

	<style type="text/css">
	#map { height: 500px; }</style>
	</head>

	<body>
	<div id="map"></div>

	<center><h1><marquee behavior="alternate"> WebGIS Damkar Banjarmasin </marquee></h1></center>
	</body>

	<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
	<script src="../assets/js/leaflet.ajax.js"> </script>

	<script type="text/javascript">

	var map = L.map('map').setView([-3.318775, 114.594497], 10);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 15,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	// L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}?access_token={accessToken}', {
	// maxZoom: 15,
	// id: 'mapbox.streets',
	// accessToken: 'pk.eyJ1IjoiZmF1eml5dXNhcmFobWFuIiwiYSI6ImNsZmpiOXBqYTJnbzUzcnBnNnJzMjB0ZHMifQ.AldZlBJVQaCALzRw-vhWiQ'
	// }).addTo(map);

	function popUp(f,l){
		var out = [];
		if (f.properties){
			for(key in f.properties){
				out.push(key+": "+f.properties[key]);
			}
		l.bindPopup(out.join("<br />"));
		}
	}

	var jsonTest = new L.GeoJSON.AJAX(["../assets/geojson/63.71KotaBanjarmasin.geojson"],{onEachFeature:popUp}).addTo(map);

	var coordinates = [
			[-3.317518, 114.592860],
			[-3.324529, 114.587255],
			[-3.329640, 114.584372],
			[-3.329028, 114.587768],
			[-3.324722, 114.598311]
		];

		for (var i = 0; i < coordinates.length; i++) {
			L.marker(coordinates[i]).addTo(map);
		}

	</script>
</html>
</div>
</div>