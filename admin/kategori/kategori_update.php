<?php
include "../../config/connection.php";

$idk = mysqli_real_escape_string($conn,$_POST['idk']);
$kategori = mysqli_real_escape_string($conn,$_POST['kategori']);

$sql = "UPDATE kategori SET kategori='$kategori' WHERE idk='$idk' ";
mysqli_query($conn,$sql);

$url   = "../index.php?menu=kategori";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
