<!DOCTYPE html>
<html>
<head>
    <title>Ubah Materi</title>
</head>
<body>
    <h3>UBAH Materi</h3>
    <?php
    include "../koneksi.php";
    $id_020 = $_GET['id_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM materi_2359201020 WHERE id_020='$id_020'");
    $nomor = 1;
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/updatemateri.php" method="post">
        <table>
            <tr>
                <td>Tanggal</td>
                <td>
                    <input type="hidden" name="id_020" value="<?php echo $user_data['id_020'] ?>">
                    <input type="text" name="tgl_020" value="<?php echo $user_data['tgl_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas_kode_kelas_020" value="<?php echo $user_data['kelas_kode_kelas_020'] ?>"></td>
            </tr>
            <tr>
                <td>Guru nip</td>
                <td><input type="text" name="guru_nip_020" value="<?php echo $user_data['guru_nip_020'] ?>"></td>
            </tr>
            <tr>
                <td>Kelas guru</td>
                <td><input type="text" name="kelas_guru_nip_020" value="<?php echo $user_data['kelas_guru_nip_020'] ?>"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judu_020" value="<?php echo $user_data['judu_020'] ?>"></td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td><input type="text" name="sinopsis_020" value="<?php echo $user_data['sinopsis_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>