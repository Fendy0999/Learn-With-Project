<?php
include "../../config/connection.php";

$nama_guru = mysqli_real_escape_string($conn,$_POST['nama_guru']);
$tgl_lahir = mysqli_real_escape_string($conn,$_POST['tgl_lahir']);
$idk = mysqli_real_escape_string($conn,$_POST['idk']);

$foto1 = "";
$foto_cek = $_FILES['foto1']['name'];
if($foto_cek != "")
{
	$folder   = "../images/guru";
	$foto_tmp = $_FILES['foto1']['tmp_name'];
	$foto_name= md5(date("YmdHis"));
	$foto_split=explode(".", $foto_cek); //memecahkan string berdasarkan titik
	$ext = end($foto_split); //hasil array terakhir adalah ekstensi file
	$foto1 = $foto_name.".".$ext;
	move_uploaded_file($foto_tmp, "$folder/$foto1");
} 

$sql = "INSERT INTO daftarguru 
		(nama_guru, tgl_lahir, idk, foto1) 
		VALUES 
		('$nama_guru', '$tgl_lahir', '$idk', '$foto1')";
mysqli_query($conn,$sql);

$url   = "../index.php?menu=daftarguru";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
