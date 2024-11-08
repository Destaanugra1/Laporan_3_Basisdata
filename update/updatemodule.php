<?php
include '../koneksi.php';
$id = $_POST['id_020'];
$tgl = $_POST['tgl_020'];
$kelas_kode_kelas = $_POST['menu_020'];
$kelas_guru_nip = $_POST['link_020'];
$judul = $_POST['urut'];
$sinopsis = $_POST['isi'];

mysqli_query($mysqli, "UPDATE modul_2359201020 SET link_020='$kelas_guru_nip', urut='$judul', isi='$sinopsis', menu_020='$kelas_kode_kelas' WHERE id_020='$id'");

header("location:../database/modul.php?pesan=update");
?>