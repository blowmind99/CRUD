<?php
require 'koneksi.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        label {
            display: block;
        }
        .eror{color: red;}
    </style>
</head>
<body>
    <form action="insert_users.php" method="post">
    <ul>
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value= 
            "<?php if (isset($_GET['username'])){
                echo $_GET['username'];
            } ?>" required>
            <span class="eror"><?php if (isset($_GET['error_username'])){
                echo $_GET['error_username'];

                }
             ?></span>
        </li>
        <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"  value= 
            "<?php if (isset($_POST['signup'])){
                echo "ADA";
            } ?>"required>
            <span class="eror"><?php if (isset($_GET['error_password'])){
                echo $_GET['error_password'];

                }
             ?></span>
        </li>
        <li>
            <label for="password2">Confrim Password</label>
            <input type="password" name="password2" id="password2"value= 
            "<?php if (isset($_POST['signup'])){
                echo "ada";
            } ?>" required>
        </li>
        <li>
            <button type="submit" name="signup">Sign Up</button>
        </li>





    </ul>





    </form>
</body>
</html>