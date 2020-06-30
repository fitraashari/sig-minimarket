<?php
include "koneksi.php";
$id = $_GET['id'];
$tabel = $_GET['data'];

if ($tabel == "user"){
	$ekse = mysql_query("delete from user where id_user = '$id'") or die(mysql_error());
	if ($ekse == 1){
		header('location:index.php?page=user&message=1');
	}
	else {
				header('location:index.php?page=user&message=0');
	}

}
if ($tabel == "market"){
	$ekse = mysql_query("delete from market where id_market = '$id'") or die(mysql_error());
	if ($ekse == 1){
		header('location:index.php?page=market&message=1');
	}
	else {
				header('location:index.php?page=market&message=0');
	}

}

?>