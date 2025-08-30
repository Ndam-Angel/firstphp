<?php

$system_name = 'John Deo';
if (isset($_POST['submit'])) { //gets the input from user and shows it
  //  echo "<script>alert('Hi') </script>";
  $name = $_POST['name'];
  $email = $_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
  if (empty($name) || empty($email)) {
    echo "<script>alert('Please,enter atleast your name and email')</script>";
}
elseif ($system_name === $name) {
  echo "Hello, you've login into the system";
}
  else
     {
      echo "<script>alert('Hi $name . Your email is $email will you want to see the remaining details?')</script>";
     }
}
// Conditional statement
 //$score=90;
 //if($score>70){
   //echo "You have an A-grade";
 //}
 //elseif($score>60){
  // echo"You have a B-grade";
 //}
 //elseif($score>50){
   //echo "You have a C-grade";
 //}
 //else{
   //echo "You have failed";
 //}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="practice.php" method="post">
   name:<input type="text" name="name"><br>
   email:<input type="email" name="email"><br>
contact:<input type="Tel" name ="contact"><br>
address:<input type="text" name="address"><br>
    <button type="submit" name="submit">submit</button>
  </form>
</body>
</html>