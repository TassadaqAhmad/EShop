<?php

$conn = mysqli_connect("localhost","root","","eshop");

if(!$conn){
    echo "database not connect" . die($conn);
}

?>