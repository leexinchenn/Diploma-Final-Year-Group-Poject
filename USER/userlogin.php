<?php
session_start();

$message="";
if(count($_POST)>0) {
$con = mysqli_connect('localhost','root','','bleufonce') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["fullname"] = $row['fullname'];
$_SESSION["username"] = $row['username'];
$_SESSION["password"] = $row['password'];
$_SESSION["email"] = $row['email'];
$_SESSION["mobile"] = $row['mobile'];

} else {
 echo "<script>
		alert('Invalid Username or Password');
		window.location.href='http://localhost/fyp/USER/userlogin.php';
		</script>";
}
}
if(isset($_SESSION["id"])) {
	$_SESSION["checklogin"]=true;
echo "<script>
		alert('Login Successful !');
		window.location.href='http://localhost/fyp/INDEX/bulBoard.php';
		</script>";
}
?>
<html>
<head>
	<title>
		User Login
	</title>
</head>
<body>
<form method="post">
<div>
	<a href="http://localhost/fyp/index.php"><img class="backtomain" src="http://localhost/fyp/icon/back.png"></img></a>
</div>
	<div class="login">
		<div class="loginx2">
		<h1 class="loginword">Login</h1>
			<div class="textbox">
				<img src="http://localhost/fyp/icon/login.jpg" style="width:25px;"></img>
				<input class="outinput" type="text" placeholder="Username" name="username" value="" required>
			</div>
			
			<div class="textbox">
				<img src="http://localhost/fyp/icon/lock2.png" style="width:20px;"></img>
				<input class="outinput" type="password" placeholder="Password" name="password" value="" id="myInput" required>
				<input class="showpass" type="checkbox" onclick="myFunction()">
			</div>
		<a onclick="document.getElementById('id01').style.display='block'" class="fp">Forgot Password ?</a>
		
		<br/><br/>
		<input class="btn" type="submit" name="submit" value="Sign In"></input>
		
			
		<div>
			<p>Not a member ? <a class="rh" href="http://localhost/fyp/USER/Register.php">  REGISTER HERE !</a></p>
		</div>
	</div>
</form>


<!--Forgot Password start here-->
<div id="id01" class="back">
  
  <form class="modal-content animate" action="http://localhost/fyp/USER/forgotPassword.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="http://localhost/fyp/icon/lock2.png" alt="Avatar" class="lockImg">
    </div>

    <div class="container">
	<form action="forgotPassword.php" method="POST">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" style="  width: 100%;
																				padding: 12px 20px;
																				margin: 8px 0;
																				display: inline-block;
																				border: 1px solid #ccc;
																				box-sizing: border-box;" required>

	  
      <button type="submit" style="margin-top:8%;border-radius:5px;">RESET PASSWORD</button>
    </div>
	</form>
  </form>
</div>

</body>
</html>
<style>
.fp{
	cursor:pointer;
}
body {
	margin:0;
	padding:0;
	font-family:san-serif;
	background: url(bgi.jpg) no-repeat;
	background-size:cover;
}

.login {
	width:280px;
	position:absolute;
	top:13%;
	left:40%;
	color:white;
}

.loginword {
	font-size:40px;
	float:left;
	border-bottom: 3px solid white;
	margin-bottom:50px;
	padding: 13px 0;
	width:300px;
}

.textbox {
	width:100%;
	overflow:hidden;
	font-size:20px;
	padding: 8px 0;
	margin:8px 0;
	border-bottom:1px solid white;
}

.outinput{
	border:none;
	outline:none;
	background:none;
	color:white;
	font-size:18px;
}

.btn {
	border:0;
	color:black;
	width:100%;
	height:40px;
	cursor:pointer;
	border-radius:2px;
	font-weight:bold;
}

.btn:hover{
	background-color:	#C8C8C8;
}

.backtomain {
	width:60px;
	cursor:pointer;
}

.rh {
	color:blue;
	text-decoration:none;
}

.rh:hover {
	color:red;
}
.showpass {
	float:right;
	cursor:pointer;
}

<!--Forgot Password css start here -->

/* Full-width input fields */
.inn {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #D2691E;
  color: white;
  padding: 14px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-left:25%;
}

button:hover {
  opacity: 0.8;
}


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.lockImg {
  width: 100px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}


/* The Modal (background) */
.back {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 5px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 400px; /* Could be more or less, depending on screen size */
}


/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
</style>
<script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


/*forgot password javascript start here */
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>