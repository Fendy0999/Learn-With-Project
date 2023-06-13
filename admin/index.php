<?php 
include "../config/connection.php";
require '../config/secure.php';

if(isset($_POST['action'])){
  unset($_SESSION['mail']);
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LearnWith Admin :: Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="./themes/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./themes/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="./themes/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "menu.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "menu_top.php";?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php 
                $menu=isset($_GET['menu'])?$_GET['menu']:"";
                if($menu == "") { include "display.php"; }
                else if($menu == "kategori") { include "kategori/kategori.php"; }
                else if($menu == "produk") { include "produk/produk.php"; }
                else if($menu == "display") { include "display.php"; }
                else if($menu == "daftarguru") {include "daftarguru/daftarguru.php";}
                else { include "blank_page.php"; }
                ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php";?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                <form action="" method="post">
                <input type="submit" name="action" class="btn" style="font-weight: 600; color: black; background:white;" value="Logout">
            </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./themes/vendor/jquery/jquery.min.js"></script>
    <script src="./themes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./themes/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./themes/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./themes/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./themes/js/demo/chart-area-demo.js"></script>
    <script src="./themes/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="./themes/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./themes/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./themes/js/demo/datatables-demo.js"></script>
</body>

</html>