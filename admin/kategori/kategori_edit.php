<?php
$idk   = mysqli_real_escape_string($conn,$_GET['id']);
$sql   = "SELECT * FROM kategori WHERE idk='$idk' ";
$query = mysqli_query($conn,$sql);
$data  = mysqli_fetch_array($query);
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
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Kategori</h6>
                        </div>
                        <form action="./kategori/kategori_update.php" method="post">
                            <input type="hidden" name="idk" value="<?=$data['idk'];?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kategori:</label>
                                    <input type="text" class="form-control" name="kategori" required placeholder="Masukan nama kategori" value="<?=$data['kategori'];?>">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                                <a href="index.php?menu=kategori" class="btn btn-warning">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>

                            </div>
                        </form>

                    </div>

                </div>

