<?php 
$aksi = isset($_GET['aksi'])?$_GET['aksi']:"";
if      ($aksi == "tambah") { include "daftarguru_tambah.php"; }
else if ($aksi == "edit")   { include "daftarguru_edit.php"; }
else {
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Guru</h1>
                    <p class="mb-4">
                        Halaman ini digunakan untuk mengelola data guru
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                        </div>
                        <div class="card-body">
                            <a href="index.php?menu=daftarguru&aksi=tambah" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="50">No</th>
                                            <th width="100">Nama Guru</th>
                                            <th width="75">Tanggal Lahir</th>
                                            <th width="100">Kategori</th>
                                            <th width="75">Foto</th>
                                            <th width="100">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no  = 1;
                                    $sql = "SELECT * FROM daftarguru LEFT JOIN kategori USING(idk)";
                                    $query = mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $link_hapus = "daftarguru/daftarguru_delete.php?id=$row[idguru]";
                                        $link_edit  = "index.php?menu=daftarguru&aksi=edit&id=$row[idguru]";

                                        $foto1 = "default.jpg";
                                        if($row['foto1'] != "") { $foto1 = $row['foto1']; }
                                        $link_foto1  = "./images/guru/$foto1";
                                    ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td><?=$row['nama_guru'];?></td>
                                            <td><?=$row['tgl_lahir'];?></td>
                                            <td><?=$row['kategori'];?></td>
                                            <td>
                                                <img src="<?=$link_foto1;?>" width="75" height="75">
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