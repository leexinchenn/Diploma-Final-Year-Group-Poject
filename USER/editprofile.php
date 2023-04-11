<?php
	$connect = mysqli_connect("localhost","root","", "bleufonce");
	
	if(!$connect)
	{
		die('Could not Connect MySql Server:' .mysql_error());
	}
	session_start();
?>
<head>
<title>Bleu Foncé</title>
<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<link rel="stylesheet" href="userfooter.css">
<link rel="stylesheet" href="userheader.css">
<link rel="stylesheet" href="userheader2.css">

<style>
h1{
text-align:center; 
font-size:5.5vw; 
}

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
    
  <!-- here -->
  
  <br/>
  <h1 style="text-align:center;">EDIT PROFILE</h1>
  <hr/>
  <div class="editprofile">
  <form action="editprofiledatabase.php" method="POST">
  <div style="width:90%; margin-left:auto; margin-right:auto;">
	<br/><br/>
    <label for="fname">Username</label>
    <input onclick="unchangeable()" type="text" id="username" name="username" placeholder="<?php echo $_SESSION["username"]; ?>" readonly>
	<br/><br/>
    <label>Full Name</label>
    <input type="text" id="fullname1" name="fullname" placeholder="<?php echo $_SESSION["fullname"]; ?>" required></input>
	<br/><br/>
	<label>Password</label>
    <input type="text" id="password1" name="password" placeholder="<?php echo $_SESSION["password"]; ?>"required>
	<br/><br/>
	<label>Email</label>
    <input type="text" id="email1" name="email" placeholder="<?php echo $_SESSION["email"]; ?>"required>
	<br/><br/>
	<label>Mobile</label>
    <input type="text" id="mobile1" name="mobile" placeholder="<?php echo $_SESSION["mobile"]; ?>"required>

  
    <br/><br/><br/>
	<input type="submit" value="Submit">
	</div>
	<br/><br/>
  </form>
</div>
  </div>

	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>

<script>
function unchangeable()
{
	
		alert("Username is unchangeable."); 
	
}
</script>