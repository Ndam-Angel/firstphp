<?php
include 'db_connection.php';
if (isset($_POST['create_account'])) {
$matricule = $_POST['matr'];   
$email = $_POST['email'];   
$altEmail = $_POST['altEmail'];   
$contact = $_POST['contact'];   
$password = $_POST['password'];   
$cpassword = $_POST['confirm_password'];  

if (empty($matricule)) {
    $error_message = "Matriculke is require";
}
elseif (empty($email)) {
    $error_message = "Email is require";
}
else{

}

}