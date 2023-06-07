<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: user/index.php");
    exit;
}

// Cek role pengguna
if ($_SESSION['role'] !== 'admin') {
    echo "Anda tidak memiliki akses ke halaman ini!";
    exit;
}

// Tampilkan halaman dashboard
echo "Selamat datang, " . $_SESSION['username'] . "! Ini adalah halaman dashboard admin.";
?>
 