		
	<?php
	session_start();
	error_reporting(0);
	echo "<a href='?page=inputmarket'><button type='button' class='btn btn-primary'>+Input Minimarket</button></a>";

		$pesan = $_GET['message'];
if ($pesan == '1'){
		echo "<div class='alert alert-success'>Berhasil!</div>";
	}
	if ($pesan == '0'){
		echo "<div class='alert alert-danger'>Gagal!</div>";
	}

		include "koneksi.php";
			echo "
			 <select id='myInput' onchange='myFunction()' class='form-control'>";

			$minta="SELECT DISTINCT(kab_kota) FROM market ";

			$eksekusi=mysql_query($minta);
				while($hasil=mysql_fetch_array($eksekusi))
				{
					$result = mysql_query("SELECT count(*) from market where kab_kota = '$hasil[kab_kota]';");
$jm = mysql_result($result, 0);
					echo "
  <option value='$hasil[kab_kota]'>$hasil[kab_kota] ($jm)</option>
  ";
}
  echo "
</select> 
			<table class='table' id='myTable'>
					<th>Gambar</th>
					<th>Mini Market</th>
					<th>Alamat</th>
					
					<th width='200px' ><center>Aksi</center></th>
					</tr>";

			$minta="SELECT * FROM market ORDER BY id_market";

			$eksekusi=mysql_query($minta);
				while($hasil=mysql_fetch_array($eksekusi))
				{
					echo "
					
			
					<tr>
					<td><i><img src='gambar/$hasil[gambar]' width=150 height=100 style='box-shadow: 2px 2px 5px #888888;''></i></td>
					<td><i>$hasil[nm_market]</i></td>
					<td><i>$hasil[alamat]</i>, <i>$hasil[kelurahan]</i>, <i>$hasil[kecamatan]</i>, <i>$hasil[kab_kota]</i></td>
					
					<td><i><a href='index.php?page=detail&id=$hasil[id_market]'><button type='button' class='btn btn-info'>Detail</button></a> <a href='index.php?page=editmarket&id=$hasil[id_market]'><button type='button' class='btn btn-warning'>Edit</button></a> <a href='delete.php?data=market&id=$hasil[id_market]'><button type='button' class='btn btn-danger'";?> onclick="return confirm('Yakin Ingin menghapus Data?')">Delete</button></a></i></td>
					</tr><?php
					
				}
				echo "</table>";
		?>
		<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>