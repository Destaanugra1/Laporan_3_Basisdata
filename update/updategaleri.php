<?php
include '../koneksi.php';
$images = $_POST['images'];

mysqli_query($mysqli, "UPDATE galeri_2359201020 SET images='$images' WHERE images='$images'");

header("location:../database/galeri.php?pesan=update");
?>

