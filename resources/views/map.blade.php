@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
    <title>Mapa de Popayán, Cauca</title>
    <style>
        #container {
            height: 100vh;
        }
        #map {
            height:500px; /* El mapa ocupará toda la altura del contenedor */
            width: 100%; /* El mapa ocupará toda la anchura del contenedor */

        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmwCZnnWpYvLQRMOcO-vs6aP2koNBALqQ&callback=initMap" defer></script>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 2.4455, lng: -76.6147 },
                zoom: 14,
            });
            new google.maps.Marker({
                position: { lat: 2.4455, lng: -76.6147 },
                map,
                title: "Mi ubicación",
            });
        }
    </script>
</body>
</html>
