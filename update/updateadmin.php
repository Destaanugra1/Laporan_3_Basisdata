<?php
include '../koneksi.php';
$user = $_POST['user_id_020'];
$password = $_POST['password_2_020'];
$nama = $_POST['nama'];
$harga = $_POST['hargaeletronik_020'];
$stok = $_POST['stok_020'];

mysqli_query($mysqli, "UPDATE admin_2359201020 SET password_2_020='$password', nama='$nama' WHERE user_id_020='$user'");

header("location:../database/admin.php?pesan=update");
?>