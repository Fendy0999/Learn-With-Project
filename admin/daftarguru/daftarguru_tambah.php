
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Guru</h1>
                    <p class="mb-4">
                        Halaman ini digunakan untuk mengelola data guru
                    </p>

                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Guru</h6>
                        </div>
                        <form action="./daftarguru/daftarguru_insert.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input type="text" class="form-control" name="nama_guru" required placeholder="Masukan nama anda">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" required placeholder="Masukan tanggal lahir anda">
                                </div>
                                <div class="form-group">
                                    <label>Kategori:</label>
                                    <select name="idk" class="form-control">
                                        <?php 
                                        $qry = mysqli_query($conn,"SELECT * FROM kategori");
                                        while($row=mysqli_fetch_array($qry)) {
                                            echo "<option value='$row[idk]'>$row[kategori]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Foto:<sup class="text-danger">*Kosongkan jika tidak ada foto</sup></label>
                                    <input type="file" class="form-control" name="foto1">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                                <a href="index.php?menu=daftarguru" class="btn btn-warning">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>

                            </div>
                        </form>

                    </div>
                </div>

