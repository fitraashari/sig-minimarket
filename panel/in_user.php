<?php
include "koneksi.php";

$nama_l = $_POST['nama_l'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	$level = $_POST['lvl'];


	$ekse = mysql_query("insert into user(username,password,nm_user,email,lvl) values ('$username','$password','$nama_l','$email','$level')") or die(mysql_error());
	if ($ekse == 1){
	header('location:index.php?page=user&message=1');
	}
	?>