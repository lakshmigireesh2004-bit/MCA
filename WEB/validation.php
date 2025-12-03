<html>
<head>
	<title>Form Validation</title>
</head>
<style>
	table
	{
		background-color: white;
		margin-left: auto;
		margin-right: auto;
		margin-top: 1em;
		padding: 1em;
		box-shadow: 0 4px  10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);
	}
	tr,td,th
	{
		padding: 1em;
		text-align: center;
	}
	h2
	{
		text-align: center;
		margin-top: 2em;
		background-color: black;
		color: white;
	}
</style>
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
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password"></td>
			</tr>
			<tr class="center">
				<th colspan="2"><input type="submit" name="submit" value="Submit">
				</th>
			</tr>
		</table>
	</form>
<?php
	$con = mysqli_connect("localhost","root","","Register");

	if(!$con)
	{
		die("Connection failed:".mysqli_connect_error());
	}
	if(isset($_POST['submit']))
	{
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$mob = $_POST['mob'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($_POST['fname'] == "")
		{
			echo "<script>alert('Enter First Name !!')</script>";
		}
		else if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			echo "<script>alert('Enter Your Name !!')</script>";
		}
		else if($_POST['email'] == "")
		{
			echo "<script>alert('Enter Email !!')</script>";
		}
		else if(!preg_match('/^[0-9]{10}+$/',$_POST['mob']))
		{
			echo "<script>alert('Enter Valid Mobile Number !!')</script>";	
		}
		else if($_POST['username'] == "")
		{
			echo "<script>alert('Enter User Name !!')</script>";
		}
		elseif($_POST['password'] == "")
		{
			echo "<script>alert('Enter Password !!')</script>";
		}
		else if(strlen($_POST['password']) < 8)
		{
			echo "<script>alert('Your Password Must Contain At Least 8 Characters !!')</script>";
		}
		else if(!preg_match("#[0-9]+#",$password))
		{
			echo "<script>alert('Your Password Must Contain At Least 1 Number !!')</script>";
		}
		else if(!preg_match("#[A-Z]+#",$password))
		{
			echo "<script>alert('Your Password Must Contain At Least 1 Capital letter !!')</script>";
		}
		else if(!preg_match("#[a-z]+#",$password))
		{
			echo "<script>alert('Your Password Must Contain At Least 1 Lowercase Letter !!')</script>";
		}
		else
		{
			$query = "insert into form values('$name','$email','$mob','$username','$password')";
			if(mysqli_query($con,$query))
			{
				echo "success";
			}
			else
			{
				echo "error".$query.mysqli_error($con);
			}
		}
	}
?>
</body>
</html>