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
          <h2 class="page-head-title">GEOTAGGING</h2>
          </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1" >
              <div class="panel panel-default" style="box-shadow: 3px 7px 5px #888888;">
              <div class="panel-heading"><span class="title"><b>Titik Persebaran Minimarket</b></span></div>
                <div class="panel-body">
                <?php
                include"marker.php";
                ?>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    </script><div class="panel-footer"><center>Sistem Informasi Geografis Pemetaan Minimarket<br>
    Created by Fitra Ashari - 2017<br>All Rights Reserved</center></div>
  </body>
</html>