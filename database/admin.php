<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM admin_2359201020 ORDER BY user_id_020  DESC");
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
      <th>User id</th>
      <th>Password</th>
      <th>Nama</th>
      <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['user_id_020']."</td>";
        echo "<td>".$user_data['password_2_020']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td><a href='../edit/ubahadmin.php?user_id_020=$user_data[user_id_020]'>Edit</a> | <a href='deletedatabarangelektronik.php?user_id_020=$user_data[user_id_020]'>Delete</a></td></tr>";        
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>