<?php 
require 'function.php';
if ( isset ($_POST["submit"] ) ) {
  
    if (tambah ($_POST) > 0 ){
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'admin.php';
    </script>
    ";
        
    }else{
       echo "<script>
        alert ('data gagal ditambahkan');
        document.location.href ='admin.php';
    </script>
    ";
    }
}

?>

<html>
    <head>
        <title>Tambah Data Karyawan</title>
    </head>
    <body>
        <h1>Tambah Data Karyawan</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="nik">NIK : </label>
                    <input type="text" name="nik" id="nik" required>
                </li>
                <li>
                    <label for="notlp">No.TLP : </label>
                    <input type="text" name="notlp" id="notlp"required>
                </li>
                <li>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email" required>
                </li>
                <li>
                    <label for="foto">Foto : </label>
                    <input type="text" name="foto" id="foto" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>

            </ul>
        </form>
    </body>
</html>