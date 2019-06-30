<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//get values from form in login.php file
	$username=$_POST["user"];
	$password=$_POST["pass"];

	//to prevent mysql injection
	/*$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST'password');*/

	//connect to the server and database
	$con=mysqli_connect("localhost", "root", "","jagath");
	if(!$con)
		die(mysqli_error($con));

	//query the database for user
	$query="select * from users where firstname='$username' and password='$password'";
	$r=mysqli_query($con,$query);
	if(mysqli_num_rows($r)>0)
	{
		$row=mysqli_fetch_array($r);
		echo '<script>alert("valid")</script>';
		header("Location:split.html");
	}
	else
	{
		echo "invalid credentials";
	}
	mysqli_close($con);
	/*$con=new PDO("mysql:host=localhost;dbname=jagath","root","");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$q="select * from vendor_table where username='$username' and password='$password'";

	if($con->query($q) === TRUE)
		echo "logged in correctly";
	else
		echo "incorrect login";
	$con->close();*/
	
?>
</body>
</html>
