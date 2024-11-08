<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM galeri_2359201020 ORDER BY images DESC");
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
      <th>images</th>
      <th>action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['images']."</td>";
        echo "<td><a href='../edit/ubahgaleri.php?images=$user_data[images]'>Edit</a> | <a href='deletedatabarangelektronik.php?images=$user_data[images]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>