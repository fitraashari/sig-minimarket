    <?php
    error_reporting(0);
            include "panel/koneksi.php";
        $id = $_GET['id'];
            $minta="SELECT * FROM market where id_market = '$id'";
            $eksekusi=mysql_query($minta);
            $hasil=mysql_fetch_array($eksekusi);

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>SIG PEMETAAN MINIMARKET</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-nosidebar-left">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          
          <div class="be-right-navbar">
         <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class=""><a href="panel/" ><img src="assets/img/slack.png" alt="Dashboard"><span class="user-name">DASHBOARD</span></a>
                
              </li>
            </ul>
          </div><a href="#" data-toggle="collapse" data-target="#be-navbar-collapse" class="be-toggle-top-header-menu collapsed">MENU</a>
          <div id="be-navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">HOME</a></li>
              
              <li><a href="geo.php">GEOTAGGING</a></li>
              <li><a href="about.php">ABOUT</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Detail Minimarket</h2>
          </div>
        <div class="main-content container-fluid">
          <div class="row">
            
              <div class="col-xs-6 col-sm-5" >
              <div class="panel panel-default" style="box-shadow: 3px 7px 5px #888888;">
                <div class="panel-heading"><span class="title">Peta Lokasi</span></div>
                <div class="panel-body">
                  <div id="map" style="height:400px;width:100%; border:2px black solid;"></div><div class="form-group"></div>
                </div>
                </div>
              </div>

                          <div class="col-xs-6 col-sm-7" >
              <div class="panel panel-default" style="box-shadow: 3px 7px 5px #888888;" >
              <pre class="prettyprint" style="background-image: url('panel/gambar/<?php echo $hasil['gambar']; ?>');background-size: 100% 200px;width: 100%; height: 200px;">
                </pre>
                <div class="panel-heading"><span class="title"><?php echo "$hasil[nm_market]"; ?></span></div>
                <div class="panel-body">
                  <table class="table" style="width:500px;">
                  <tr>
                  <td>Nama Minimarket</td>
                  <td>:</td>
                  <td><?php echo "$hasil[nm_market]"; ?></td>
                  </tr>
                                   <tr>
                  <td>ATM yang Tersedia</td>
                  <td>:</td>
                  <td><?php echo "$hasil[atm]"; ?></td>
                  </tr>
                  <tr>
                  <td>Fasilitas Wifi</td>
                  <td>:</td>
                  <td><?php echo "$hasil[wifi]"; ?></td>
                  </tr>
                  <tr>
                  <td>Fasilitas lain</td>
                  <td>:</td>
                  <td><?php echo "$hasil[fasilitas_lain]"; ?></td>
                  </tr>
                  <tr>
                  <td>Buka 24 Jam</td>
                  <td>:</td>
                  <td><?php echo $hasil['24_jam']; ?></td>
                  </tr>
                  <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?php echo "$hasil[alamat]"; ?>, <?php echo "$hasil[kelurahan]"; ?>, <?php echo "$hasil[kecamatan]"; ?>, <?php echo "$hasil[kab_kota]"; ?></td>
                  </tr>
                  </table>
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
     <script>
     var styles = {
        default: null,
        hide: [
          {
            featureType: 'poi.business',
            stylers: [{visibility: 'off'}]
          },
          {
            featureType: 'transit',
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          }
        ]
      };
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo "$hasil[latitude]"; ?>, lng: <?php echo "$hasil[longitude]"; ?>},
          zoom: 17
        });
        map.setOptions({styles: styles['hide']});
      var marker1 = new google.maps.Marker({
  position : new google.maps.LatLng(<?php echo "$hasil[latitude]"; ?>,<?php echo "$hasil[longitude]"; ?>),
  title : 'lokasi',
  map : map,
  });

  }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDua6wdMgcICXPTa9fSUqGcIJCoRl_hlJU&callback=initMap"
    async defer></script>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/prettify/prettify.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	
      	//Runs prettify
      	prettyPrint();
      });
    </script>
<div class="panel-footer"><center>Sistem Informasi Geografis Pemetaan Minimarket<br>
    Created by Fitra Ashari - 2017<br>All Rights Reserved</center></div>
  </body>
</html>