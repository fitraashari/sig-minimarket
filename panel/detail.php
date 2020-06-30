                 <?php
    error_reporting(0);
            include "koneksi.php";
        $id = $_GET['id'];
            $minta="SELECT * FROM market where id_market = '$id'";
            $eksekusi=mysql_query($minta);
            $hasil=mysql_fetch_array($eksekusi);

    ?>
              <div class="col-xs-6 col-sm-6" >
              <div class="panel panel-default" style="box-shadow: 1px 1px 5px #888888;">
                <div class="panel-heading"><span class="title">Peta Lokasi</span></div>
                <div class="panel-body">
                  <div id="map" style="height:400px;width:100%; "></div><div class="form-group"></div>
                </div>
                </div>
              </div>

                          <div class="col-xs-6 col-sm-6" >
              <div class="panel panel-default" style="box-shadow: 1px 1px 5px #888888;" >
              <pre class="prettyprint" style="background-image: url('gambar/<?php echo $hasil['gambar']; ?>');background-size: 100% 200px;width: 100%; height: 200px;">
                </pre>
                <div class="panel-heading"><span class="title"><?php echo "$hasil[nm_market]"; ?></span></div>
                <div class="panel-body">
                  <table class="table" >
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
                  <tr>
                  <td colspan="3"><center><a href='index.php?page=editmarket&id=<?=$hasil['id_market'];?>'><button type='button' class='btn btn-warning'>Edit</button></a> <a href='delete.php?data=market&id=<?=$hasil['id_market'];?>'><button type='button' class='btn btn-danger' onclick="return confirm('Yakin Ingin menghapus Data?')">Delete</button></a> <input type=button class="btn btn-primary" value=Kembali onclick=self.history.back()></center></td>
                  </table>
                </div>
                </div>
              </div><script>
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