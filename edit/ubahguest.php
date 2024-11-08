<!DOCTYPE html>
<html>
<head>
    <title>Ubah Akun Guest</title>
</head>
<body>
    <h3>UBAH Akun Guest</h3>
    <?php
    include "../koneksi.php";
    $id_020 = $_GET['id_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM guest_2359201020 WHERE id_020='$id_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updateguest.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id_020" value="<?php echo $user_data['id_020'] ?>">
                    <input type="text" name="nama_020" value="<?php echo $user_data['nama_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><input  type="text" name="pesan_020" value="<?php echo $user_data['pesan_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>