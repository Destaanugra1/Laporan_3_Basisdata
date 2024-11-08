<?php
include '../koneksi.php';
$user = $_POST['id_020'];
$judul = $_POST['nama_020'];
$nama = $_POST['pesan_020'];

mysqli_query($mysqli, "UPDATE guest_2359201020 SET nama_020='$judul', pesan_020='$nama' WHERE id_020='$user'");

header("location:../database/guest.php?pesan=update");
?>