<?php 
require 'koneksi.php';
if (isset($_GET["id"])){
 $id= $_GET["id"];
$data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id = $id");
mysqli_fetch_assoc($data);
foreach ($data as $row):
endforeach;


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data</title>
    <style>
        .eror{
            color: red;
        }
    </style>
</head>
<body>
    <form action="edit.php" method="post">
    <input type="hidden" name="id" value ="<?= $id; ?>" >
    <ul>
    <li>
        <label for="nama">Nama  :</label>
        <input type="text" name="nama" id="nama" value="<?php if (isset($_GET["nama"])){echo $_GET["nama"];}else{
            echo $row["nama"];}?>">
        <span class="eror">
            <?php if (isset($_GET["error_nama"])){ echo $_GET["error_nama"];}?>
        </span>

    </li>

    <li>
        <label for="nik">NIK    :</label>
        <input type="text" name="nik" id="nik" value="<?php if (isset($_GET["nik"])){echo $_GET["nik"];}else{
            echo $row["nik"];}?>">
        <span class="eror">
            <?php if (isset($_GET["error_nik"])){ echo $_GET["error_nik"];}?>
        </span>

    </li>

    <li>
        <label for="notlp">NO.TLP    :</label>
        <input type="text" name="notlp" id="notlp" value="<?php if (isset($_GET["notlp"])){echo $_GET["notlp"];}else{
            echo $row["notlp"];}?>">
        <span class="eror">
            <?php if (isset($_GET["error_notlp"])){ echo $_GET["error_notlp"];}?>
        </span>

    </li>

    <li>
         <label for="email">Email    :</label>
         <input type="text" name="email" id="email"  value="<?php if (isset($_GET["email"])){echo $_GET["email"];}else{
            echo $row["email"];}?>">
    <li>
         <label for="foto">Foto     :</label>
         <input type="text" name="foto" id="foto" value="<?php if (isset($_GET["foto"])){echo $_GET["foto"];}else{
            echo $row["foto"];}?>">
         <span class="eror">
            <?php if (isset($_GET["error_foto"])){ echo $_GET["error_foto"];}?>
        </span>

    </li>

    </li>
        <button type ="submit" name="submit"> Update Data</button>
    </ul>
<li>
    <a href= "index.php">Back</a>
</li>









    </form>
</body>

</html>