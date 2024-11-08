<?php
include '../koneksi.php';
$id = $_POST['id_020'];
$tgl = $_POST['tgl_020'];
$kelas_kode_kelas = $_POST['kelas_kode_kelas_020'];
$kelas_guru_nip = $_POST['kelas_guru_nip_020'];
$judul = $_POST['judu_020'];
$sinopsis = $_POST['sinopsis_020'];

mysqli_query($mysqli, "UPDATE materi_2359201020 SET kelas_guru_nip_020='$kelas_guru_nip', judu_020='$judul', sinopsis_020='$sinopsis', kelas_kode_kelas_020='$kelas_kode_kelas' WHERE id_020='$id'");

header("location:../database/materi.php?pesan=update");
?>