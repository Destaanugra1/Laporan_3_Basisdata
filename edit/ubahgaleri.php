<!DOCTYPE html>
<html>
<head>
    <title>Ubah Galeri</title>
</head>
<body>
    <h3>UBAH Galeri</h3>
    <?php
    include "../koneksi.php";
    $images = $_GET['images'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM galeri_2359201020 WHERE images='$images'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updategaleri.php" method="post">
        <table>
            <tr>
                <td>images</td>
                <td>
                    <input type="hidden" name="images" value="<?php echo $user_data['images'] ?>">
                    <input type="text" name="images" value="<?php echo $user_data['images'] ?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>