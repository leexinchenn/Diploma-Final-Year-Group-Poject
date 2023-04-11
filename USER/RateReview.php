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
.history p{
float:right;
color:black;
padding-right:5%;
font-size:18px;
}
		
.history p a{
text-decoration:none;
color:black;
}

.history p:hover{
text-decoration:underline;
color:black;
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

.form p{
font-weight:bold;
font-size:18px;
}

.face{
	height:50px;
}

.face img{
	height:100%;
	width:50px;
}

.container1{
position: relative;
cursor: pointer;
font-size: 20px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
color:#708090;
}

/* Hide the browser's default checkbox */
.container1 input{
position: absolute;
opacity: 0;
cursor: pointer;
height: 0;
width: 0;
}

/* Create a custom checkbox */
.checkmark {
position: absolute;
top: 20px;
left: 0;
height: 15px;
width: 15px;
background-color: #DCDCDC;
border-radius: 15px;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark{
background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark{
background-color: #2196F3;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}

input[type="submit"]{
	width: 170px; 
	height:30px; 
	letter-spacing: 1px; 
	border-radius: 5px; 
	border-width:1px; 
	background-color:f2f2f2; 
	font-size:16px; 
	font-family:times new roman;
}

input[type="submit"]:hover{
	background-color: #e0dede;
}
</style>

<script type="text/javascript">
function goBack()
{
	window.history.back();
}

function validateForm()
{
	var p = document.getElementById("p");
	var f = document.getElementById("f");
	var a = document.getElementById("a");
	var g = document.getElementById("g");
	var e = document.getElementById("e");
	
	if(p.checked != true && f.checked != true && a.checked != true && g.checked != true && e.checked != true)
	{
		alert("Please rate");
		return false;
	}
	else
	{
		alert("Thank you for your rating and review! We'll reply soon.");
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
							<a href="http://localhost/fyp/USER/MenuLightmeal.php">LIGHTMEAL</a>
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

	<h1>Rate & Review</h1>
	<hr/><br/><br/>
	
	<div class="history">
		<!--p><a href="rate_history(user).php?viewReply&id=<?php //echo $uid; ?>">History</a></p-->
		<p><a style="color:black;text-decoration:none;" href="RateHistory.php?viewReply&id=<?php echo $uid; ?>" >History</a></p>
	</div>
	<div style="clear:both"></div>
	</br></br>
	<form class="form" method="post" onsubmit="return validateForm()" action="#">		
		<div class="face">
		<img src="http://localhost/fyp/icon/poor2.png" style="float:left;padding-left:1.15%;" />
		<img src="http://localhost/fyp/icon/fair2.png" style="float:left;padding-left:9.5%;" />
		<img src="http://localhost/fyp/icon/avg2.png" style="float:left;padding-left:11%;" />
		<img src="http://localhost/fyp/icon/good2.png" style="float:left;padding-left:12%;" />
		<img src="http://localhost/fyp/icon/exc2.png" style="float:left;padding-left:12.2%" />
		</div>
		<div style="clear:both"></div>
		<div>
			<br/>
			<h3 style="float:left; padding-left:1.15%;">POOR</h3>
				<p style="float:left;width:9.5%;"> </p>
			<h3 style="float:left;">FAIR</h3>
				<p style="float:left;width:9.5%;"> </p>
			<h3 style="float:left;">AVERAGE</h3>
				<p style="float:left;width:9.7%;"> </p>
			<h3 style="float:left;">GOOD</h3>
				<p style="float:left;width:9.5%;"> </p>
			<h3 style="float:left;">EXCELLENT</h3>
		</div>
		<div style="clear:both"></div>
		<div>
			<label class="container1" style="padding-left:20px;margin-left:2.5%;">
				<input type="radio" name="rate" id="p" value="Poor" />
				<span class="checkmark"></span>
			</label>
			<label class="container1" style="padding-left:20px; margin-left:12%;">
				<input type="radio" name="rate" id="f" value="Fair"  />
				<span class="checkmark"></span>
			</label>
			<label class="container1" style="padding-left:20px; margin-left:13%;">
				<input type="radio" name="rate" id="a" value="Average"  />
				<span class="checkmark"></span>
			</label>
			<label class="container1" style="padding-left:20px; margin-left:14%;">
				<input type="radio" name="rate" id="g" value="Good"  />
				<span class="checkmark"></span>
			</label>
			<label class="container1" style="padding-left:20px; margin-left:14%;">
				<input type="radio" name="rate" id="e" value="Excellent" />
				<span class="checkmark"></span>
			</label>
		</div>
		<div style="clear:both"></div>
		<br/><br/><br/>
	
		<p>Review</p>
			<textarea style="padding-top:10px;" rows="7" cols="55" placeholder="Please enter up to 150 character only." name="review" required ></textarea>
		<br/><br/><br/><br/>
		
		<input type="submit" name="savebtn" style="margin-bottom:20px;" value="SUBMIT"/>
	</form>
	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>
</html>

<?php
	include("dataconnection.php");
	
	if(isset($_POST["savebtn"])) 	
	{		
		$review = $_POST["review"];
		$rate = $_POST["rate"];
		
		$insert = "insert into rate_review(User_ID, Rate, Review) values ($uid, '$rate', '$review') ";
		$result=mysqli_query($connect,$insert);
		if(!$result)
		{
			echo "Error " .mysqli_error($connect);
		}
	}
?>