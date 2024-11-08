<?php
include '../koneksi.php';

$user = $_POST['kode_kelas_020'];
$judul = $_POST['guru_nip_020'];
$nama = $_POST['kelas_020'];

// jika data tidak bisa diubah, maka akan pindah ke halaman utama
// karean data yang di tabel kelas memiliki foreign key, dan primary key
try {
    $query = "UPDATE kelas_2359201020 SET kelas_020='$nama', guru_nip_020='$judul' WHERE kode_kelas_020='$user'";
    if (!mysqli_query($mysqli, $query)) {
        throw new Exception(mysqli_error($mysqli));
    }
    header("location:../database/kelas.php?pesan=update");
} catch (Exception $e) {
    header("location:../database/kelas.php?pesan=error");
}
?>