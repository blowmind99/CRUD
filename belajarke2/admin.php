<?php
require 'function.php';
// ambil data dari tabel / query data tabel
$karyawan = query("SELECT * FROM karyawan");

?>

<html>
    <head>
    <title>Halaman Admin</title>
    </head>

<body>
    <style>
        div.a {
            text-align: center;
        }
    </style>
    <div class="a">
    <h1> Daftar Karyawan </h1>
    </div>
    <table align="center" border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No.Tlp</th>
        <th>Aksi</th>
</tr>
    <?php $i=1; ?>
    <?php foreach ($karyawan as $row) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        
        <td> <img src="img/<?php echo $row["foto"] ?>" width="50"> </td>
        <td><?php echo $row["nik"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["notlp"]; ?></td>
        <td>
            <a href="ubah.php?id=<?php echo $row["id"];?>">Edit</a>
            <a href="hapus.php?id=<?php echo $row["id"];?>" onclick="
            return confirm ('Are You Sure?')"; >Delete</a>

        </td>
    </tr>
         <?php $i++; ?>     
        <?php endforeach; ?>
    </table>
    <br></br>
    <table align="center">
    <tr> 
        <td>
            <a href = "tambah.php"><h3>Tambah Data Karyawan</h3></a>
        </td>
    </tr>
    </table>
    
</body>
</html>