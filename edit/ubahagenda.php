<!DOCTYPE html>
<html>
<head>
    <title>Ubah Agenda</title>
</head>
<body>
    <h3>UBAH Agenda</h3>
    <?php
    include "../koneksi.php";
    $id_020 = $_GET['id_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM agenda_2359201020 WHERE id_020='$id_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updateagenda.php" method="post">
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
                <td><input  type="text" name="isi_020" value="<?php echo $user_data['isi_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>