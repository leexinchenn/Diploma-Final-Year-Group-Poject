<body>
<form action="RegisterDatabase.php" method="post">
<div>
	<a href="http://localhost/fyp/index.php"><img class="backtomain" src="http://localhost/fyp/icon/back.png"></img></a>
	
	<div class="register">
		<div class="registerx2">
		<h1 class="regword">Register</h1>
			
			<div class="textbox">
				<img src="http://localhost/fyp/icon/login.jpg" style="width:25px;"></img>
				<input type="text" placeholder="Full Name" id="fullName" name="fullName" value="" required>
			</div>
		
			<div class="textbox">
				<img src="http://localhost/fyp/icon/login.jpg" style="width:25px;"></img>
				<input type="text" placeholder="Username" id="userName"name="userName" value="" required>
			</div>
			
			<div class="textbox">
				<img src="http://localhost/fyp/icon/lock2.png" style="width:20px;"></img>
				<input type="password" placeholder="Password" id="password" name="password" value="" required></input>
				<input class="showpass" type="checkbox" onclick="myFunction()"> 
			</div>
			
			<div class="textbox">
				<img src="http://localhost/fyp/icon/lock2.png" style="width:20px;"></img>
				<input type="password" placeholder="Confirm Password" id="password2" name="password2" value="" required></input>
				<input class="showpass" type="checkbox" onclick="myFunction2()"> 
			</div>
			
			
			<div class="textbox">
				<img src="http://localhost/fyp/icon/phone.png" style="width:20px;"></img>
				<input type="mobile" placeholder="Phone No." name="mobile" id="mobile" value="" required>
			</div>
				<a style="top:0; font-size:15px;">Example : 011-12345678</a>
			<div class="textbox">
				<img src="http://localhost/fyp/icon/email.png" style="width:20px;"></img>
				<input type="text" placeholder="Email" name="email" id="email" required>
			</div>
		
		<button class="btn" type="submit" name="" value="Sign in" href="http://localhost/fyp/USER/userlogin.php" onclick="return Validate()">Register</button>
		</div>
	</div>
</div>
</form>
</body>
<style>
.error_msg{
	color:red;
	position:absolute;
}
body {
	margin:0;
	padding:0;
	font-family:san-serif;
	background: url(bgi.jpg) no-repeat;
	background-size:cover;
}

.backtomain {
	width:60px;
}

.register {
	width:280px;
	position:absolute;
	top:1%;
	left:40%;
	color:white;
}

.regword {
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

.textbox input {
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

.showpass {
	float:right;
	cursor:pointer;
}
</style>
<script>
	function myFunction() {
  var x = document.getElementById("password");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

	function myFunction2() {
  var y = document.getElementById("password2");
  if (y.type == "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	

</script>