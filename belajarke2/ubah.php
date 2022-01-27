<?php 
require 'function.php';
$id = $_GET["id"];


$krw = query("SELECT * FROM karyawan WHERE id = $id")[0];
if ( isset ($_POST["submit"] ) ) {
  

    if (ubah ($_POST) > 0 ){
        print_r(ubah($_POST));
        
        echo "
        <script>
        
        alert('". ubah ($_POST) ."');
        document.location.href = 'admin.php';
    </script>
    ";
        
    }else{
       echo "<script>
        alert ('". ubah ($_POST). "');
        document.location.href ='admin.php';
    </script>
    ";
    }
}
?>

<html>
    <head>
        <title>Ubah Data Karyawan</title>
    </head>
    <body>
        <h1>Ubah Data Karyawan</h1>
        <form action="" method="post">
            <input type= "hidden" name= "id" value = "<?= $krw["id"]; ?>">
                   
            <ul>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" required
                    value ="<?= $krw['nama']; ?>">
                </li>
                <li>
                    <label for="nik">NIK : </label>
                    <input type="text" name="nik" id="nik"  required value ="<?= $krw['nik']; ?>">
                </li>
                <li>
                    <label for="notlp">No.TLP : </label>
                    <input type="text" name="notlp" id="notlp" required value ="<?= $krw['notlp']; ?>">
                </li>
                <li>
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email"  required value ="<?= $krw['email']; ?>">
                </li>
                <li>
                    <label for="foto">Foto : </label>
                    <input type="text" name="foto" id="foto" required value ="<?= $krw['foto']; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>

            </ul>
        </form>
    </body>
</html>