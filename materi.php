<?php  

include_once('koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM materi_2359201020 ORDER BY id_020   DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <a href="tambahdatabarangelektronik.php">Tambah Data Barang Elektronik</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>ID</th>
      <th>Tanggal</th>
      <th>Kelas</th>
      <th>Nip Guru</th>
      <th>Wali kelas</th>
      <th>Judul</th>
      <th>Sinopsis</th>
      <th>File</th>
      <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_020']."</td>";
        echo "<td>".$user_data['tgl_020']."</td>";
        echo "<td>".$user_data['kelas_kode_kelas_020']."</td>";
        echo "<td>".$user_data['guru_nip_020']."</td>";
        echo "<td>".$user_data['kelas_guru_nip_020']."</td>";
        echo "<td>".$user_data['judu_020']."</td>";
        echo "<td>".$user_data['sinopsis_020']."</td>";
        echo "<td>".$user_data['file_2_020']."</td>";
        echo "<td><a href='editdatabarangelektronik.php?id_020=$user_data[id_020]'>Edit</a> | <a href='deletedatabarangelektronik.php?id_020=$user_data[id_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="index.php">Kembali ke menu utama</a>
</body>
</html>