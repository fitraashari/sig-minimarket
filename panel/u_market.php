<?php
session_start();
include "koneksi.php";
//tangkap data dari form
$lat = $_POST['lat'];
$long=$_POST['long'];
$nm_market=$_POST['nm_market'];

$atm = implode(",",$_POST['atm']);
$wifi=$_POST['wifi'];
$f_lain=$_POST['f_lain'];
$buka=$_POST['24jam'];
$alamat=$_POST['alamat'];
$kel=$_POST['kel'];
$kec=$_POST['kec'];
$kab=$_POST['kab'];
if(empty($atm)){
    $atm = '-';
}
$target_dir = "gambar/";
$target_file = $target_dir . $nm_market . '_'. basename($_FILES["img"]["name"]);
$uploadOk = 1;
$id = $_POST['id_market'];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if (!empty($_FILES["img"])){
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["img"]["tmp_name"]);
		if($check !== false) {
        echo "Gambar Sudah Benar - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Gambar Salah.</br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    
header('location:index.php?page=market&message=0');
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img"]["size"] > 5000000) {
        
header('location:index.php?page=market&message=0');
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
header('location:index.php?page=market&message=0');
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "<script>alert('Upload Gambar gagal');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        $gambar = $nm_market . '_'. basename($_FILES["img"]["name"]);
		$ekse = mysql_query("update market set latitude = '$lat',longitude = '$long',nm_market = '$nm_market',gambar = '$gambar',atm = '$atm',wifi = '$wifi',fasilitas_lain = '$f_lain',alamat = '$alamat',kelurahan = '$kel',kecamatan = '$kec',kab_kota = '$kab',24_jam = '$buka' where id_market = '$_POST[id_market]'");
		if ($ekse == 1){
	header('location:index.php?page=market&message=1');
	}
}
     else {
       header('location:index.php?page=market&message=0');
    }
}
}if (empty($_FILES["img"]["tmp_name"])){
        $ekse = mysql_query("update market set latitude = '$lat',longitude = '$long',nm_market = '$nm_market',atm = '$atm',wifi = '$wifi',fasilitas_lain = '$f_lain',alamat = '$alamat',kelurahan = '$kel',kecamatan = '$kec',kab_kota = '$kab',24_jam = '$buka' where id_market = '$_POST[id_market]'")or die(mysql_error());
        if ($ekse == 1){
    header('location:index.php?page=market&message=1');
    }else{
        header('location:index.php?page=market&message=1');
    }
}

?> 