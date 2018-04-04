<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Hackcity</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

  </head>

  <body>
    <div class="navbar-fixed">
          <nav class="nav-extended">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo center"><i class="material-icons">directions_run</i>Hackcity</a>
              <ul class="right hide-on-med-and-down">
                <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
                <li><a class="waves-effect waves-light btn">Iniciar Sesion</a></li>
              </ul>
            </div>
            <div class="nav-content">
              <ul class="tabs tabs-transparent">
                <li class="tab"><a href="#map"><i class="material-icons left">map</i>Mapas</a></li>
                <li class="tab"><a href="#2"><i class="material-icons left">local_hospital</i>Hospitales</a></li>
                <li class="tab"><a href="#3"><i class="material-icons left">hotel</i>Centros de Acopio</a></li>
                <li class="tab"><a href="#4"><i class="material-icons left">loupe</i>Agregar</a></li>
                <li class="tab"><a href="#5"><i class="material-icons left">timeline</i>Graficas</a></li>
                <li class="tab"><a href="#6"><i class="material-icons left">mail</i>Contacto</a></li>
              </ul>
            </div>
          </nav>
     </div>
     <br />
     <br />


     <div id="map"></div>
     <div id="2" class="col s12">2</div>
     <div id="3" class="col s12">3</div>

<div id="4" class="col s12">
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s2"><a href="#test1">Centro de Acopio</a></li>
        <li class="tab col s2"><a href="#test2">Hospital</a></li>
        <li class="tab col s2"><a href="#test3">Mapa</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">accessibility</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Nombre del centro de acopio</label>
            </div>
            <div class="input-field col s4">
              <i class="material-icons prefix">add_location</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Hubicación</label>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
  </div>



  <div id="5" class="col s12">5</div>






  <div id="6" class="col s12">
    <div class="row">
      <br />
      <h2>Contacto</h2>
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Nombre</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Hospital o Centro de Acopio</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Correo electronico</label>
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
      <i class="material-icons right">send</i>
    </button>
          </div>
        </div>
      </form>
    </div>
  </div>







     <footer class="page-footer">
       <div class="container">
         <div class="row">
           <div class="col l6 s12">
             <h5 class="white-text">Invitamos a la gente a que haga suya la plataforma</h5>
             <p class="grey-text text-lighten-4">La elaboración de reportes y el trabajo de los verificadores voluntarios es fundamental para su funcionamiento.</p>
           </div>
           <div class="col l4 offset-l2 s12">
             <h5 class="white-text">Telefonos</h5>
             <ul>
               <li><a class="grey-text text-lighten-3" href="#!">Cruz Roja 065 o +52(55)5557-5757</a></li>
               <li><a class="grey-text text-lighten-3" href="#!">Servicio Nacional de Emergencias 911</a></li>
             </ul>
           </div>
         </div>
       </div>
       <div class="footer-copyright">
         <div class="container">
         © 2018 Hackcity
         <a class="grey-text text-lighten-4 right" href="#!">API-DEVELOPERS</a>
         </div>
       </div>
     </footer>



<div class="fixed-action-btn">
   <a class="btn-floating btn-large green">
     <i class="large material-icons">phone</i>
   </a>
          <ul>
            <li><a href="tel:5583266381" class="btn-floating amber tooltipped" data-position="left" data-delay="10" data-tooltip="Centros de Acopio: 5583266381"><i class="material-icons">airline_seat_flat</i></a></li>
            <li><a href="tel:3323132359" class="btn-floating blue tooltipped" data-position="left" data-delay="10" data-tooltip="Seguridad Pública: 3323132359"><i class="material-icons">verified_user</i></a></li>
            <li><a href="tel:5555555555" class="btn-floating red tooltipped" data-position="left" data-delay="10" data-tooltip="Cruz Roja: 55234545"><i class="material-icons">local_hospital</i></a></li>
          </ul>
        </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>





    <script>

          function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 6,
              center: {lat: 19.372383, lng: -99.143667}
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
            {lat: 19.372383, lng: -100.143667},
            {lat: 20.372383, lng: -99.143667},
            {lat: 19.372383, lng: -101.143667},
            {lat: 21.372383, lng: -98.143667},
            {lat: 19.372383, lng: -99.143667},
            {lat: 19.372383, lng: -100.143667},
            {lat: 20.372383, lng: -99.143667},
            {lat: 19.372383, lng: -101.143667},
            {lat: 21.372383, lng: -98.143667},
            {lat: 19.372383, lng: -99.143667},
            {lat: 19.372383, lng: -100.143667},
            {lat: 20.372383, lng: -99.143667},
            {lat: 19.372383, lng: -101.143667},
            {lat: 21.372383, lng: -98.143667},
            {lat: 19.372383, lng: -99.143667},
            {lat: 19.372383, lng: -100.143667},
            {lat: 20.372383, lng: -99.143667},
            {lat: 19.372383, lng: -101.143667},
            {lat: 21.372383, lng: -98.143667},
            {lat: 19.372383, lng: -99.143667}
          ]
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJrPNLyl0idJnHtlCXNXv17kbF_fSrySY&callback=initMap">
</script>
  </body>
</html>
