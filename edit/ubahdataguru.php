<!DOCTYPE html>
<html>
<head>
    <title>Ubah Guru</title>
</head>
<body>
    <h3>UBAH Guru</h3>
    <?php
    include "../koneksi.php";
    $nip_020 = $_GET['nip_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM guru_2359201020 WHERE nip_020='$nip_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updateguru.php" method="post">
        <table>
            <tr>
                <td>Nama guru</td>
                <td>
                    <input type="hidden" name="nip_020" value="<?php echo $user_data['nip_020'] ?>">
                    <input type="text" name="nama_020" value="<?php echo $user_data['nama_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir_020" value="<?php echo $user_data['tempat_lahir_020'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tgl_lahir_020" value="<?php echo $user_data['tgl_lahir_020'] ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender_020" value="<?php echo $user_data['gender_020'] ?>"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama_020" value="<?php echo $user_data['agama_020'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_020" value="<?php echo $user_data['alamat_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>