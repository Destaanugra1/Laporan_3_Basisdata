<?php  

include_once('koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM guru_2359201020 ORDER BY nip_020  DESC");
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
      <th>nip</th>
      <th>nama guru</th>
      <th>tempat Lahir</th>
      <th>Tanggal lahir</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Alamat</th>
      <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nip_020']."</td>";
        echo "<td>".$user_data['nama_020']."</td>";
        echo "<td>".$user_data['tempat_lahir_020']."</td>";
        echo "<td>".$user_data['tgl_lahir_020']."</td>";
        echo "<td>".$user_data['gender_020']."</td>";
        echo "<td>".$user_data['agama_020']."</td>";
        echo "<td>".$user_data['alamat_020']."</td>";
        echo "<td><a href='editdatabarangelektronik.php?nip_020=$user_data[nip_020]'>Edit</a> | <a href='deletedatabarangelektronik.php?nip_020=$user_data[nip_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="index.php">Kembali ke menu utama</a>
</body>
</html>