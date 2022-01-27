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
    <h1> Daftar Karyawan </h1>
    <table border="1" cellpadding="10" cellspacing="0">

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
        <td><?php echo $row["no.tlp"]; ?></td>
        <td>
            <a href="">Edit</a>
            <a href=""> Delete</a>

        </td>
    </tr>
         <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>