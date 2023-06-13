
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Produk</h1>
                    <p class="mb-4">
                        Halaman ini digunakan untuk mengelola data produk
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Produk</h6>
                        </div>
                        <form action="./produk/produk_insert.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Judul Materi:</label>
                                    <input type="text" class="form-control" name="judulmateri" required placeholder="Masukan judul materi">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi:<sup class="text-danger">*Kosongkan jika tidak ada deskripsi</sup></label>
                                    <textarea class="form-control" name="deskripsi" rows="5"></textarea>
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
                                    <label>Harga:</label>
                                    <input type="number" class="form-control" name="harga" required placeholder="Masukan harga">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" required placeholder="Masukan tanggal">
                                </div>
                                <div class="form-group">
                                    <label>Durasi:</label>
                                    <input type="number" class="form-control" name="durasi" required placeholder="Masukan durasi">
                                </div>
                                <div class="form-group">
                                    <label>Foto:<sup class="text-danger">*Kosongkan jika tidak ada foto</sup></label>
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

