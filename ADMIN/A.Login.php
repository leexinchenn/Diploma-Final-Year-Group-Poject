<html>
<head>
<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<style>
.b{
	margin-left:5%;
	cursor:pointer;
}


body{background: #FDF5E6;}

.logo{width:250px;
	  margin-left:35%;}
	  
.adminLoginWord h1{
	font-family: "Calibri";
	color:white;
	text-align:center;
	font-size:2vw;
	width:40%;
	margin-left:auto;
	margin-right:auto;
	background-color:#483D8B;
	border-radius: 15px 15px 0px 0px;
	margin-bottom:2%;
	padding-top:0.5%;
	padding-bottom:0.5%;
}
.adloginword{color:black;
			 font-weight:bold;
			 margin-left:30%;
			 background-color:#F5DEB3;
			 height:20%;
			 padding-top:2%;
			 padding-left:2%;
			 margin-right:30%;
			 line-height:200%;
			 }
.hreff:hover{color:red;
			 }
.hreff {
	margin-left:40%;
	padding-top:2%;
}
	   
.arrow{
	width:60px;
	float:left;
}

.showpass {
	float:right;
	cursor:pointer;
	margin-right:150px;
	margin-top:10px;
}

.adtextbox {
	padding: 4px 0;
	margin:10px 0;
	border-bottom:1px solid black;
	border-top:0px;
	border-left:0px;
	border-right:0px;
	background-color:#F5DEB3;
}

.adtextbox : active{
	border-radius:0px;
}

.butt button{
	width:40%;
	height:7%;
	margin-top: 2%;
	margin-left:30%;
	border:0.2px soild black;
	border-style:none;
	border-bottom-left-radius:25px;
	border-bottom-right-radius:25px;
	text-align:center;
	background-color:#483D8B;
	font-family: "Calibri";
	color:white;
	font-size:2vw;
}
</style>
<script>
function MyFunction() 
{
	var x = document.getElementById("adminPassword");
	if (x.type === "password") 
	{
		x.type = "text";
	} 
	else 
	{
		x.type = "password";
	}
}
</script>
</head>

<body>
	<a href="http://localhost/fyp/index.php"><img class="arrow" src="http://localhost/fyp/icon/arr.png"></img></a>
	<img class="logo" src="http://localhost/fyp/header/transparentLogo.png" alt="logo image"></img>
		<div class="adminLoginWord"><h1>ADMIN LOGIN </h1></div>
		<div class="adloginword">
			<form method="post">
				  <label for="username" style="font-size:1.2vw;">Username : </label>
				  <input class="adtextbox"type="textbox" name="adminusername" id="adminUsername" value="" required><br/>
				  <label for="password" style="font-size:1.2vw;">Password  : </label>
				  <input style="margin-left:0.5%;"class="adtextbox"type="password" name="adminpassword" id="adminPassword" value=""required>
				  <input  type="checkbox" onclick="MyFunction()"><b style="font-size:0.9vw; color:black;">Show Password</b>
				  </br>
		</div>
				  <div class="butt">
				  <button class="b"type="submit">Log In</button>
				  </div>
			</form>
		
</body>
</html>

<?php
include("dataconnection.php");
session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
	// username and password sent from form 

	$myusername = mysqli_real_escape_string($connect,$_POST['adminusername']);
	$mypassword = mysqli_real_escape_string($connect,$_POST['adminpassword']); 

	$sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);

	$count = mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) 
	{
		//header("location: adminLanding.php");
		echo "	<script>
				alert('Login Successful.');
				window.location.href='A.Landing.php';
				</script>
				";
		$_SESSION["username"] = $myusername;
	}
	else 
	{
		echo "	<script>
				alert('Wrong username OR password. Please try again.');
				window.location.href='A.Login.php';
				</script>
				";
	}
}
?>