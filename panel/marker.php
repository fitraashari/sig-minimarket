
<div id="peta" style="width: auto; height:480px;"></div>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYxDEyFIV1ggBf6f7s_gEv8EcrS85I05M"></script>
<script type="text/javascript">
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
function tampilmarker() { 
  var locations = [
    <?php
            // konfigurasi koneksi database
          include ('koneksi.php');

              $sql_lokasi="SELECT * from market ";
              $result=mysql_query($sql_lokasi);
              while($data=mysql_fetch_object($result)){
              $arr_atm = explode(",",$data->atm); 
                $bca = "";
                $bri = "";
                $bni = "";
                $wifi = "";
                                if ($data->wifi == "Ada")
                {
                  $wifi = " <img src='img/wifi.png' width='60px' height='34px'>";
                }
                if (in_array("BCA", $arr_atm))
                {
                  $bca = " <img src='img/bca.png' width='60px' height='34px'>";
                }
                if (in_array("BRI", $arr_atm))
                {
                  $bri = " <img src='img/bri.png' width='60px' height='30px'>";
                }
                if (in_array("BNI", $arr_atm))
                {
                  $bni = " <img src='img/bni.png' width='60px' height='34px'>";
                }
                                if (in_array("MANDIRI", $arr_atm))
                {
                  $mandiri = " <img src='img/mandiri.jpg' width='60px' height='34px'>";
                }
                 ?>
                    ["<div role='tabpanel' style='width:400px;height:290px;overflow:hidden;'>"+ 
                            "<ul class='nav nav-tabs' role='tablist'>"+
                                "<li role='presentation' class='active'><a href='index.php?page=detail&id=<?=$data->id_market; ?>' aria-controls='info'><b>Detail Minimarket</b></a></li>"+
                            "</ul>"+
                        "<div class='tab-content'>"+
                            "<div role='tabpanel' class='tab-pane active' id='info'>"+
                "<table border='0'>"+
                "<tr>"+
                "<td rowspan='3' width='210' valign='top'>"+
                "<i><img src='gambar/<?=$data->gambar; ?>' width='200px' height='150' style='box-shadow: 3px 3px 5px #888888;'></i>"+
                "</td>"+
                "</tr>"+
                "<tr>"+
                "<td width='70px' valign='top' colspan='2'>"+
                                "<center><i> <b><?=$data->nm_market; ?></b></i><center>"+
                "</td>"+
                "</tr>"+               
                                "<tr>"+
                "<td valign='top' colspan='3'>"+
                      "<center><hr><i><?=$data->alamat; ?>, <?=$data->kelurahan; ?>, <?=$data->kecamatan; ?>, <?=$data->kab_kota; ?></i></center>"+
                "</td>"+
                "</tr>"+
                "<tr>"+
                "<td valign='top' colspan='3' align='left'><hr><center><?=$wifi; ?><?=$bca; ?><?=$bri; ?><?=$bni; ?><?=$mandiri; ?></center>"+
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
      zoom: 13,
      center: new google.maps.LatLng(-7.566983,110.799076),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // buat peta di map
    map = new google.maps.Map(document.getElementById('peta'), options);
   map.setOptions({styles: styles['hide']});
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    // kode untuk menampilkan banyak marker
    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1],locations[i][2]),
        map: map,
        icon:'img/market.png',
        animation: google.maps.Animation.DROP
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
