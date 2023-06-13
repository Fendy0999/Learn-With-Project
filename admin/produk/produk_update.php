<?php
include "../../config/connection.php";

$idproduk = mysqli_real_escape_string($conn,$_POST['idproduk']);
$judulmateri = mysqli_real_escape_string($conn,$_POST['judulmateri']);
$deskripsi = mysqli_real_escape_string($conn,$_POST['deskripsi']);
$idk = mysqli_real_escape_string($conn,$_POST['idk']);
$harga = mysqli_real_escape_string($conn,$_POST['harga']);
$tanggal = mysqli_real_escape_string($conn,$_POST['tanggal']);
$durasi = mysqli_real_escape_string($conn,$_POST['durasi']);

//update data teks
$sql = "UPDATE produk SET judulmateri='$judulmateri', 
				     	  deskripsi='$deskripsi',
				     	  idk='$idk',
				     	  harga='$harga',
						  tanggal='$tanggal',
				     	  durasi='$durasi'
				     	  WHERE idproduk='$idproduk' ";
mysqli_query($conn,$sql);

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

	//hapus foto lama
	$qry = mysqli_query($conn,"SELECT * FROM produk WHERE idproduk='$idproduk' ");
	$row = mysqli_fetch_array($qry);
	if(!empty($row['foto']))
	{
		unlink("admin/images/produk/$row[foto]"); //hapus foto produk
	}

	//update foto baru
	$sql = "UPDATE produk SET foto = '$foto' WHERE idproduk='$idproduk' ";
	mysqli_query($conn,$sql);
} 

$url   = "../index.php?menu=produk";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
