<?php
include '../koneksi.php';
$nip = $_POST['nip_020'];
$nama = $_POST['nama_020'];
$tempat_lahir = $_POST['tempat_lahir_020'];
$tanggal_lahir = $_POST['tgl_lahir_020'];
$gender = $_POST['gender_020'];
$agama = $_POST['agama_020'];
$alamat = $_POST['alamat_020'];

mysqli_query($mysqli, "UPDATE guru_2359201020 SET nama_020='$tempat_lahir', gender_020='$gender', agama_020='$agama', alamat_020='$alamat', tempat_lahir_020='$nama'  WHERE nip_020='$nip'");

header("location:../database/guru.php?pesan=update");
?>