<?php


// Create connection
			
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}
else
			{
             echo 'database selected';
			}


		$name = $_POST['Name'];
		$lname = $_POST['LastName'];
		$email = $_POST['Email'];
		$uname = $_POST['UserName'];
		$psw = $_POST['psw'];
		$rpsw = $_POST['rpsw'];



	$sql_query = "INSERT INTO SIGN_UP (FIRST_NAME,LAST_NAME,PASSWORD,RPASSWORD,USERNAME_ID,EMAIL) VALUES ('$name','$lname','$psw','$rpsw','$uname','$email');";
	
	if ($conn->query($sql_query) === TRUE)

	{
		echo "Inserted sucessfully";
	}


	else

	{
		echo "fails";

	           	
	}


	


header("refresh:2; url= home.php");
mysqli_close($conn);

	?>