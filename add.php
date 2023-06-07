<?php
include_once('config/connection.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $pass=password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql   ="INSERT INTO `tbl_user`(`name`, `username`, `password`) VALUES ('$name','$username','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:index.php');
    echo"<script>alert('New User Register Success');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
}
