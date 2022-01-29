<?php 
require 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM karyawan");
mysqli_fetch_assoc($data);
foreach($data as $row):
endforeach;
$id = $row["id"];




if (isset($_POST["submit"]) ) {
    $temp_arr[0]['nama']= 'nama';
    $temp_arr[1]['nama']= 'nik';
    $temp_arr[2]['nama']= 'notlp';
    $temp_arr[3]['nama']= 'email';
    $temp_arr[4]['nama']= 'foto';

    $temp_arr[0]['value']= htmlspecialchars($_POST["nama"]);
    $temp_arr[1]['value']= htmlspecialchars($_POST["nik"]);
    $temp_arr[2]['value']= htmlspecialchars($_POST["notlp"]);
    $temp_arr[3]['value']= htmlspecialchars($_POST["email"]);
    $temp_arr[4]['value']= htmlspecialchars($_POST["foto"]);

    if (!preg_match('/^[\p{L} ]+$/u',  $temp_arr[0]['value'])) {
        $temp_arr[0]['error'] = "Format Nama salah";
        
    }else {
        $temp_arr[0]['error'] = "";

    }
    
   
    if (!is_numeric($temp_arr[1]['value'])) {
        $temp_arr[1]['error'] = "Format NIK bukan angka";
      
        
    }else{
        
        if(strlen($temp_arr[1]['value'])<6 or
           strlen ($temp_arr[1]['value'])>6) {
           
            $temp_arr[1]["error"]= "NIK tidak boleh lebih / kurang dari 6 angka";
    
        }else{
            
        }
       
    }

    if (!is_numeric( $temp_arr[2]['value'])) {
        $temp_arr[2]['error'] = "Format No Telp bukan angka";
       
        
    }else {
        if (strlen($temp_arr[2]['value']) < 12 or
            strlen ($temp_arr[2]['value']) > 13) {
            $temp_arr[2]['error'] = 'NO TLP Minimal 12 angka dan Maksimal 13 angka';
          }
    }
    

    if(!preg_match("/.jpg/", $temp_arr[4]['value'])and
       !preg_match("/.png/", $temp_arr[4]['value'])){
        $tampung= $temp_arr[4]['value'];
        $temp_arr[4]["error"]=substr($tampung, -0). " ". "bukan format yang valid". ", ". "format foto hanya boleh .jpg dan .png";
        

    }else{
        if (strlen($temp_arr[4]["value"]<3)){
                $temp_arr[4]['error']= "SILAHKAN MASUKAN NAMA FOTO CONTOH: NAMA_.PNG";
    }else{
        $temp_arr[4]['error']='';
    }
    }


}
    

$has_error = false;
for ($i=0; $i < count($temp_arr) ; $i++) { 
    # code...
    if (!empty($temp_arr[$i]["error"])) {
        $has_error = true;
    }
}

if ($has_error == true) {
    for ($i=0; $i < count($temp_arr) ; $i++) { 
        # code...
        $temp = $temp .''.$temp_arr[$i]['nama'].'='.$temp_arr[$i]['value'].'&&error_'.$temp_arr[$i]['nama'].'='.$temp_arr[$i]['error']. "&&";
    }
    # code...
    header ("Location:update.php"."?". $temp);

} else {
    # code...
    mysqli_query($conn, "UPDATE karyawan SET
    nama = '". $temp_arr[0]['value']."',
    nik = '". $temp_arr[1]['value']."',
    notlp = '". $temp_arr[2]['value']."',
    email = '". $temp_arr[3]['value']."',
    foto = '". $temp_arr[4]['value']."'
    WHERE id = $id");
header ("Location:index.php");

}
?>