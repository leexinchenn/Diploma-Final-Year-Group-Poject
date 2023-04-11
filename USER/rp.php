<?php
session_start();
	$password = $_POST["password"];
	$cpassword = $_POST["password2"];
	
	$conn = new mysqli('localhost','root','','bleufonce')or die('fail to connect');

	if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from user WHERE username='" . $_SESSION["Userreset"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_SESSION["Userreset"] == $row["username"]) {
        mysqli_query($conn, "UPDATE user set password='" . $_POST["password"] . "' WHERE username='" . $_SESSION["Userreset"] . "'");
        echo "<script>
		alert('Update Successful! Please Login.');
		window.location.href='http://localhost/fyp/user/userlogin.php';
		</script>";
    }
}	
?>