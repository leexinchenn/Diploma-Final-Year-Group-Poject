<?php

//database connection
$conn = new mysqli('localhost','root','','bleufonce')or die('fail to connect');
session_start();
	$fullname = $_POST['fullname'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$username = $_SESSION["username"];
	
	$sql = mysqli_query($conn,"UPDATE user SET fullname='$fullname', password='$password', email='$email', mobile='$mobile' WHERE username='$username'" );

	
	if($sql)
	{
		echo "<script>
		alert('Update Successful! Please Login to continue shopping.');
		window.location.href='http://localhost/fyp/USER/logout.php';
		</script>";
	}
	else{
		echo "<script>
		alert('Failed to update. Please try again.');
		window.location.href='http://localhost/fyp/USER/editprofile.php';
		</script>";
	}
	
?>