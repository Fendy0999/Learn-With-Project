<?php
include "../../config/connection.php";

$kategori = mysqli_real_escape_string($conn,$_POST['kategori']);

$sql = "INSERT INTO kategori (kategori) VALUES ('$kategori')";
mysqli_query($conn,$sql);

$url   = "../index.php?menu=kategori";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script> ";
// header('Location: ' . $url);

?>
