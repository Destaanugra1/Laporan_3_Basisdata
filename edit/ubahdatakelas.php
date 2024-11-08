<!DOCTYPE html>
<html>
<head>
    <title>Ubah Agenda</title>
</head>
<body>
    <h3>UBAH Agenda</h3>
    <?php
    include "../koneksi.php";
    $kode_kelas_020 = $_GET['kode_kelas_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM kelas_2359201020 WHERE kode_kelas_020='$kode_kelas_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatekelas.php" method="post">
        <table>
            <tr>
                <td>Nip guru</td>
                <td>
                    <input type="hidden" name="kode_kelas_020" value="<?php echo $user_data['kode_kelas_020'] ?>">
                    <input type="text" name="guru_nip_020" value="<?php echo $user_data['guru_nip_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input  type="text" name="kelas_020" value="<?php echo $user_data['kelas_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>