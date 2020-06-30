        
    <?php
    error_reporting(0);
            include "koneksi.php";
        $id = $_GET['id'];
            $minta="SELECT * FROM market where id_market = '$id'";
            $eksekusi=mysql_query($minta);
            $hasil=mysql_fetch_array($eksekusi);

    ?>

<div id="map" style="height:400px;width:100%; border:2px black solid;"></div><div class="form-group">
<form action='u_market.php' method='POST' enctype="multipart/form-data">
<table class="table">
        <input type="hidden" name="id_market" value='<?php echo "$hasil[id_market]"; ?>'>
            <tr>
          <td valign="top">Latitude</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="lat" id="lat" required="required"  size="30" readonly="readonly" value='<?php echo "$hasil[latitude]"; ?>'/></td>
        </tr>
        <tr>
          <td valign="top">Longitude</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="long" id="long" required="required"  size="30" value='<?php echo "$hasil[longitude]"; ?>' readonly="readonly" /></td>
        </tr>
      <tr>
          <td valign="top">Nama Mini Market</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="nm_market" maxlength="50" required="required" placeholder="Mini market" value='<?php echo "$hasil[nm_market]"; ?>'/></td>
        </tr>
      <tr>
          <td valign="top">Alamat</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="alamat" maxlength="100" required="required" placeholder="Alamat" size="30" value='<?php echo "$hasil[alamat]"; ?>'/></td>
        </tr>
        <tr>
          <td valign="top">Kelurahan</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="kel" maxlength="50" required="required" placeholder="Kelurahan" value='<?php echo "$hasil[kelurahan]"; ?>'/></td>
        </tr>
        <tr>
          <td valign="top">Kecamatan</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="kec" maxlength="50" required="required" placeholder="Kecamatan" value='<?php echo "$hasil[kecamatan]"; ?>'/></td>
        </tr>
        <tr>
          <td valign="top">Kabupaten/Kota</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="kab" maxlength="50" required="required" placeholder="Kabupaten/Kota" value='<?php echo "$hasil[kab_kota]"; ?>'/></td>
        </tr>
        <tr>
          <td valign="top">Fasilitas ATM</td>
          <td valign="top">:</td>
          <td>
          <?php $arr_atm = explode(",",$hasil['atm']); 

          ?>
            <input type="checkbox" name="atm[]" value="BCA" <?php

if (in_array("BCA", $arr_atm))
  {
  echo "checked";
  }
?>> BCA<br>
  <input type="checkbox" name="atm[]" value="BRI" <?php

if (in_array("BRI", $arr_atm))
  {
  echo "checked";
  }
?>> BRI<br>
  <input type="checkbox" name="atm[]" value="BNI" <?php

if (in_array("BNI", $arr_atm))
  {
  echo "checked";
  }
?>> BNI<br>
  <input type="checkbox" name="atm[]" value="MANDIRI" <?php

if (in_array("MANDIRI", $arr_atm))
  {
  echo "checked";
  }
?>> MANDIRI<br></td>
        </tr>
        <tr>
          <td valign="top">Fasilitas Wifi</td>
          <td valign="top">:</td>
          <td>    <input type="radio" name="wifi" value="Ada" <?php

if ($hasil['wifi'] == "Ada")
  {
  echo "checked";
  }
?>> Ada<br>
  <input type="radio" name="wifi" value="Tidak Ada" <?php

if ($hasil['wifi'] == "Tidak Ada")
  {
  echo "checked";
  }
?>> Tidak Ada<br> </td>
        </tr>
        <tr>
          <td valign="top">Fasilitas Lain</td>
          <td valign="top">:</td>
          <td>    <textarea rows="4" class="form-control" cols="50" name="f_lain" >
<?php echo "$hasil[fasilitas_lain]"; ?>
</textarea> </td>
        </tr>
        <tr>
          <td valign="top">Buka 24 Jam</td>
          <td valign="top">:</td>
          <td>    <input type="radio" name="24jam" value="Ya" <?php

if ($hasil['24_jam'] == "Ya")
  {
  echo "checked";
  }
?>> Ya<br>
  <input type="radio" name="24jam" value="Tidak" <?php

if ($hasil['24_jam'] == "Tidak")
  {
  echo "checked";
  }
?>> Tidak<br> </td>
        </tr>
        <tr>
          <td valign="top">Gambar</td>
          <td valign="top">:</td>
          <td>
          <img src='gambar/<?php echo"$hasil[gambar]"; ?>' width=200 height=150>
          <br>
          <input type="file" name="img"></td>
        </tr>
          <tr>
          <td colspan='3'><center><input type=submit class="btn btn-info" value=Simpan> <input type=button class="btn btn-warning" value=Batal onclick=self.history.back()></center></td>
        </tr>
</table>
</form>
 <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo "$hasil[latitude]"; ?>, lng: <?php echo "$hasil[longitude]"; ?>},
          zoom: 17
        });
		function updateMarkerPosition(latLng) {
    document.getElementById('lat').value = [latLng.lat()];
    document.getElementById('long').value = [latLng.lng()];
  }
		  var marker1 = new google.maps.Marker({
  position : new google.maps.LatLng(<?php echo "$hasil[latitude]"; ?>,<?php echo "$hasil[longitude]"; ?>),
  title : 'lokasi',
  map : map,
  draggable : true
  });
  google.maps.event.addListener(marker1, 'drag', function() {
    updateMarkerPosition(marker1.getPosition());
  });
  }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDua6wdMgcICXPTa9fSUqGcIJCoRl_hlJU&callback=initMap"
    async defer></script>
    </div>
