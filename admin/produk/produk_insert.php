<?php
include "../../config/connection.php";

$judulmateri = mysqli_real_escape_string($conn,$_POST['judulmateri']);
$deskripsi 	 = mysqli_real_escape_string($conn,$_POST['deskripsi']);
$idk 		 = mysqli_real_escape_string($conn,$_POST['idk']);
$harga 		 = mysqli_real_escape_string($conn,$_POST['harga']);
$tanggal 	 = mysqli_real_escape_string($conn,$_POST['tanggal']);
$durasi 	 = mysqli_real_escape_string($conn,$_POST['durasi']);


$foto = "";
$foto_cek = $_FILES['foto']['name'];
if($foto_cek != "")
{
	$folder   = "../images/produk";
	$foto_tmp = $_FILES['foto']['tmp_name'];
	$foto_name= md5(date("YmdHis"));
	$foto_split=explode(".", $foto_cek); //memecahkan string berdasarkan titik
	$ext = end($foto_split); //hasil array terakhir adalah ekstensi file
	$foto = $foto_name.".".$ext;
	move_uploaded_file($foto_tmp, "$folder/$foto");
	
} 

$sql = "INSERT INTO produk 
		(judulmateri, deskripsi, idk, harga, tanggal, durasi, foto) 
		VALUES 
		('$judulmateri', '$deskripsi', '$idk', '$harga', '$tanggal', '$durasi', '$foto')";
mysqli_query($conn,$sql);

$url   = "../index.php?menu=produk";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
