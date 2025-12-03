<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aswathy";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	
	$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO users(name,email,username,password) VALUES ('$name', '$email','$uname','$hashed_pass')";


	if($conn->query($sql) === TRUE)
	{
		echo "Registeration successful! <a href='login.php'>Login here..</a>";
	
	}else{
		echo "Error: " . $conn->error;
	
	}
}
$conn->close();
?>

		
	


<form method="POST" action="">
	<h2>Register Here</h2>
	Name of the User: <input type="text" name="name" required><br><br>
	E-mail:<input type="email" name="email" required><br><br>
	Username:<input type="text" name="username" required><br><br>
	Password:<input type="password" name="password" required><br><br>
	<button type="submit">Register</button>
</form>
	