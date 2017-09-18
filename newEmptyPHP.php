
<html>
  <head>
    <style>
      #map {
        altura : 400 px ;
        ancho : 100 % ;
       }
    </style>
  </head>
  <body>
    <h3> Mi demo de Google Maps </h3>
    <div  id = " map " > </div>
    <script>
      function  initMap () {
        var mig = {lat :  - 25.363 , lng :  131.044 };
        var map =  new  google.maps.Map ( documento . getElementById ( ' mapa ' ), {
          zoom :  4 ,
          centro : mig
        });
        var marker =  new  google.maps.Marker ({
          posición : mig,
          mapa : mapa
        });
      }
    </script>
    <script  async  defer
    src = " https://maps.googleapis.com/maps/api/js?key=AIzaSyB8d_fMSx9457OIIoGG8MIiCZWqZGNDXUQ & callback = initMap " >
    </script>
  </body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

