<?php
require 'koneksi.php';
$temp= '';
$temp_arr=[];
if (isset($_POST["login"])){

$temp_arr[0]['user']= 'username';

$temp_arr[0]['value']= strtolower(htmlspecialchars($_POST['username']));
$temp_arr[1]['value']= mysqli_real_escape_string($conn,htmlspecialchars($_POST["password"]));

$result= mysqli_query($conn, "SELECT * FROM users WHERE username = '".$temp_arr[0]['value']."'");
        //cek username
    if( mysqli_num_rows($result) == 1){
        
        //cek password
        $row= mysqli_fetch_assoc($result);
        if (password_verify($temp_arr[1]['value'], $row['password'])) {
            # code...
            header ("Location:index.php");
            
        }

    }

       

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <ul>
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </li>
        <br>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
        </ul>





    </form>
</body>
</html>