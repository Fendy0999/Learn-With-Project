<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--- primary meta tags-->
  <title>LearnWith</title>
  <meta name="title" content="LearnWith">

  <!-- - favicon-->
  <link rel="shortcut icon" href="../assets/images/LearnWith Logo.png" type="image/svg+xml">

  <!-- - custom font link-->
  <link rel="stylesheet" href="../assets/font/font.css">

  <!--- custom css link-->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- preload images-->
  <!-- <link rel="preload" as="image" href="../assets/images/banner.png"> -->
</head>

<body>
  <!--- PRELOADER-->
  <div class="preloader" data-preloader>
    <div class="circle" data-circle></div>
  </div>

  <!-- Header -->
  <?php include "navbar.php";?>

  <!-- Banner content -->
  <?php include "home.php";?>

  <!-- Instructor -->
  <?php include "instructor.php";?>

  <!-- Department Content -->
  <?php include "department.php";?>

  <!-- Footer -->
  <?php include "footer.php";?>

  <!-- - custom js link-->
  <script src="./assets/js/script.js"></script>

  <!-- - ionicon-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>