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
		body{background-color: #FDF5E6;}
		h1{text-align: center; font-size: 5.5vw;}
		#m{width:90%; margin-right: auto; margin-left: auto;}
		#box{margin-top: 20px; margin-bottom: 20px; float: left; width:33.33%; text-align: center;}
		#img {width:300px; margin-left: auto; margin-right: auto; height: 300px;}
		#img img{height: 100%; width:100%;}
		#text p{font-size:20px; padding-top:5%;}
		
		#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
		#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
		#none a{color:#878282;}
		#none a:visited{color:#878282;}
	</style>
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
	
	<h1> COFFEE </h1>
	<hr/>
	<div id="m">
	<?php		
		$data="SELECT * FROM menu_coffee ORDER BY coffee_name ASC";
		$result=mysqli_query($connect, $data);
		
		if(mysqli_num_rows($result)>0) //if there are data
		{
			while($row=mysqli_fetch_array($result))
			{
				?><div id="box"><?php
				echo"";?> <div id="img"><img src="<?php echo $row["coffee_img_name"]; ?>"/> </div>
				<span id="text"><p><?php echo $row["coffee_name"]."<br><br>";?> </p></span> 
				</div>
				<?php
			}
		}
		else
		{
			echo"0 results";
		}
	?>
	</div>
	
	<div style="clear:both"></div>	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>

</html>