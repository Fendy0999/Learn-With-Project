<?php
include "../../config/connection.php";

$idguru = mysqli_real_escape_string($conn,$_GET['id']);

$qry = mysqli_query($conn,"SELECT * FROM daftarguru WHERE idguru='$idguru' ");
$row = mysqli_fetch_array($qry);
if(!empty($row['foto1']))
{
	unlink("admin/images/guru/$row[foto1]"); //hapus foto produk
}

$sql = "DELETE FROM daftarguru WHERE idguru='$idguru' ";
mysqli_query($conn,$sql);

$url   = "../index.php?menu=daftarguru";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script> ";

?>
