<?php
include '../koneksi.php';
$id = $_POST['judul_020'];
$kelas_kode_kelas = $_POST['isi'];
$kelas_guru_nip = $_POST['img'];
$judul = $_POST['tgl'];

mysqli_query($mysqli, "UPDATE news_2359201020 SET img='$kelas_guru_nip', tgl='$judul', isi='$sinopsis', isi='$kelas_kode_kelas' WHERE judul_020='$id'");

header("location:../database/news.php?pesan=update");
?>