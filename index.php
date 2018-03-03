<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hackcity</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
  </head>

<body>
<div class="navbar-fixed">
      <nav class="nav-extended">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center"><i class="material-icons">cloud</i>Hackcity</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
            <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
            <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
          </ul>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#1"><i class="material-icons left">location_on</i>Agregar</a></li>
            <li class="tab"><a href="#2"><i class="material-icons left">library_music</i>Mapas</a></li>
            <li class="tab"><a href="#3"><i class="material-icons left">assignment</i>Graficas</a></li>
            <li class="tab"><a href="#4"><i class="material-icons left">assignment</i>Datos</a></li>
          </ul>
        </div>
      </nav>
 </div>
 <br />
 <br />


    <div id="1" class="col s12">
      <style>
        #map {
          height: 100%;
        }
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
      </style>

    <div id="map"></div>

    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 19.372383, lng: -99.143655}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667},
        {lat: 19.372383, lng: -99.143667}
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    </div>


      <div id="2" class="col s12">DOS</div></div>
      <div id="3" class="col s12">TRES</div></div>
      <div id="4" class="col s12">CUATRO</div></div>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJrPNLyl0idJnHtlCXNXv17kbF_fSrySY&callback=initMap"
    async defer></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    <script>
    $(document).ready(function(){
    $('ul.tabs').tabs({
      swipeable : true,
      responsiveThreshold : 1920
    });
  });
    </script>


<style>
.carousel .carousel-item{
width:100%;
}
</style>
</body>
</html>
