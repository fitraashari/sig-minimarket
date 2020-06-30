<?php
include "koneksi.php";
session_start(); 


$pass=md5($_POST['password']);
$login=mysql_query("SELECT * FROM user WHERE username='$_POST[username]' AND password='$pass' ");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);
// Apabila username dan password ditemukan (valid)
	if ($ketemu > 0){
$_SESSION['id_user'] = $r['id_user'];
$_SESSION['nm_user'] = $r['nm_user'];
$_SESSION['username'] = $r['username'];
$_SESSION['password'] = $r['password'];
$_SESSION['lvl'] = $r['lvl'];
echo "<script>alert('Login Berhasil');</script>";
echo"<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	else{
echo "<script>alert('Username/Password Salah');</script>";
echo"<meta http-equiv='refresh' content='0;url=login.php'>";
	}
?>