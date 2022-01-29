<?php 
require 'koneksi.php';
($result = mysqli_query ($conn, "SELECT * FROM karyawan"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>DATA KARYAWAN</h1>
    <table border="1" cellpading="10" cellspacing="0">
<tr>
                    <th>NO</th>
                    <th>FOTO</th>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>NO.TLP</th>
                    <th>EMAIL</th>
                    <th>AKSI</th>
</tr>
<?php $i=1; ?>
<?php foreach ($result as $row) : ?>
        <tr>
            <td>  <?php echo $i; ?> </td>
            <td><img src="img/<?php echo $row["foto"] ?>" width="50"> </td>
            <td> <?php echo $row["nama"];?> </td>
            <td> <?php echo $row["nik"]; ?> </td>
            <td><?php echo $row["notlp"]; ?> </td>
            <td><?php echo $row["email"]; ?> </td>
            <td><?php echo $row["foto"]; ?> </td>
            <td>
                <a href ="update.php?id=<?php echo $row["id"];?>">Ubah</a>
                <a href= "hapus.php?id=<?php echo $row["id"]; ?>" onclick="
            return confirm ('Are You Sure?')"; >Delete</a>
            </td>
        </tr>
 <?php $i++; ?>
<?php endforeach; ?>
 </table>
 <table align = "center">

 <td> 
     <a href ="tambah.php">Tambah Data Karyawan</a>
 </td>

 </table>
</body>
</html>
