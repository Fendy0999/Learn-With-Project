<?php 
$aksi = isset($_GET['aksi'])?$_GET['aksi']:"";
if      ($aksi == "tambah") { include "kategori_tambah.php"; }
else if ($aksi == "edit")   { include "kategori_edit.php"; }
else {
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Kategori</h1>
                    <p class="mb-4">
                        Halaman ini digunakan untuk mengelola data kategori
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                        </div>
                        <div class="card-body">
                            <a href="index.php?menu=kategori&aksi=tambah" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="50">No</th>
                                            <th>Nama Kategori</th>
                                            <th width="150">Jumlah Materi</th>
                                            <th width="100">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no  = 1;
                                    $sql = "SELECT *, (SELECT COUNT(*) FROM produk WHERE produk.idk=kategori.idk) as jp 
                                                FROM kategori";
                                    $query = mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $link_hapus = "kategori/kategori_delete.php?id=$row[idk]";
                                        $link_edit  = "index.php?menu=kategori&aksi=edit&id=$row[idk]";
                                    ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td><?=$row['kategori'];?></td>
                                            <td><?=$row['jp'];?></td>
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