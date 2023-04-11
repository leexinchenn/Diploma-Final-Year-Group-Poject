<!DOCTYPE html>
<?php
	include("dataconnection.php");
	session_start();
?>
<html>
<head>
<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<link rel="stylesheet" href="userfooter.css">
	<link rel="stylesheet" href="userheader.css">
	<link rel="stylesheet" href="userheader2.css">
<style>
.history{
	width:90%;
margin-left:auto;
margin-right:auto;
}
.history p{
	width:50%;
	text-align:right;
float:left;
color:#FEF5E7;
font-size:19px;
}
		
.history p a{
text-decoration:none;
}

.history p:hover{
text-decoration:underline;
}

body{
background-color:#FDF5E6;
}

h1{
text-align:center; 
font-size:5.5vw; 
}	
	
.form{
width:90%;
margin-left:auto;
margin-right:auto;
}

.form p label{
font-weight:bold;
font-size:18px;
}

.bLeft{
padding-bottom:10px;
float:left;
padding-left:100px;
color:white;
}

.bRight{
float:left;
padding-left:600px;
color:white;
}

.email a{
text-decoration:none;
color:#00FFFF;
}

.email a:hover{
text-decoration:underline;
}

.map{
padding-left:150px;
}

button{
	width: 170px; 
	height:30px; 
	letter-spacing: 1px; 
	border-radius: 5px; 
	border-width:1px; 
	background-color:f2f2f2; 
	font-size:16px; 
	font-family:times new roman;
}

button:hover{
	background-color: #e0dede;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}
</style>
<script type="text/javascript">
function alertF()
{
	var a = document.Form.name.value;
	var b = document.Form.email.value;
	var c = document.Form.type.value;
	var d = document.Form.describe.value;

	if(a=="")
	{
		alert("Please fill in all requirement");
		return false;
	}
	else if(b=="")
	{
		alert("Please fill in all requirement");
		return false;
	}
	else if(c=="")
	{
		alert("Please fill in all requirement");
		return false;
	}
	else if(d=="")
	{
		alert("Please fill in all requirement");
		return false;
	}
	else
	{
		alert("Thank you for your feedback! We'll reply soon.");
		return true;
	}
}
</script>
</head>

<body>
<div class="sidebar">
		<nav>
			<div class="logo"><img src="http://localhost/fyp/header/transparentlogo.png" alt="logo image"></img></div>
			<div class="choose">
				<dl>
					<a href="http://localhost/fyp/INDEX/bulBoard.php"><dt class="aa"><p>HOME</p></dt></a>
					<a href="http://localhost/fyp/INDEX/OurStory.php"><dt class="ab"><p>ABOUT US</p></dt></a>
					<dt class="ac"><a href="http://localhost/fyp/USER/Menu.php"><p>MENU</p></a>
						<div class="drop">
							<a href="http://localhost/fyp/USER/Menu.php">ALL MENU</a>
							<a href="http://localhost/fyp/USER/MenuCoffee.php">COFFEE</a>
							<a href="http://localhost/fyp/USER/MenuBingsu.php">BINGSU</a>
							<a href="http://localhost/fyp/USER/Menudtghtmeal.php">LIGHTMEAL</a>
							<a href="http://localhost/fyp/USER/MenuCake.php">CAKE</a>
							<a href="http://localhost/fyp/USER/MenuJuice.php">JUICE</a>
						</div>
					</dt>
					<dt class="ad"><a href="http://localhost/fyp/USER/DeliveryMenu.php"><p>DELIVERY</p></a>
						<div class="drop">
							<a href="http://localhost/fyp/USER/DeliveryMenu.php">DELIVERY MENU</a>
							<a href="http://localhost/fyp/USER/ViewDeliveryStatus.php">DELIVERY STATUS</a>
						</div>
					</dt>
					<a href="http://localhost/fyp/INDEX/RateBoard.php"><dt class="ae"><p>RATING</p></dt></a>
					<a href="http://localhost/fyp/INDEX/COntactUs.php"><dt class="af"><p>CONTACT US</p></dt></a>
					<dt class="ag"><img src="http://localhost/fyp/header/profile.png" alt="profile image">
						<div class="drop">
							<a href="#" onclick="document.getElementById('id01').style.display='block'">PROFILE</a>
							<a href="http://localhost/fyp/USER/Feedback.php">FEEDBACK</a>
							<a href="http://localhost/fyp/USER/RateReview.php">RATE & REVIEW</a>
							<div class="logout"><a href="http://localhost/fyp/USER/logout.php">LOG OUT</a></div>
						</div>
					</dt>
				</dl>
			</div>
			<div class="img1" >
				<a href="http://localhost/fyp/USER/Cart.php"><img src="http://localhost/fyp/header/cart.png" alt="profile image" title="cart"></img></a>
			</div>
		</nav>
	</div>

<div id="id01" class="modal">
	<form class="modal-content animate" action="" method="post">
		<div class="imgcontainer">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>
		<?php
		if($_SESSION["id"]) 
		{
			$uid=$_SESSION["id"];
		?> 
		<div class="container">
			<b>Full Name : </b><?php echo $_SESSION["fullname"]; ?><br/><br/>
			<b>Username  : </b><?php echo $_SESSION["username"]; ?><br/><br/>
			<b>Password  : </b><?php echo $_SESSION["password"]; ?><br/><br/>
			<b>Email     : </b><?php echo $_SESSION["email"]; ?><br/><br/>
			<b>Mobile    : </b><?php echo $_SESSION["mobile"]; ?><br/><br/>
		</div>
		<div class="container" style="background-color:#f1f1f1">
		  <a href="http://localhost/fyp/USER/editprofile.php">Edit Profile</a>
		</div>
		<?php
		}
		else
		{
			?>
			<div id="none">
				<p><b>Click <a href="http://localhost/fyp/USER/userLogin.php">here</a> to Login first.</b></p>
			</div>
			<?php
		}
		?>
	</form>
</div>
<div style="clear:both"></div>	

	<h1>FEEDBACK</h1>
	<hr/><br/><br/>
	
	<div class="history">
		<!--p><a href="User Feedback History.php?viewReply&id=<?php //echo $uid; ?>">History</a></p-->
		<h3 style="width:50%;margin-left:auto;margin-right:auto; float:left;">We’d love to hear your feedback !</h3>
		<p><a style="color:black;text-decoration:none;" href="FeedbackHistory.php?viewReply&id=<?php echo $uid; ?>">History</a></p>
	</div>
	<div style="clear:both"></div>	
	<br/>
	<form class="form" method="post" name="Form">
		<p>	
			<label>Name</label></br>
			<input type="text" name="name" size="50" required style="width:50%;"/>
		</p>
		<br/><br/>
		<p>
			<label>Email Address</label></br>
			<input type="email" name="email" size="50px;" required style="width:50%;"/>
		</p>
		<br/><br/>
		<p>
			<label>Feedback Type</label></br></br>
			<input type="radio" name="type" value="Comment" required />Comment
			<input type="radio" name="type" value="Suggestion" />Suggestion
			<input type="radio" name="type" value="Question" />Question
		</p>
		<br/><br/>
		<p style="font-weight:bold;font-size:18px;">Feedback</p>
			<textarea rows="6" cols="50" style="float:left;" placeholder="Please enter up to 150 character only." name="describe" required ></textarea>
		<br/><br/><br/><br/><br/><br/><br/>
		<p style="color:gray;">*All Information will be treated as private and confidential</p>
		<br/><br/><br/>
		<a href="support@BleuFonce.com" onclick="return alertF();"><button name="savebtn">SUBMIT</button></a>
		<br/><br/><br/><br/><br/><br/>
	</form>
	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>
</html>

<?php
	include("dataconnection.php");
	
	if (isset($_POST["savebtn"])) 	
	{	
		$Fname = $_POST["name"];  	
		$Femail = $_POST["email"];
		$Ftype = $_POST["type"];
		$Fdescribe = $_POST["describe"];
		
		$addfeedback = "insert into feedback (User_ID, Name, Email, Feedback_Type, Feedback_Describe) values ($uid, '$Fname', '$Femail', '$Ftype', '$Fdescribe') ";
		
		if(mysqli_query($connect,$addfeedback))
		{
			echo "saved";
		}
		else
		{
			echo "Error " .mysqli_error($connect);
		}
	}
?>