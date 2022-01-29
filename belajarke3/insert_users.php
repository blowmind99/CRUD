<?php
require 'koneksi.php';
$temp='';
$temp_arr= [];

if (isset($_POST["signup"])){
    $temp_arr[0]['user']= 'username';

    $temp_arr[0]['value']= strtolower(htmlspecialchars($_POST['username']));
    $temp_arr[1]['value']= mysqli_real_escape_string($conn,htmlspecialchars($_POST["password"]));
    $temp_arr[2]['value']= mysqli_real_escape_string($conn,htmlspecialchars($_POST["password2"]));
    $result= mysqli_query($conn, "SELECT username FROM users WHERE username = '".$temp_arr[0]['value']."'");
   
    if (!preg_match('/^[a-zA-Z0-9]+$/', $temp_arr[0]["value"])){
        $temp_arr[0]["error"]= "USERNAME HANYA BOLEH HURUF DAN ANGKA";
    }else{
        if (mysqli_fetch_assoc($result)){
            $temp_arr[0]["error"]= "USERNAME SUDAH TERDAFTAR";
        }
    }
    if ($temp_arr[1]['value'] !== $temp_arr[2]['value']){
        $temp_arr[1]["error"] = "Password tidak sama";
    }


}
$has_error = false;
for ($i=0; $i < count($temp_arr) ; $i++) { 
    # code...
    if (!empty($temp_arr[$i]["error"])) {
        $has_error = true;
    }
}
$temp_arr[1]['value'] = password_hash($temp_arr[1]['value'], PASSWORD_DEFAULT);
if ($has_error == true) {
    
        # code...

        $temp= $temp. ''.$temp_arr[0]['user']. "=". $temp_arr[0]['value']. "&&error_". $temp_arr[0]['user']. "=". $temp_arr[0]["error"]. "&&error_password". "=". $temp_arr[1]["error"];
        header ("Location: register.php". "?". $temp);

}else{
    mysqli_query($conn, "INSERT INTO users VALUES('', '".$temp_arr[0]['value']."','".$temp_arr[1]['value']."')");
    echo "<script>
    
        alert('Sign Up Succes')
        document.location.href = 'register.php';
    
    </script>";
}

?>