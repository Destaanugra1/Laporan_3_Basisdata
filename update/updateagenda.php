<?php
include '../koneksi.php';
$user = $_POST['id_020'];
$judul = $_POST['judul_020'];
$nama = $_POST['isi_020'];

mysqli_query($mysqli, "UPDATE agenda_2359201020 SET judul_020='$judul', isi_020='$nama' WHERE id_020='$user'");

header("location:../database/agenda.php?pesan=update");
?>