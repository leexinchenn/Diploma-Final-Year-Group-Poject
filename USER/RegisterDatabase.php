<?php

//database connection
$conn = new mysqli('localhost','root','','bleufonce');

	$fullname = $_POST['fullName'];
	$username = $_POST['userName'];
	$password = $_POST['password'];
	$REpassword = $_POST['password2'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	
	$sql_u = "SELECT * FROM user WHERE username='$username'";
	$res_u = mysqli_query($conn, $sql_u);
	
	if(mysqli_num_rows($res_u) > 0){
		echo "<script>alert('Username already taken. Please try another username');
					window.location='http://localhost/fyp/USER/Register.php';</script>";
	}
	else{
	$stmt = $conn->prepare("insert into user(fullname, username, password, mobile, email)values(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss",$fullname, $username, $password, $mobile, $email);
	$stmt->execute();

	echo "<script>alert('Register Successfully！');
					window.location='http://localhost/fyp/USER/userlogin.php';</script>";
					
	$stmt->close();
	$conn->close();
	}
	
?>