
<div id="peta" style="width: auto; height:480px;"></div>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYxDEyFIV1ggBf6f7s_gEv8EcrS85I05M"></script>
<script type="text/javascript">
function tampilmarker() { 
  
  
  
  var locations = [
    <?php
            // konfigurasi koneksi database
          include ('panel/koneksi.php');

              $sql_lokasi="SELECT * from market ";
              $result=mysql_query($sql_lokasi);
              while($data=mysql_fetch_object($result)){
                                $arr_atm = explode(",",$data->atm); 
                $bca = "";
                $bri = "";
                $bni = "";
                if (in_array("BCA", $arr_atm))
                {
                  $bca = "<img src='img/bca.png' width='60px' height='34px'>";
                }
                if (in_array("BRI", $arr_atm))
                {
                  $bri = "<img src='img/bri.png' width='60px' height='30px'>";
                }
                if (in_array("BNI", $arr_atm))
                {
                  $bni = "<img src='img/bni.png' width='60px' height='20px'>";
                }
                 ?>
                    ["<div role='tabpanel' style='width:400px;height:290px;overflow:hidden;'>"+ 
                            "<ul class='nav nav-tabs' role='tablist'>"+
                                "<li role='presentation' class='active'><a href='#info' aria-controls='info' role='tab' data-toggle='tab'>Info Mini Market</a></li>"+
                            "</ul>"+
                        "<div class='tab-content'>"+
                            "<div role='tabpanel' class='tab-pane active' id='info'>"+
                "<table border='0'>"+
                "<tr>"+
                "<td rowspan='4' width='210' valign='top'>"+
                "<i><img src='panel/gambar/<?=$data->gambar; ?>' width='200px' height='150' style='box-shadow: 3px 3px 5px #888888;'></i>"+
                "</td>"+
                "</tr>"+
                "<tr>"+
                "<td width='70px' valign='top'>"+
                                "<i>Minimarket</i></td><td valign='top'><i>: <?=$data->nm_market; ?></i>"+
                "</td>"+
                "</tr>"+
                                
                                "<tr>"+
                "<td  valign='top'>"+
                "<i>WiFi</i></td><td valign='top'><i>: <?=$data->wifi; ?></i>"+
                "</td>"+
                "</tr>"+
                
                                "<tr>"+
                "<td valign='top' colspan='3'>"+
                      "<center><hr><i><?=$data->alamat; ?>, <?=$data->kelurahan; ?>, <?=$data->kecamatan; ?>, <?=$data->kab_kota; ?></i></center>"+
                "</td>"+
                "</tr>"+
                "<tr>"+
                "<td valign='top' colspan='3' align='right'><hr> <?=$bca; ?><?=$bri; ?><?=$bni; ?>"+
                "</td>"+
                "</tr>"+
                "</table>"+
                
                            "</div>"+
                        "</div>"+                   
                    "</div>",<?=$data->latitude; ?>,<?=$data->longitude; ?>],
       <?php
        }
    ?>
    
    
    ];

    //parameter google maps
    var options = {
      zoom: 12,
      center: new google.maps.LatLng(-7.566983,110.799076),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // buat peta di map
    map = new google.maps.Map(document.getElementById('peta'), options);
   
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    // kode untuk menampilkan banyak marker
    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1],locations[i][2]),
        map: map,
        icon:'img/market.png'
      });

      //info window sesuai marker yang diklik

      google.maps.event.addListener(marker, 'click', (function(marker, i){
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);

            }

        })(marker, i));
    }
   
  
}
tampilmarker('peta');

</script>
