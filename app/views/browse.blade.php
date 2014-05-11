@extends('layouts.browse-layout')

@section('content')
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #ffffff;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        var map;

        function initialize() {
          directionsDisplay = new google.maps.DirectionsRenderer();
          var ph = new google.maps.LatLng(8.9456259,125.5319234);
          var mapOptions = {
            zoom:7,
            center: ph
          }
          directionsDisplay.setMap(map);

          map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          var ctaLayer = new google.maps.KmlLayer({
            url: 'map.kml'
          });
          ctaLayer.setMap(map);
        }

        function calcRoute() {
          var start = "University of Makati, Philippines";
          var end = "Smart Tower, Ayala, Makati City";
          var request = {
              origin:start,
              destination:end,
              provideRouteAlternatives: true,
              travelMode: google.maps.TravelMode.DRIVING
          };
          directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(response);
            }
          });
        }
        calcRoute();
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="panel">
    </div>
    <div id="map-canvas"></div>
    @include('commons.requestmodal')
@stop