<?php
	include("dataconnection.php");
?>

<html>

<head>
	<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<link rel="stylesheet" href="userfooter.css">
	<link rel="stylesheet" href="userheader.css">
	<link rel="stylesheet" href="userheader2.css">
<style>
body{
background-color:#FDF5E6;
}

h1{
text-align:center; 
font-size:5.5vw; 
}	

.hehe{
	width:90%;
	height:500px;
}

.map{
	float:right;
	width:40%;
}

.info{
	float:right;
	width:60%;
}

.email a{
text-decoration:none;
color:#00008B;
}

.email a:hover{
text-decoration:underline;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}
</style>
<script type="text/javascript">
</script>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION["checklogin"]) ||  $_SESSION["checklogin"]!==true) {
?>
<div class="sidebar">
		<nav>
			<div class="nllogo"><img src="http://localhost/fyp/header/transparentlogo.png" alt="logo image"></img></div>
			<div class="nlmain">
				<dl>
					<a href="http://localhost/fyp/index.php"><dt class="aa"><p>HOME</p></dt></a>
					<a href="http://localhost/fyp/INDEX/OurStory.php"><dt class="aa"><p>ABOUT US</p></dt></a>
					<dt class="ab"><a href="http://localhost/fyp/USER/Menu.php"><p>MENU</p></a>
						<div class="nldrop">
							<a href="http://localhost/fyp/USER/Menu.php">ALL MENU</a>
							<a href="http://localhost/fyp/USER/MenuCoffee.php">COFFEE</a>
							<a href="http://localhost/fyp/USER/MenuBingsu.php">BINGSU</a>
							<a href="http://localhost/fyp/USER/MenuLightmeal.php">LIGHTMEAL</a>
							<a href="http://localhost/fyp/USER/MenuCake.php">CAKE</a>
							<a href="http://localhost/fyp/USER/MenuJuice.php">JUICE</a>
						</div>
					</dt>
					<a href="http://localhost/fyp/INDEX/RateBoard.php"><dt class="ac"><p>RATING</p></dt></a>
					<a href="http://localhost/fyp/INDEX/COntactUs.php"><dt class="ad"><p>CONTACT US</p></dt></a>
				</dl>
			</div>
			<div class="nlimg1">
				<a href="http://localhost/fyp/ADMIN/A.Login.php"><img src="http://localhost/fyp/icon/admin.png" alt="adminLogin" title="Admin Login"/></a>
			</div>
			<div class="nlimg2">
				<a href="http://localhost/fyp/USER/userlogin.php"><img src="http://localhost/fyp/icon/user.png" alt="userLogin" title="User Login"/></a>
			</div>
		</nav>
	</div>
<?php } 
else{?>
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
<?php
}?>

<div id="id01" class="modal">
	<form class="modal-content animate" action="" method="post">
		<div class="imgcontainer">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>
		<?php
		if($_SESSION["id"]) 
		{
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
	
	<h1>CONTACT US</h1>
	<hr/><br/><br/>
	<div class="hehe">
	<div class="map">
		<h3>Find us at</h3>
		<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15938.443811489455!2d101.63330292331285!3d2.927638365882583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb6e4a9d3b7a1%3A0xd0f74e8ad10f1129!2sMultimedia%20University%20-%20MMU%20Cyberjaya!5e0!3m2!1sen!2sat!4v1579005924137!5m2!1sen!2sat" width="100%" height="65%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
	</div>
	
	<div class="info">
	<p><b>
		<img src="http://localhost/fyp/icon/email1.png" width="80px" style="float:left;padding-left:50px;"/>
		<span class="email"><a href="mailto:support@BleuFonce.com" style="float:left;padding-left:80px;padding-top:20px;font-size:18px;">support@BleuFonce.com</a></span>
	</p>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<p>
		<img src="http://localhost/fyp/icon/phone1.png" width="80px" style="float:left;padding-left:50px;"/><span style="float:left;padding-left:80px;padding-top:10px;font-size:18px;">(617) 3254700 <br/> Monday - Friday &nbsp;&nbsp;&nbsp;: 10:30am to 8:30pm <br/> Saturday - Sunday&nbsp;: 10:00am to 9:00pm</span>
	</p>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<p>
		<img src="http://localhost/fyp/icon/location2.png" width="80px" style="float:left;padding-left:50px;"/><span style="float:left;padding-left:80px;padding-top:10px;font-size:18px;">Multimedia University - <br/>MMU CYBERJAYA, PERSIARAN MULTIMEDIA, <br/>63100 CYBERJAYA, SELANGOR, MALAYSIA </span>
	</p></b>
	</div>
	</div>
	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>
</html>