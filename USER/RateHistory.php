<!DOCTYPE html>

<?php include("dataconnection.php"); ?>

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

.table table, tr, th, td{
border-collapse:collapse;
border-left:none;
border-right:none;	
border-spacing: 1px;
}

.table tr{
height:40px;
}

.table th, .nonebtn{
padding-left:5px;
padding-right:10px;
text-align:left;
}

.table{
padding-left:200px;
min-height:250px;
}

#myTable{
table-layout:fixed;
width:90%;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%; min-height:240px;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}
</style>
	
<script type="text/javascript">
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

	<h1>RATE & REVIEW HISTORY</h1>
	<hr/><br/><br/>
	
	<?php $a=0; ?>
			
	<!--get data from database phpmyadmin-->
	<?php
	if(isset($_GET["viewReply"]))
	{
		$uid = $_GET["id"];
		
		$result = mysqli_query($connect, "select * from rate_review where User_ID = $uid");
		
		if(mysqli_num_rows($result)>0) //if there are data
		{		
	?>
	<div class="table">
		<table border="1" id="myTable">
			<tr style="background-color:#D3D3D3;height:35px;font-size:18px;">
				<th style="width:50px;" >No</th>
				<th style="width:100px;">Rate</th>
				<th style="width:300px;">Review</th>
				<th style="width:300px;">Review Reply</th>
			</tr>
			<?php
			while($row = mysqli_fetch_array($result)):
			?>
			<tr>
				<td class="nonebtn"> <?php echo ++$a ?> </td>
				<td class="nonebtn"> <?php echo $row["Rate"]; ?> </td>
				<td class="nonebtn" style="word-wrap: break-word"> <?php echo $row["Review"]; ?> </td>
				<td class="nonebtn" style="word-wrap: break-word"> <?php echo $row["Reply"]; ?> </td>		
			</tr>
			<?php
			endwhile;
			?>
		</table>
	</div>
	<?php 
		}
		else
		{
		?>
			<div id="none">
				<p><b>No rate & review record yet.</b></p>
				<p><b>Click <a href="RateReview.php">here</a> to rate for us.</b></p>
			</div>
		<?php
		}
	}
	?>
	<div style="clear:both"></div>
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>
</html>