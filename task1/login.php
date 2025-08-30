<? php
if(isset($_POST['Login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(empty($email) || empty($password)){
		echo"Please fill in all fields";
	}
	elseif($email===$valid email && $password===valid password){
		echo "succesful, login.Welcome!!";
	}
	else {
		$error= "Invalid email or password";
	}
}




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="login.css" rel="stylesheet">
</head>
<body>
	<form>
		<h2>Login</h2>
		<input type="institutional email address" placeholder="email:" required>
		<input type="password" placeholder="password:" required>
		<button type=submit>Login</button>
		<p> Don't have an account?
			<a href="index.php">Register here</a></p>
	</form>

</body>
</html>