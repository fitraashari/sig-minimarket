<?php
session_start();
error_reporting(0);
include "cek.php";
include "koneksi.php";
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
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src=
                                <?php
if ($_SESSION['lvl'] == "admin"){echo"assets/img/avatar.png";}else{
  echo"assets/img/avatar1.png";}?> alt="Avatar"><span class="user-name"><?php echo $_SESSION['nm_user']; ?></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><?php echo $_SESSION['username']; ?></div>
                      
                    </div>
                  </li>
                  <li><a href='index.php?page=detailuser&id=<?php echo $_SESSION['id_user']; ?>'><span class="icon mdi mdi-face"></span> Account</a></li>
                                    <li><a href="logout.php"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Dashboard</span></div>
            
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">MENU</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li <?php if (! isset($_GET['page'])){echo "class='active'";} ?> ><a href="index.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <?php
if ($_SESSION['lvl'] == "admin"){
echo "<li"; 
if ($_GET['page'] == 'user'){echo " class='active'";} 
echo"><a href='?page=user'><i class='icon mdi mdi-face'></i><span>User</span></a>
                  </li>";
}
                  ?>
                  
                 
                  <li <?php if ($_GET['page'] == 'market'){echo "class='active'";} ?>><a href="?page=market"><i class="icon mdi mdi-pin"></i><span>Minimarket</span></a>
                    
                  </li>
                  <li ><a href="../"><i class="icon mdi mdi-layers"></i><span>Primary Page</span></a>
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
            <div class="be-content">
                <div class="main-content container-fluid">
                <?php
                if (! isset($_GET['page']))
    {
      ?>
                          <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark1" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Minimarket</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="<?php

                            $result = mysql_query("SELECT count(*) from market;");
echo mysql_result($result, 0);
                            ?>" class="number">0
                            
                            </span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark2" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Berfasilitas WiFi</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="<?php

                            $result = mysql_query("SELECT count(*) from market where wifi='ada';");
echo mysql_result($result, 0);
                            ?>" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark3" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Berfasilitas ATM</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="<?php

                            $result = mysql_query("SELECT count(*) from market where atm !='-';");
echo mysql_result($result, 0);
                            ?>" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark4" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Buka 24 Jam</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="<?php

                            $result = mysql_query("SELECT count(*) from market where 24_jam = 'ya';");
echo mysql_result($result, 0);
                            ?>" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
          </div>
          <?php
        }
          ?>
          <div class="row">
            <div class="col-md-12" >
              <div class="panel panel-default" style="box-shadow: 3px 7px 5px #888888;" >
              <div class="panel-heading" align="center"><span class="title"><b><?php
                if (! isset($_GET['page']))
    {
        echo "Titik persebaran Minimarket";
    } else {    
        $page = $_GET['page'];  
        switch($page)
        {
            case 'user':
                echo "Data User";
                break;
                        case 'inputuser':
                echo "Form User";
                break;  
                    case 'edituser':
                echo "Form Edit User";
                break;     
        case 'market':
                echo "Data Minimarket";
                break;
                                        case 'inputmarket':
                echo "Form Minimarket";
                break;  
                    case 'editmarket':
                echo "Form Edit Minimarket";
                break;   case 'detail':
                echo "Detail Minimarket";
                break;  
                case 'detailuser':
                echo "Detail Account";
                break; 
        }
    }
                ?></b></span></div>
                <div class="panel-body">
                <?php
                if (! isset($_GET['page']))
    {
        include('marker.php');
    } else {    
        $page = $_GET['page'];  
        switch($page)
        {
            case 'user':
                include('v_user.php');
                break;  
            case 'inputuser':
                include('i_user.php');
                break;  
                        case 'edituser':
                include('e_user.php');
                break;  
        case 'market':
                include('v_market.php');
                break;
                    case 'inputmarket':
                include('i_market.php');
                break;  
                        case 'editmarket':
                include('e_market.php');
                break;
                                        case 'detail':
                include('detail.php');
                break;
                case 'detailuser':
                include('dt_user.php');
                break;
        }
    }
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
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>
</html>