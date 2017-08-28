<?php
	session_start();
	//making connection
	$user= 'root';
	$pass= '';
	$db= 'ambuler';

	$conn= new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect");
	//Temp variables
	$email=$_POST["email"];
	$password=$_POST["password"];
	//checking connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		//login check
		$query= "SELECT id,email,password FROM login WHERE email='$email' and password='$password'";
		$result = $conn->query($query);

		if ($row=$result->fetch_assoc()) {
		    $_SESSION['id']=$row['id'];
		    header("Location: ../AmbulerHome.php");
		    }
		else {
		  ?><script> alert("Incorrect credentials"); window.history.back();</script><?php
		}
		
	}
	$conn->close();
?>
