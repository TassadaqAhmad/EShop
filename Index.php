<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization In PHP</title>
</head>
<body>
    <?php
    $name = "Ahmad";
    $pwd = "123";
    if(isset($_POST['logmit'])){
        if($name == $_POST['usernm'] && $pwd == $_POST['userpw']){
            $usernm = $_POST['usernm'];
            $userpw = $_POST['userpw'];
            $_SESSION['login'] = $usernm;
        }
    }

    if(!isset($_SESSION['login'])){
        include "login.php";
    }else{
        include "pages/home.php";
    }
    
    ?>

</body>
</html>