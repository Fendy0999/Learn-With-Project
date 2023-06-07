<?php
session_start();

// Cek apakah pengguna sudah login
// if (isset($_SESSION['username'])) {
//     header("Location: dashboard.php");
//     exit;
// }

// Koneksi ke database
include_once('config/connection.php');

// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password cocok
    $query = "SELECT * FROM tbl_user WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $user = mysqli_fetch_array($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['mail'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if($user['role'] == 'user'){
                header("Location:user/index.php");
            }
            else if($user['role'] == 'admin'){    
                header("Location:admin/index.php");
            }
            
            exit;
        } else {
            header("Location:index.php");
        }
    }

    // Jika login gagal
    $error = "Username atau password salah!";
}
?>
