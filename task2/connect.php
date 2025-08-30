<? php

if(isset($_POST['payment'])){

$name= $POST['Name'];
$amount= $POST['Amount'];
$email= $POST['Email'];
$gender= $POST['Gender'];
if(empty($Name)||empty($Amount)|| empty($Email)||empty($Gender)){
    echo "please fill in all fields";
}
elseif($email===$valid) {
    echo "Succesful payment! .welcome $Name";
}
// database-connection

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "info";
$connec =  new mysqli($server_name,$user_name,$pasword,$db_name);
if (!$connec){
    die("connetion failed:" . mysqli_connect_error());
}else{
    echo "connected successfully";
}
}

?>