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

}
?>





















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif; background: white; padding: 20px; }
            form {
                max-width: 400px; background: lightblue; padding: 20px; border-radius: 10px; margin: auto; margin-top: 10px; }
                input, button {
                    width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid white; }
                    button {
                        background: white; color: lightblue; border: none; cursor: pointer; }
        header {
            border: none;
            border-bottom: 2px solid white;
            margin: 20px 0;
        }
        .gender-options {
            display: flex;
            gap: 10px;
        }

                    
                        
    </style>
</head>
<body>
   
    <div class="Form-group">
    <form action="payment.php" method="post">
        ,<header>
         <h2 style="text-align: center;">STUDENT PAYMENT FORM</h2>
         </header>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
             <label for="amount">Amount:</label>
        <input type="number" name="number" required>
             <label for="email">Email:</label>
        <input type="email" name="email" required>
        <div class="gender-options">
        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="Male">Male:</label><br>
        <input type="radio" id="female" name="gender" value="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
         </div>
         <button type="submit">Proceed to payment</button>
       
        
        </div>
       
    </form>
    
</body>
</html>