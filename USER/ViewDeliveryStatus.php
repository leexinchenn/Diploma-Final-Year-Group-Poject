<!DOCTYPE HTML>

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

input[type="radio"]:checked+p{
outline:1px solid #00FF00;
}

.right{
margin-right:300px;
margin-left:300px;
margin-bottom:50px;
font-size:18px;
border:1px solid #fff2d9;
background-color:#fff2d9;
padding:5px 10px 5px 10px;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%; min-height:140px;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}
</style>
<script type="text/javascript">
function changecolor()
{
	var lableText = document.getElementById('rad2');
	lableText.style.color = "red";
}
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
			$uid = $_SESSION["id"];
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
	
	<h1>DELIVERY STATUS</h1>
	<hr/><br/><br/>

	<div class="right">
		<br/>
		
		
		<?php	
		$date = date('Y-m-d');
		
		//$query1 = "SELECT Order_ID FROM order_detail WHERE Order_Date = '$date' AND User_ID = $uid";
		//$result1 = mysqli_query($connect, $query1) or die (mysqli_error());
		
		$query2 = "SELECT * FROM purchase_detail , order_detail WHERE purchase_detail.Purchase_Date = '$date' AND order_detail.Order_Date = '$date' AND purchase_detail.User_ID = $uid AND order_detail.User_ID = $uid AND purchase_detail.Order_ID = order_detail.Order_ID";
		$result2 = mysqli_query($connect, $query2) or die (mysqli_error());
		
		$num = 0;
		$subtol = 0;
		
		if(mysqli_num_rows($result2)>0) //if there are data
		{
			?>
			
			<h3 style="text-align:center;">YOUR ORDER SUMMARY</h3>
			<br/><hr/><br/>
			
			<?php
			while($row2=mysqli_fetch_assoc($result2))
			{	
				$payType = $row2["Pay_Type"];
				$dis = $row2["Discount"]; 
				$delivery = $row2["Delivery_Fee"]; 
				$amount = $row2["TotalPay"]; 
				
				$subtol+=$row2["Total"];
				$num+=$row2["Quantity"];
		?>
				<p>
					<img src="<?php echo $row2["Item_img"]?>" style="width:80px;height:auto;float:left;"/>
					<b style="float:left;padding-left:20px;"><?php echo $row2["Item_Name"]; ?></b>
					<b style="float:right;"><?php echo "RM ".$row2["Total"]; ?></b>
					<br/>
					<span style="float:left;padding-left:20px;font-size:16px;"><?php echo "Qty: ".$row2["Quantity"]; ?></span>		
				</p>
				<div style="padding-bottom:80px;"></div>
			<?php
			}
			$total = $subtol - $dis;
		?>
	
				<hr/>
				<p style="margin-top:20px;">Total Item<span style="float:right" ><?php echo $num; ?></span></p>
				<p style="margin-top:20px;">Order Subtotal (inclusive of 6% SST)<span style="float:right" ><?php echo "RM ".number_format($subtol,2); ?></span> </p>
				<p style="margin-top:10px;">Order Discounts<span style="float:right;color:red"><?php echo "- RM ".number_format($dis,2); ?></span></p>
				<p style="margin-top:20px;">Order Total<span style="float:right" ><?php echo "RM ".number_format($total,2); ?></span></p>
				<p style="margin-top:20px;">Delivery Fees<span style="float:right" ><?php echo "RM ".number_format($delivery,2); ?></span></p>
				<p style="margin-top:30px;font-size:20px;"><b>AMOUNT PAYABLE</b><span style="float:right" ><?php echo "RM ".number_format($amount,2); ?></span></p>	
				<p style="margin-top:20px;">Paid By<span style="float:right" ><?php echo $payType; ?></span></p>
	</div>
	
	<h2 style="text-align:center;">
									<?php 
									$query1 = "SELECT * FROM purchase_detail WHERE Purchase_Date = '$date' AND User_ID = $uid";
									$result1 = mysqli_query($connect, $query1) or die (mysqli_error());
									if(mysqli_num_rows($result1)>0) //if there are data
									{
										if(mysqli_num_rows($result1)==1)
										{
											while($row1=mysqli_fetch_assoc($result1))
											{
												$oid = $row1["Order_ID"]; 
												echo "Your Order Number is ".$oid."."; 
											}
										}
										else if(mysqli_num_rows($result1)>1) // if more than 1
										{
											echo "Your Order Number are ";
											while($row1=mysqli_fetch_assoc($result1))
											{
												$oid = $row1["Order_ID"]; 
												echo "<br/>".$oid; 
											}
										}
									}
									?>
	</h2>
	<br/><br/>
	<p style="font-weight:bold;text-align:center;font-size:20px;">Delivery in: 30 minutes</p>
	<br/><br/><br/>
	<marquee behavior="scroll" direction="right" scrollamount="10" style="margin-left:300px;margin-right:300px;">	
		<img src="http://localhost/fyp/icon/delivery.png" width="200" height="auto" />
	</marquee>
	<br/>
	<?php
	}
	else
	{
		?>
		<div id="none">
			<p><b>No Order yet. <br/><br/>Click <a href="http://localhost/fyp/USER/cart.php">here</a> to place an order now!</b></p>
		</div>
		<?php
	}
	?>
	</div>
	
	<div id="footer">
		<p style="bottom:0;">© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>
</html>
