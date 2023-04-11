 <?php
session_start();
$conn = new mysqli('localhost','root','','bleufonce')or die('fail to connect');

	$username = $_POST['username'];
	 

	 $sql = "SELECT username FROM user  WHERE username ='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows >= 1) {
           echo "<script>
			window.location.href='http://localhost/fyp/user/resetpassword.php';
			</script>";
			$_SESSION['Userreset'] = $username;
        }
		else{
			
			 echo "<script>
			alert('Incorrect username. Please try again');
			window.location.href='http://localhost/fyp/user/userlogin.php';
			</script>";
		}
?>
