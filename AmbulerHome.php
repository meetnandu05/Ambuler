
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">
  <link rel="stylesheet" href="homestyle.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
  <script src="homeScript.js"></script>
  <title>Home</title>
</head>
<body>
  <button type="button" id="button1" onclick="mySideBar()" class="glyphicon glyphicon-align-justify"></button>

  <div class="homeicon" style="width:300px;">
    <a href="tel:+919930218030" class="hometext" style="color:white;" >Click to Call</a>
  </div>
  
  <div class="navpage" id="nav1" style="display:none;">
    <div class="navpage-left">
      <ul class="navlist">
        <li><a href="#home">HOME</a></li>
        <li><a href="Login/AmbulerLogin.php">REGISTER/SIGNUP</a></li>
        </ul>
    </div>
    <div class="navpage-right">
      <div class="image-content-div">
        <div class="navpage-right-content">
          <h2>Ambuler.in</h2>
          <p>Mumbai</p>
          <p>+91 xxxxxxxxxx</p>
        </div>
        <ul class="image-content-list">
          <li><a href="https://facebook.com"><img src="images/facebook1.png" alt="facebook"></a></li>
          <li><a href="https://instagram.com"><img src="images/instagram1.png" alt="facebook"></a></li>
          <li><a href="https://twitter.com"><img src="images/twitter1.png" alt="facebook"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="parallax1" id="home">
    <img class="imgctr" src="ambuler7.jpg" align="middle" alt="notavail">
  </div>

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
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWISUJ2aDEWppnZIphb6JjKwpk7jJT-BA&callback=initMap">
    </script>
  
</body>
</html>
