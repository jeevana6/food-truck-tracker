<html>
<head></head>
<body>
<?php
	$firstname=$_POST["first_name"];
	$lastname=$_POST["last_name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$phone_number=$_POST["phone_number"];
	$con=mysqli_connect("localhost", "root", "","jagath");
	if(!$con)
		die(mysqli_error($con));

	//query the database for user
	$query="INSERT INTO users (firstname, lastname, email,password,phone_number)
    VALUES ('$firstname', '$lastname', '$email','$password','$phone_number')";
	if(mysqli_query($con,$query))
	{
		
		echo '<script>alert("inserted successfully")</script>';
		header("Location:login.html");
		
	}
	else
	{
		echo '<script>alert("failed to insert")</script>';
	}
	
	mysqli_close($con);
    
	/*try
	{
	$con = new PDO("mysql:host=localhost;dbname=jagath","root", "");
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (firstname, lastname, email,password,phone_number)
    VALUES ('$first_name', '$last_name', '$email','$password','$phone_number')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;*/
?>
</body>
</html>