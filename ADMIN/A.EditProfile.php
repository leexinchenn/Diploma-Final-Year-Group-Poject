 <?php
session_start();

$conn = new mysqli('localhost','root','','bleufonce')or die('fail to connect');

	if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from admin WHERE username='" . $_SESSION["username"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE admin set password='" . $_POST["password"] . "' WHERE username='" . $_SESSION["username"] . "'");
        echo "<script>
		alert('Update Successful! Please Login again');
		window.location.href='http://localhost/fyp/admin/A.logout.php';
		</script>";
    } else
       echo "<script>
		alert('Current Password is INCORRECT. Please try again');
		</script>";
}
?>
 <html>
 <head>
	<title>Change Password</title>
	<link rel="icon" href="http://localhost/fyp/header/transparentlogo.png" type="image/png">
	<link rel="css" href="userheader.css">
 </head>
 <body>
 <?php include("A.header.php");?>
 <form action="" method="POST">
  <div class = "mar" >
    <label for="fname">Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br/>
    <input onclick="unchangeable()" type="text" id="username" name="username" placeholder="<?php echo $_SESSION["username"]; ?>" readonly>
	 
	<br/><br/>
    <label >Current Password&nbsp;</label><br/>
    <input type="password" id="currentPassword" name="currentPassword" placeholder="Enter New Password" required></input>
	<input class="showpass" type="checkbox" onclick="myFunction()">
	
	<br/><br/>
	<label >New Password&nbsp;</label><br/>
    <input type="password" id="password" name="password" placeholder="Enter New Password" required></input>
	<input class="showpass" type="checkbox" onclick="myFunction2()">


	</div>
    <br/><input type="submit" value="Submit">
	
  </form>
  </body>
  </html>
  <style>
		body{background-color: #FDF5E6; margin-bottom: 50px;}
		h1{text-align:center;font-size: 5.5vw;margin-top:2%;margin-bottom:2%;}
		#add{text-align:right; margin-right: auto; margin-left: auto; margin-top: 2%; width:90%;}
		#add a{color: white; text-decoration: none;}
		#add a:visited{border:none;}
		#add button{color:white; background-color: #4682B4; width: 150px; border:none; border-radius:5px;}
		#add button:hover{color:white; background-color: #3C6F99; width: 150px; border:none;}
		
		#addtext{padding-left: 5px;}
		#table{margin-left:auto; margin-right:auto; border-spacing: 0px; border: 1px solid black; border-left:none; border-right:none; width: 90%;margin-bottom:1%;}
		#table tr{height: 40px; font-size: 1.28vw;}
		#table th{background-color: #D3D3D3;}
		#table th, td{text-align: left}
		#table td{border-bottom: 1px solid black;}
		#thbtn{margin: auto; text-align: right;}
		#table button{style="background-color:#4682B4;"}
		#btntext{padding-left: 8px;}
		#edit button{background-color: #4682B4;}
		#edit button:hover{background-color: #3C6F99; }
		#dlt button{background-color:#DC143C;}
		#dlt button:hover{background-color:#BF1134;}
		button{margin: auto; width:90px; height:30px; border:none; border-radius:5px; color: white; text-align: center;}
		
		
		/*new css start here*/
		input[type=text], input[type=password]{
		width: 40%;
		padding: 12px 20px;

		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		}
		
		.mar{
			margin-left:40%;
			margin-top:2%;
			font-size: 1.4vw;
			font-family:"Times New Roman";
		}
		
		input[type=submit]{
		width: 15%;
		background-color:#005580;
		color: white;
		padding: 14px 20px;
		margin-left:45%;
		margin-top:3%;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		}
		
		input[type=submit]:hover{
			background-color:#004466;
		}

	
  </style>
  <script>
function unchangeable()
{
	
		alert("Username is unchangeable."); 
	
}
//showpass
function myFunction() {
  var x = document.getElementById("currentPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
//show pass2
function myFunction2() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

