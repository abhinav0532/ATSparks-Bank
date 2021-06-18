<?php

$host = "localhost";
$user = "root";
$pass = "root";
$name = "curd";

$conn = mysqli_connect($host, $user, $pass, $name);

    if(!$conn){
        die("Could not connect to the Database".mysqli_connect_error());
    }

?>
