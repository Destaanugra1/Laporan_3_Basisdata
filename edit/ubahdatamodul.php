<!DOCTYPE html>
<html>
<head>
    <title>Ubah Modul</title>
</head>
<body>
    <h3>UBAH Modul</h3>
    <?php
    include "../koneksi.php";
    $id_020 = $_GET['id_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM modul_2359201020 WHERE id_020='$id_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatemodule.php" method="post">
        <table>
            <tr>
                <td>Menu</td>
                <td>
                    <input type="hidden" name="id_020" value="<?php echo $user_data['id_020'] ?>">
                    <input type="text" name="menu_020" value="<?php echo $user_data['menu_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Link</td>
                <td><input type="text" name="link_020" value="<?php echo $user_data['link_020'] ?>"></td>
            </tr>
            <tr>
                <td>Urutan</td>
                <td><input type="text" name="urut" value="<?php echo $user_data['urut'] ?>"></td>
            </tr>
                <td>Isi</td>
                <td><input type="text" name="isi" value="<?php echo $user_data['isi'] ?>"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>