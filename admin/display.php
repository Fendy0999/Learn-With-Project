        <head>
            <link rel="stylesheet" href="style.css">
        </head>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">List Materi</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        

                            <?php
                            $no =1;
                            $sql="SELECT * FROM produk 
                                    LEFT JOIN kategori USING (idk)";
                            $query=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($query))
                            {
                                $link_hapus= "produk_delete.php?id=$row[idproduk]";
                                $link_edit = "index.php?menu=produk&aksi=edit&id=$row[idproduk]";
                                
                                $foto = "default.jpg";
                                if(!empty($row['foto'])) { $foto = $row['foto']; }
                                $link_foto = "./images/produk/$foto";
                            ?>  
                                <!-- <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card  h-100 ">
                                        <div class="card-body">
                                            <div align="center" style="font-weight:bold;" class="text-primary">
                                                //
                                            </div>
                                            <img src="<?=$link_foto;?>" class="col-sm-12">
                                            <div align="jutify" style="font-weight:regular;" class="text-primary">
                                                //
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-success" style="font-weight:bold;">
                                                Rp <?=number_format($row['harga'],0,'.',',');?>
                                            </div>
                                            <div >
                                                <a href="" class="btn btn-info col-sm-12">
                                                <i class="fa-brands fa-square-whatsapp"></i> Beli Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="blog-card">
                                    <div class="blog-card-banner">
                                        <img src="<?=$link_foto;?>" alt="<?=$row['judulmateri'];?>" width="250" class="blog-banner-img">
                                    </div>

                                    <div class="blog-content-wrapper">
                                        <button class="blog-topic text-tiny"><?=$row['kategori'];?> Materials</button>
                                        <h3>
                                            <a href="#" class="h3">
                                                <?=$row['judulmateri'];?>
                                            </a>
                                        </h3>

                                        <p class="blog-text">
                                            <?=$row['deskripsi'];?>
                                        </p>

                                        <div class="wrapper-flex">

                                            <div class="wrapper">
                                                <a href="#" class="h4"><?=$row['nama_guru'];?></a>

                                                <p class="text-sm">
                                                    <time datetime="2022-01-17"><?=$row['tanggal'];?></time>
                                                    <span class="separator"></span>
                                                    <ion-icon name="time-outline"></ion-icon>
                                                    <time datetime="PT3M"><?=$row['durasi'];?> min</time>
                                                    <button class="btn load-more" style="font-weight: 600;">Buy Course</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            $no++;
                            }
                            ?>
                            
                        
                    </div>
                    <!-- Content Row -->

                </div>