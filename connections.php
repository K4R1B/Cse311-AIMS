<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "aicm";

$connect = mysqli_connect($host, $user, $pass, $name);


if ($connect) {
    // echo ("Connection Successful");
} else {
    echo ("Connection Failled");

}

?>