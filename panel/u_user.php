<?php
include "koneksi.php";

$password = md5($_POST['password']);
if (empty($_POST['password'])) {
$ekse = mysql_query("UPDATE user SET username = '$_POST[username]', nm_user = '$_POST[nama_l]', email = '$_POST[email]', lvl = '$_POST[lvl]' WHERE id_user = '$_POST[id_user]'")or die (mysql_error());
}
// Apabila password diubah
if (!empty($_POST['password'])){
$ekse = mysql_query("UPDATE user SET username = '$_POST[username]',password = '$password',nm_user = '$_POST[nama_l]',email = '$_POST[email]',lvl = '$_POST[lvl]' WHERE id_user = '$_POST[id_user]'")or die (mysql_error());
}
if ($ekse == 1){
header('location:index.php?page=user&message=1');
}
else {

header('location:index.php?page=user&message=0');
}
?>