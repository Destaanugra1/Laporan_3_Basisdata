<!DOCTYPE html>
<html>
<head>
    <title>Ubah Guru</title>
</head>
<body>
    <h3>UBAH Guru</h3>
    <?php
    include "../koneksi.php";
    $id_020 = $_GET['id_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM news_2359201020 WHERE id_020='$id_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatenews.php" method="post">
        <table>
            <tr>
                <td>Judul</td>
                <td>
                    <input type="hidden" name="id_020" value="<?php echo $user_data['id_020'] ?>">
                    <input type="text" name="judul_020" value="<?php echo $user_data['judul_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><input type="text" name="isi" value="<?php echo $user_data['isi'] ?>"></td>
            </tr>
            <tr>
                <td>Gamabar</td>
                <td><input type="text" name="img" value="<?php echo $user_data['img'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="text" name="tgl" value="<?php echo $user_data['tgl'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>