<?php
$idproduk = mysqli_real_escape_string($conn,$_GET['id']);
$sql   = "SELECT * FROM produk WHERE idproduk='$idproduk' ";
$query = mysqli_query($conn,$sql);
$data  = mysqli_fetch_array($query);
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Materi</h1>
                    <p class="mb-4">
                        Halaman ini digunakan untuk mengelola data materi
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Produk</h6>
                        </div>
                        <form action="./produk/produk_update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="idproduk" value="<?=$data['idproduk'];?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Judul Materi</label>
                                    <input type="text" class="form-control" name="judulmateri" required placeholder="Masukan judulmateri" value="<?=$data['judulmateri'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi:<sup class="text-danger">*Kosongkan jika tidak ada deskripsi</sup></label>
                                    <textarea class="form-control" name="deskripsi" rows="5"><?=$data['deskripsi'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Kategori:</label>
                                    <select name="idk" class="form-control">
                                        <?php 
                                        $qry = mysqli_query($conn,"SELECT * FROM kategori");
                                        while($row=mysqli_fetch_array($qry)) {
                                            $check = "";
                                            if($data['idk'] == $row['idk']) { $check ="selected"; }

                                            echo "<option $check value='$row[idk]'>$row[kategori]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Harga:</label>
                                    <input type="number" class="form-control" name="harga" required placeholder="Masukan harga" value="<?=$data['harga'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal:</label>
                                    <input type="date" class="form-control" name="tanggal" required placeholder="Masukan tanggal" value="<?=$data['tanggal'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Durasi:</label>
                                    <input type="number" class="form-control" name="durasi" required placeholder="Masukan durasi" value="<?=$data['durasi'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Foto:<sup class="text-danger">*Kosongkan jika tidak mengganti foto</sup></label>
                                    <input type="file" class="form-control" name="foto">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                                <a href="index.php?menu=produk" class="btn btn-warning">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>

                            </div>
                        </form>

                    </div>

                </div>

