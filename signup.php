<?php
require "./config.php";

if (isset($_POST['regmit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];
    $varif = rand(100000, 999999);
    $enc = sha1(md5($pass));


    $insert = mysqli_query($conn, "INSERT INTO users (userName, userPassword, varifCode) VALUES('$user', '$enc', '$varif')");

    $sql = mysqli_query($conn,"SELECT Id FROM users");

    if(mysqli_num_rows($sql)){
        while($row = mysqli_fetch_assoc($sql)){
            $confuser = $row['Id'];
        }
    }

    if($insert){
        header("Location: ./pages/confirm.php?user=$confuser");
    }else{
        $err = "error, not registered";
    }
}else{
    header("Location: register.php?err=true");
}
