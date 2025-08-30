<?php
$server_name = "localhost";
$user_name = "root";
$password  = "";
$db_name = "first_db";

$connec = mysqli_connect ($server_name, $user_name, $password, $db_name);

if (!$connec){
    die("Connection Failed:" . mysqli_connect_error());
}

// echo "Connected Successfully";

