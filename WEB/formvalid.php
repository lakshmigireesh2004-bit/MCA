<html>
<head>
	<title>FORM VALIDATION</title>
</head>
<body>
	<h2 align="center">FORM VALIDATION</h2>
	<form method="POST" action="#">
		<table border="1" align="center" cellpadding="10">
			<tr>
				<th>Name</th>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<th>Mobile</th>
				<td><input type="text" name="mob"></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<th colspan="2"><input type="submit" name="submit" value="Submit">
				</th>
			</tr>
		</table>
	</form>
<?php
$con = mysqli_connect("localhost","root","","cek");

if(!$con)
{
	die("Connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$mob = $_POST['mob'];
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	if($name == "" || $email == "" || $mob == "" ||$user == "" || $password == "")
	{
		echo "<script>alert('Please fill all fields!');</script>";
	}
	elseif(!preg_match("/^[a-zA-Z]*$/",$name))
	{
		echo "<script>alert('Enter a valid name!');</script>";
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "<script>alert('Enter a valid email address!');</script>";
	}
	elseif(!preg_match('/^[0-9]{10}$/',$mob))
	{
		echo "<script>alert('Enter a valid 10-digit mobile number!');</script>";
	}
	elseif(strlen($password)<8)
	{
		echo "<script>alert('Password must have at least 8 chartacters!');</script>";
	}
	else
	{
		$query = "INSERT INTO form(name,email,mob,password,user) VALUES ('$name','$email','$mob','$password','$user')";
		if(mysqli_query($con,$query))
		{
			echo "<script>alert('Record inserted successfully!');</script>";
		}
		else
		{
			echo "<script>alert('Error inserting record!');</script>";
		}
	}
}
mysqli_close($con);
?>
</body>
</html>