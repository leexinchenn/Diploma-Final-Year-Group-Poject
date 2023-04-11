
<html>
<head>
	<title>
		Reset Password
	</title>
</head>
<body>
<form action="rp.php" method="post">
<div>
	<a href="http://localhost/fyp/index.php"><img class="backtomain" src="http://localhost/fyp/icon/back.png"></img></a>
</div>
	<div class="login">
		<div class="loginx2">
		<h1 class="loginword">RESET PASSWORD</h1>
			<div class="textbox">
				<img src="http://localhost/fyp/icon/lock2.png" style="width:20px;"></img>
				<input class="outinput" type="password" placeholder="Enter Password" name="password" value="" id="password" required>
				<input class="showpass" type="checkbox" onclick="myFunction()">
			</div>
			
			<div class="textbox">
				<img src="http://localhost/fyp/icon/lock2.png" style="width:20px;"></img>
				<input class="outinput" type="password" placeholder="Confirm Password" name="password2" value="" id="password2" required>
				<input class="showpass" type="checkbox" onclick="myFunction2()">
			</div>
		
		<br/><br/>
		<input class="btn" type="submit" name="submit" value="RESET PASSWORD" onclick="return validate()"></input>
		
		</div>	
	</div>
</form>
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
	font-size:30px;
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
	width:70%;
	height:40px;
	cursor:pointer;
	border-radius:2px;
	font-weight:bold;
	margin-left:15%;
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
</style>
<script>

//showpass
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
//show pass2
function myFunction2() {
  var x = document.getElementById("password2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

//validate two password
function validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>