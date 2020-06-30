

<div id="map" style="height:400px;width:100%; border:2px black solid;"></div><div class="form-group">
<form action='in_market.php' method='POST' enctype="multipart/form-data">
<table class="table">
        
            <tr>
          <td valign="top">Latitude</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="lat" id="lat" required="required"  size="30" value="0" readonly="readonly" /></td>
        </tr>
        <tr>
          <td valign="top">Longitude</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="long" id="long" required="required"  size="30" value="0" readonly="readonly" /></td>
        </tr>
      <tr>
          <td valign="top">Nama Mini Market</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="nm_market" maxlength="50" required="required" placeholder="Mini market"/></td>
        </tr>
      <tr>
          <td valign="top">Alamat</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="alamat" maxlength="100" required="required" placeholder="Alamat" size="30"/></td>
        </tr>
        <tr>
          <td valign="top">Keluarahan</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="kel" maxlength="50" required="required" placeholder="Kelurahan"/></td>
        </tr>
        <tr>
          <td valign="top">Kecamatan</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="kec" maxlength="50" required="required" placeholder="Kecamatan"/></td>
        </tr>
        <tr>
          <td valign="top">Kabupaten/Kota</td>
          <td valign="top">:</td>
          <td><input type="text" class="form-control" name="kab" maxlength="50" required="required" placeholder="Kabupaten/Kota"/></td>
        </tr>
        <tr>
          <td valign="top">Fasilitas ATM</td>
          <td valign="top">:</td>
          <td>  <input type="checkbox"  name="atm[]" value="BCA"> BCA<br>
  <input type="checkbox" name="atm[]"  value="BRI" > BRI<br>
  <input type="checkbox" name="atm[]"  value="BNI" > BNI<br>
  <input type="checkbox" name="atm[]"  value="MANDIRI" > MANDIRI<br></td>
        </tr>
        <tr>
          <td valign="top">Fasilitas Wifi</td>
          <td valign="top">:</td>
          <td>    <input type="radio"  name="wifi" value="Ada" checked> Ada<br>
  <input type="radio" name="wifi"  value="Tidak Ada"> Tidak Ada<br> </td>
        </tr>
        <tr>
          <td valign="top">Fasilitas Lain</td>
          <td valign="top">:</td>
          <td>    <textarea rows="4" cols="50" class="form-control" name="f_lain" >
-
</textarea> </td>
        </tr>
        <tr>
          <td valign="top">Buka 24 Jam</td>
          <td valign="top">:</td>
          <td><input type="radio"  name="24jam" value="Ya" checked> Ya<br>
  <input type="radio" name="24jam"  value="Tidak"> Tidak<br>     </td>
        </tr>
        <tr>
          <td valign="top">Gambar</td>
          <td valign="top">:</td>
          <td><input type="file"  name="img"></td>
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
          center: {lat: -7.566983, lng: 110.799076},
          zoom: 15
        });
		function updateMarkerPosition(latLng) {
    document.getElementById('lat').value = [latLng.lat()];
    document.getElementById('long').value = [latLng.lng()];
  }
		  var marker1 = new google.maps.Marker({
  position : new google.maps.LatLng(-7.566983,110.799076),
  title : 'lokasi',
  map : map,
  draggable : true
  });
  google.maps.event.addListener(marker1, 'drag', function() {
    updateMarkerPosition(marker1.getPosition());
  });
  }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYxDEyFIV1ggBf6f7s_gEv8EcrS85I05M&callback=initMap"
    async defer></script>
</div>