<?php
$user = "root";
$pass = "";
$host = "localhost";
$db = "sig_market";

$konek = mysql_connect($host,$user,$pass);
$konek_db = mysql_select_db($db);

if ($konek_db != 1){
echo "<script>alert('Gagal terhubung ke database')</script>";
}
