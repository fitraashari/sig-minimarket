		
	<?php
	error_reporting(0);
	session_start();

	echo "<a href='?page=inputuser'><button type='button' class='btn btn-primary'>+Input User</button></a>";

		$pesan = $_GET['message'];
if ($pesan == '1'){
		echo "<div class='alert alert-success'>Berhasil!</div>";
	}
	if ($pesan == '0'){
		echo "<div class='alert alert-danger'>Gagal!</div>";
	}

		include "koneksi.php";
			echo "<table class='table'>
					<th>Username</th>
					<th>Password</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Level</th>
					<th colspan=2><center>Aksi</center></th>
					</tr>";

			$minta="SELECT * FROM user where id_user != '$_SESSION[id_user]' ORDER BY lvl";

			$eksekusi=mysql_query($minta);
				while($hasil=mysql_fetch_array($eksekusi))
				{
					echo "
					
					<tr>
					<td><i>$hasil[username]</i></td>
					<td><i>********</i></td>
					<td><i>$hasil[nm_user]</i></td>
					<td><i>$hasil[email]</i></td>
					<td><i>$hasil[lvl]</i></td>
					<td><center><i><a href='index.php?page=edituser&id=$hasil[id_user]'><button type='button' class='btn btn-warning'>Edit</button></a></i> <i><a href='delete.php?data=user&id=$hasil[id_user]'><button type='button' class='btn btn-danger'";?> onclick="return confirm('Yakin Ingin menghapus Data?')">Delete</button></a></i></center></td>

					</tr><?php
									
				}
				echo "</table>";
		?>