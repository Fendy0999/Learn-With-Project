<?php
include "../../config/connection.php";

$idk = mysqli_real_escape_string($conn,$_GET['id']);

$sql = "DELETE FROM kategori WHERE idk='$idk' ";
mysqli_query($conn,$sql);

$url   = "../index.php?menu=kategori";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
