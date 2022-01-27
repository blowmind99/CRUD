<?php
require 'koneksi.php';
$id = $_GET["id"];
var_dump($id);
if ($id > 0 ){
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
  header("Location: index.php");
}else{
    echo "DATA GAGAL DIHAPUS";
}


?>
