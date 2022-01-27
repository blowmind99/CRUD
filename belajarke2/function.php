<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); 

function query($query){
    global $conn;
        $result = mysqli_query($conn, $query);
        $rows= [];
        while ($row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;

}
function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nik =  htmlspecialchars($data["nik"]);
    $notlp= htmlspecialchars($data["notlp"]);
    $email =htmlspecialchars($data["email"]);
    $foto = htmlspecialchars($data["foto"]);
    $querry = "INSERT INTO karyawan
                VALUES 
                ('','$nama', '$nik', '$notlp', 
                '$email', '$foto' ) ";
    mysqli_query($conn, $querry);
    return mysqli_affected_rows($conn);
    
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id ");
    return mysqli_affected_rows($conn);
}



function ubah($data){

global $conn;
$id = $data["id"];
$nama = htmlspecialchars($data["nama"]);
$nik =  htmlspecialchars($data["nik"]);
$notlp= htmlspecialchars($data["notlp"]);
$email =htmlspecialchars($data["email"]);
$foto = htmlspecialchars($data["foto"]);
$query = "UPDATE karyawan SET
            nama = '$nama',
            nik = '$nik',
            notlp = '$notlp',
            email = '$email',
            foto = '$foto'
            WHERE id = $id 
            ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);

}

?>