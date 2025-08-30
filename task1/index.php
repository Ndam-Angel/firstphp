
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
    <h1>FLOAT EXCELLENCE</h1>
    <p>Enter your personal details to create an account</p>
    </header>


<div class="container">
    <form action="function.php" method="POST">
    <label for="matriculation number">Matriculation number:</label><br>
    <input type="text" id="matriculation number" name="matr"><br><br>
<label for="email">institutional email address:</label><br>
    <input type="email" id="email" name="email"><br><br>
<label for="altemail">Alternative email:</label><br>
    <input type="email" id="altemail" name="altEmail"><br><br>
<label for="contact">Telephone number:</label><br>
    <input type="tel" id="contact" name="contact"><br><br>
<label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
<label for="confirm_password">confirm password:</label><br>
    <input type="password" id="confirm_password" name="confirm_password"><br><br>
    <button type=" Create Account" name="create_account">Create Account</button>
    <p style="text-align: center; margin-top: 10px; font-size: 14px;">
     Already have an account? <a href="login.php">login</a>
    </p>

</form>
</div>
<footer>


    
</body>
</html>