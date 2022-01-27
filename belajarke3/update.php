<?php 
require 'koneksi.php';
$id= $_GET["id"];
$data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id = $id");
mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data</title>
</head>
<body>
<?php foreach ($data as $d) : ?>
    <form action="edit.php" method="post">
    <input type="hidden" name="id" value ="<?php echo $d["id"]; ?>" >
    <ul>
    <li>
        <label for="nama">Nama  :</label>
        <input type="text" name ="nama" id="nama" value = "<?php echo $d["nama"]; ?>">

    </li>

    <li>
        <label for="nik">NIK    :</label>
        <input type="text" name="nik" id="nik" value= "<?php echo $d["nik"]; ?>" >

    </li>

    <li>
        <label for="notlp">NO.TLP    :</label>
        <input type="text" name="notlp" id="notlp" value= "<?php echo $d["notlp"]; ?>">

    </li>

    <li>
         <label for="email">Email    :</label>
         <input type="text" name="email" id="email"  value= "<?php echo $d["email"]; ?>" >
    <li>
         <label for="foto">Foto     :</label>
         <input type="text" name="foto" id="foto" value= "<?php echo $d["foto"]; ?>">

    </li>

    </li>
        <button type ="submit" name="submit"> Update Data</button>
    </ul>
<li>
    <a href= "index.php">Back</a>
</li>









    </form>
    <?php endforeach; ?>
</html>