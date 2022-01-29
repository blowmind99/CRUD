<?php 
require 'koneksi.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <style>
        .eror {color:red}
    </style>
</head>
<body>

    <form action="insert.php" method="post">
    <ul>
    <li>
        <label for="nama">Nama  :</label>
        <input type="text" name="nama" id="nama" value= "<?php if (isset($_GET["nama"])){
             echo $_GET["nama"];
        }
        ?>" required>
        <span class="eror"><?php if (isset($_GET['error_nama'])){
         echo $_GET['error_nama'];

        }
        ?></span>

    </li>

    <li>
        <label for="nik">NIK    :</label>
        <input type="text" max="6" name="nik" id="nik" value="<?php 
        if (isset($_GET["nik"]) ) {
            echo $_GET["nik"];
         }
        ?>" required>
        <span class="eror"><?php if (isset($_GET['error_nik'])){
        echo $_GET["error_nik"];

        }?></span>

    </li>

    <li>
        <label for="notlp">NO.TLP    :</label>
        <input type="text" max= "13" name="notlp" id="notlp"  value="<?php 
        if (isset($_GET["notlp"]) ) {
            echo $_GET["notlp"];
         }
        ?>"required>
        <span class="eror"><?php if (isset($_GET['error_notlp'])){
         echo $_GET['error_notlp'];

        }
        ?></span>

    </li>

    <li>
         <label for="email">Email    :</label>
         <input type="email" name="email" id="email" placeholder= "example@gmail.com" value = "<?php if (isset($_GET["email"])){
             echo $_GET['email'];} ?>"required>
    <li>
         <label for="foto">Foto     :</label>
         <input type="text" name="foto" id="foto" value = "<?php if (isset($_GET["foto"])){
            echo  $_GET['foto'];} ?>"required>
         <span class="eror"> <?php if (isset($_GET['error_foto'])){
         echo $_GET['error_foto'];

        }?> </span>

    </li>

    </li>
        <button type ="submit" name="submit"> Tambah Data</button>
    </ul>
<li>
    <a href= "index.php">Back</a>
</li>

    </form>
    
</html>