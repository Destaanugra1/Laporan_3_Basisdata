<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Admin</title>
</head>
<body>
    <h3>UBAH data Admin</h3>
    <?php
    include "../koneksi.php";
    $user_id_020 = $_GET['user_id_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM admin_2359201020 WHERE user_id_020='$user_id_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updateadmin.php" method="post">
        <table>
            <tr>
                <td>Password</td>
                <td>
                    <input type="hidden" name="user_id_020" value="<?php echo $user_data['user_id_020'] ?>">
                    <input type="text" name="password_2_020" value="<?php echo $user_data['password_2_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $user_data['nama'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>