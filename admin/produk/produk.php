<?php 
$aksi = isset($_GET['aksi'])?$_GET['aksi']:"";
if      ($aksi == "tambah") { include "produk_tambah.php"; }
else if ($aksi == "edit")   { include "produk_edit.php"; }
else {
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Materi Kursus</h1>
                    <p class="mb-4">
                        Halaman ini digunakan untuk mengelola data produk
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kursus</h6>
                        </div>
                        <div class="card-body">
                            <a href="index.php?menu=produk&aksi=tambah" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="50">No</th>
                                            <th width="100">Judul Materi</th>
                                            <th>Deskripsi</th>
                                            <th width="100">Kategori</th>
                                            <th width="75">Harga</th>
                                            <th width="75">Tanggal</th>
                                            <th width="75">Durasi</th>
                                            <th width="75">Foto</th>
                                            <th width="100">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no  = 1;
                                    $sql = "SELECT * FROM produk LEFT JOIN kategori USING(idk)";
                                    $query = mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $link_hapus = "produk/produk_delete.php?id=$row[idproduk]";
                                        $link_edit  = "index.php?menu=produk&aksi=edit&id=$row[idproduk]";

                                        $foto = "default.jpg";
                                        if($row['foto'] != "") { $foto = $row['foto']; }
                                        $link_foto  = "./images/produk/$foto";
                                    ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td><?=$row['judulmateri'];?></td>
                                            <td class="d-inline-block text-truncate" style="max-width: 150px"><?=$row['deskripsi'];?></td>
                                            <td><?=$row['kategori'];?></td>
                                            <td align="right"><?=$row['harga'];?></td>
                                            <td><?=$row['tanggal'];?></td>
                                            <td align="right"><?=$row['durasi'];?></td>
                                            <td>
                                                <img src="<?=$link_foto;?>" width="75" height="75">
                                            </td>
                                            <td>
                                                <a href="<?=$link_edit;?>" class="btn btn-success">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?=$link_hapus;?>" class="btn btn-danger" onclick="return confirm('Apakah ingin menghapus data?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php 
                                    $no++;
                                    }
                                    ?>
                                        
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>

<?php 
}
?>