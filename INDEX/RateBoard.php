<!DOCTYPE html>
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
<script type="text/javascript">
</script>
</head>
<style>
img {
max-width: 100%;
}

.history p{
float:right;
color:black;
padding-right:8px;
font-size:18px;
}
		
.history p a{
text-decoration:none;
color:black;
}

.history p a:hover{
text-decoration:underline;
color:black;
}

body{
background-color:#FDF5E6;
margin:auto;
}

h1{
text-align:center; 
font-size:5.5vw; 
}		

/* The bar container */
.bar-container {
width: 30%;
background-color:#E6E6FA;
color:white;
float:left;
}

.L{
float:left;
padding-left:300px;
margin-bottom:50px;
}

.left{
float:left;
padding-left:250px;
}

.right{
padding-left:20px;
font-size:20px;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}
</style>
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

	<h1>RATE & REVIEW</h1>
	<hr/><br/>
	<?php 
	include("dataconnection.php"); 
	
	$query = "SELECT * FROM rate_review";
	$result = mysqli_query($connect, $query) or die (mysqli_error());
	if(mysqli_num_rows($result)>0) //there are data 
	{
	
		$poor = "SELECT * FROM rate_review WHERE Rate = 'Poor'";
		$fair = "SELECT * FROM rate_review WHERE Rate = 'Fair'";
		$avg = "SELECT * FROM rate_review WHERE Rate = 'Average'";
		$good = "SELECT * FROM rate_review WHERE Rate = 'Good'";
		$exc = "SELECT * FROM rate_review WHERE Rate = 'Excellent'";
		
		$p = mysqli_query($connect, $poor) or die (mysqli_error());
		$f = mysqli_query($connect, $fair) or die (mysqli_error());
		$a = mysqli_query($connect, $avg) or die (mysqli_error());
		$g = mysqli_query($connect, $good) or die (mysqli_error());
		$e = mysqli_query($connect, $exc) or die (mysqli_error());
		
		$s1 = mysqli_num_rows($p);
		$s2 = mysqli_num_rows($f);
		$s3 = mysqli_num_rows($a);
		$s4 = mysqli_num_rows($g);
		$s5 = mysqli_num_rows($e);
		
		$all = $s1+$s2+$s3+$s4+$s5;
		$based = ($s4+$s5)/$all*5;
	?>
	
	<!--RATING-->
	<div class="L">
		<br/><br/><br/>
		<h1 style="float:left;padding-left:50px;font-size:80px;"><?php echo number_format("$based",1); ?></h1>
		<h2 style="float:left;padding-left:10px;padding-top:70px;font-size:30px;">/ 5</h2>
		<br/>
		<p style="float:left;padding-left:10px;margin-top:50px;"><b><?php echo number_format("$based",1); ?> average based on <?php echo "$all"; ?> reviews</b></p>
	</div>
	
	<br/><br/><br/>
	<span class="left"><span style="font-size:20px;">5</span> <img src="http://localhost/fyp/icon/star.png" width="20px;" style="padding-right:10px;"/></span>
	<div class="middle">
		<div class="bar-container">
			<div class="bar-5"></div>
		</div>
	</div>
	<span class="right"><?php echo "$s5"; ?></span>
	
	<br/><br/>
	
	<span class="left"><span style="font-size:20px;">4</span> <img src="http://localhost/fyp/icon/star.png" width="20px;" style="padding-right:10px;"/></span>
	<div class="middle">
		<div class="bar-container">
			<div class="bar-4"></div>
		</div>
	</div>
	<span class="right"><?php echo "$s4"; ?></span>
	
	<br/><br/>
	
	<span class="left"><span style="font-size:20px;">3</span> <img src="http://localhost/fyp/icon/star.png" width="20px;" style="padding-right:10px;"/></span>
	<div class="middle">
		<div class="bar-container">
			<div class="bar-3"></div>
		</div>
	</div>
	<span class="right"><?php echo "$s3"; ?></span>
	
	<br/><br/>
	
	<span class="left"><span style="font-size:20px;">2</span> <img src="http://localhost/fyp/icon/star.png" width="20px;" style="padding-right:10px;"/></span>
	<div class="middle">
		<div class="bar-container">
			<div class="bar-2"></div>
		</div>
	</div>
	<span class="right"><?php echo "$s2"; ?></span>
	
	<br/><br/>
	
	<span class="left"><span style="font-size:20px;">1</span> <img src="http://localhost/fyp/icon/star.png" width="20px;" style="padding-right:10px;"/></span>
	<div class="middle">
		<div class="bar-container">
			<div class="bar-1"></div>
		</div>
	</div>
	<span class="right"><?php echo "$s1"; ?></span>
	
	<!--REVIEW-->
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
	<div style="margin-left:140px;margin-bottom:200px;">
		<?php
		mysqli_select_db($connect,"bleufonce");
		$result = mysqli_query($connect, "select * from rate_review");	
		
		while($row = mysqli_fetch_assoc($result))
		{	
		?>	
			<div style="float:left;width:350px;padding-left:50px;padding-right:10px;padding-top:20px;padding-bottom:20px;border:1px solid gray;margin-bottom:10px;">
				<p style="text-align:left;">
					<span style="table-layout:fixed;width:125%;word-wrap: break-word;font-weight:bold;font-size:20px;"><?php echo $row["Review"]; ?></span><br/>
					<?php
						if($row["Rate"]=="Poor")
						{
							for($i=0; $i<1; $i++)
							{
								?>
								<img src="http://localhost/fyp/icon/star1.png" width="20px;"/>
								<?php
							}
						}
						else if($row["Rate"]=="Fair")
						{
							for($i=0; $i<2; $i++)
							{
								?>
								<img src="http://localhost/fyp/icon/star1.png" width="20px;"/>
								<?php
							}
						}
						else if($row["Rate"]=="Average")
						{
							for($i=0; $i<3; $i++)
							{
								?>
								<img src="http://localhost/fyp/icon/star1.png" width="20px;"/>
								<?php
							}
						}
						else if($row["Rate"]=="Good")
						{
							for($i=0; $i<4; $i++)
							{
								?>
								<img src="http://localhost/fyp/icon/star1.png" width="20px;"/>
								<?php
							}
						}
						else if($row["Rate"]=="Excellent")
						{
							for($i=0; $i<5; $i++)
							{
								?>
								<img src="http://localhost/fyp/icon/star1.png" width="20px;"/>
								<?php
							}
						}
					
					?>
					<br/>
					<span style="table-layout:fixed;width:125%;word-wrap: break-word"><?php echo "Admin Reply: ".$row["Reply"]; ?></span>
				</p>
			</div>
		<?php } ?>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
	
</body>
</html>
<style>
/* Individual bars */
.bar-5 {width:<?php echo "$s5"; ?>%;height:20px;background-color:#4CAF50;border-radius:5px;}
.bar-4 {width:<?php echo "$s4"; ?>%;height:20px;background-color:#2196F3;border-radius:5px;}
.bar-3 {width:<?php echo "$s3"; ?>%;height:20px;background-color:#00bcd4;border-radius:5px;}
.bar-2 {width:<?php echo "$s2"; ?>%;height:20px;background-color:#ff9800;border-radius:5px;}
.bar-1 {width:<?php echo "$s1"; ?>%;height:20px;background-color:#f44336;border-radius:5px;}
</style>

<?php 
}
else
{
	echo '<div style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%; height: 300px;">'
			.'<span style="font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;color:#878282;">'
				."NO CUSTOMER REVIEW".
			'</span>'.
			'</div>'.
			'<div id="footer">'.
				'<p>© Bleu Foncé 2020 | All rights reserved</p>'.
			'</div>';
}	
?>
