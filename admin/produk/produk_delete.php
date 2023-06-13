<?php
include "../../config/connection.php";

$idproduk = mysqli_real_escape_string($conn,$_GET['id']);

$qry = mysqli_query($conn,"SELECT * FROM produk WHERE idproduk='$idproduk' ");
$row = mysqli_fetch_array($qry);
if(!empty($row['foto']))
{
	unlink("admin/images/produk/$row[foto]"); //hapus foto produk
}


$sql = "DELETE FROM produk WHERE idproduk='$idproduk' ";
mysqli_query($conn,$sql);

$url   = "../index.php?menu=produk";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
