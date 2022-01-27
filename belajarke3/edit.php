<?php 
require 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM karyawan ");
mysqli_fetch_assoc($data);
foreach($data as $da):
endforeach;
$id = $da["id"];



if (isset($_POST["submit"]) ) {
    $nama = htmlspecialchars($_POST["nama"]);
    $nik = htmlspecialchars($_POST["nik"]);
    $notlp= htmlspecialchars($_POST["nik"]);
    $email = htmlspecialchars($_POST["nik"]);
    $foto = htmlspecialchars($_POST["nik"]);
    var_dump($nama);
    var_dump($nik);
    var_dump($notlp);
    var_dump($email);
    var_dump($foto);
    if ($nama == ""){
        echo "data gagal diupdate";
    }else {
        $query = "UPDATE karyawan SET
        nama = '$nama',
        nik = '$nik',
        notlp = '$notlp',
        email = '$email',
        foto = '$foto'
        WHERE id = $id
        ";
    mysqli_query($conn, $query);
    var_dump(mysqli_affected_rows($conn));
    }

 }
 header("Location: index.php");
?>