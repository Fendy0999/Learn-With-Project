<?php
include "../../config/connection.php";

$idguru = mysqli_real_escape_string($conn,$_POST['idguru']);
$nama_guru = mysqli_real_escape_string($conn,$_POST['nama_guru']);
$tgl_lahir = mysqli_real_escape_string($conn,$_POST['tgl_lahir']);
$idk = mysqli_real_escape_string($conn,$_POST['idk']);

//update data teks
$sql = "UPDATE daftarguru SET nama_guru='$nama_guru',
				     	  	  tgl_lahir='$tgl_lahir',
				     	  	  idk='$idk'
				     		  WHERE idguru='$idguru' ";
mysqli_query($conn,$sql);

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

	//hapus foto lama
	$qry = mysqli_query($conn,"SELECT * FROM daftarguru WHERE idguru='$idguru' ");
	$row = mysqli_fetch_array($qry);
	if(!empty($row['foto1']))
	{
		unlink("admin/images/guru/$row[foto1]"); //hapus foto produk
	}

	//update foto baru
	$sql = "UPDATE daftarguru SET foto1 = '$foto1' WHERE idguru='$idguru' ";
	mysqli_query($conn,$sql);
} 

$url   = "../index.php?menu=daftarguru";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
