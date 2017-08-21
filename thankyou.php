<?php

require 'connection.php';
$conn    = Connect();
$name="";$email="";$add="";$city="";$state="";$feedback="";

	if(isset($_POST['name']))
	{
		$name    = $conn->real_escape_string($_POST['name']);
	}
	if(isset($_POST['email']))
	{
		$email    = $conn->real_escape_string($_POST['email']);
	}
	if(isset($_POST['add']))
	{
		$add    = $conn->real_escape_string($_POST['add']);
	}
	if(isset($_POST['city']))
	{
		$city   = $conn->real_escape_string($_POST['city']);
	}
	if(isset($_POST['state']))
	{
		$state = $conn->real_escape_string($_POST['state']);
	}
	if(isset($_POST['feedback']))
	{
		$feedback = $conn->real_escape_string($_POST['feedback']);
	}

	$query   = "INSERT into student (name,email,address,city,state,feedback) VALUES('" . $name . "','" . $email . "','" . $add . "','" . $city . "','" . $state . "','" . $feedback . "')";
	$success = $conn->query($query);

	if(!$success)
	{
		die("Couldn't enter data: ".$conn->error);
	}
	else
	{
		if($success)
		{
			echo "<script type='text/javascript'>alert('Successful')</script>";
			header("Location: http://localhost/week5/update.php");
		}
	}

$conn->close();

?>