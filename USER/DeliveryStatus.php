<!DOCTYPE HTML>

<?php
	include("dataconnection.php");
	echo'<script>alert("ORDER SUCCESSFUL !")</script>';
?>

<?php
$uid = $_GET["uid"];
$discount = $_GET["discount"];
$total = $_GET["total"];
$delivery = $_GET["delivery"];
$totPay = $_GET["totPay"];
$PayType = $_GET["PayType"];
$PayStatus = $_GET["PayStatus"];
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
	
	<p style="font-weight:bold;text-align:center;font-size:20px;color:green;">PAYMENT SUCCESSFUL !</p>
	<br/>
	<div class="right">
		<br/>
		<h3 style="text-align:center;">YOUR ORDER SUMMARY</h3>
		<br/><hr/><br/>
		
		<?php		
		function orderid()
		{
			return rand(10000,99999);
		}
		$oid = orderid();
		?>
		
		<?php	
		$query = "select * from cart where user_ID = $uid ORDER BY cart_ID ASC ";
		$result = mysqli_query($connect, $query) or die (mysqli_error());
		$num = 0;
		$subtol=0;
		
		if(mysqli_num_rows($result)>0) //if there are data
		{
			while($row=mysqli_fetch_assoc($result))
			{	
				$tol = $row["prod_price"]*$row["prod_unit"];
				$subtol+=$tol;
				$num+=$row["prod_unit"];
		?>
				<p>
					<img src="<?php echo $row["prod_img_name"]?>" style="width:80px;height:auto;float:left;"/>
					<b style="float:left;padding-left:20px;"><?php echo $row["prod_name"]; ?></b>
					<b style="float:right;"><?php echo "RM ".number_format($tol, 2); ?></b>
					<br/>
					<span style="float:left;padding-left:20px;font-size:16px;"><?php echo "Qty: ".$row["prod_unit"]; ?></span>		
				</p>
				<div style="padding-bottom:80px;"></div>
			<?php 
				$itemCat = $row["prod_category"];
				$itemID = $row["prod_ID"];
				$itemimg = $row["prod_img_name"];
				$itemName = $row["prod_name"];
				$unitPrice = $row["prod_price"];
				$qty = $row["prod_unit"];
				
				$date = date('Y-m-d H:i:s');
				
				//ADD INTO ORDER DETAIL
				$addOD =  "INSERT INTO order_detail (Order_Date, Order_ID, User_ID, Item_Category, Item_ID, Item_img,  Item_Name, Unit_Price, Quantity, Total) VALUES 
													('$date', $oid, '$uid','$itemCat', '$itemID', '$itemimg', '$itemName', $unitPrice, $qty, $tol)";
				$r = mysqli_query($connect,$addOD);
				if(!$r)
				{
					echo mysqli_error($connect);
				}
			}
			?>
				<hr/>
				<p style="margin-top:20px;">Total Item<span style="float:right" ><?php echo $num; ?></span></p>
				<p style="margin-top:20px;">Order Subtotal (inclusive of 6% SST)<span style="float:right" ><?php echo "RM ".number_format($subtol,2); ?></span> </p>
				<p style="margin-top:10px;">Order Discounts<span style="float:right;color:red"><?php echo "- RM ".number_format($discount,2); ?></span></p>
				<p style="margin-top:20px;">Order Total<span style="float:right" ><?php echo "RM ".number_format($total,2); ?></span></p>
				<p style="margin-top:20px;">Delivery Fees<span style="float:right" ><?php echo "RM ".number_format($delivery,2); ?></span></p>
				<p style="margin-top:30px;"><b style="font-size:20px;">AMOUNT PAYABLE</b><span style="float:right" ><?php echo "RM ".number_format($totPay,2); ?></span></p>	
				<p style="margin-top:20px;">Paid By<span style="float:right" ><?php echo $PayType; ?></span></p>
		<?php 
		}		
		?>
	</div>
	
	<p style="font-weight:bold;text-align:center;font-size:20px;color:green;">THANK YOU FOR YOUR ORDER!</p>
	<br/>
	<h2 style="text-align:center;">Your Order Number is <?php echo $oid."."; ?></h2>
	<br/><br/>
	<p style="font-weight:bold;text-align:center;font-size:20px;">Delivery in: 30 minutes</p>
	<br/><br/><br/>
	<marquee behavior="scroll" direction="right" scrollamount="10" style="margin-left:300px;margin-right:300px;">	
		<img src="http://localhost/fyp/icon/delivery.png" width="200" height="auto" />
	</marquee>
	<br/>
	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>
</html>

<?php
$query = "select * from shipping_detail where user_ID = $uid";
$result = mysqli_query($connect, $query) or die (mysqli_error());	
$row=mysqli_fetch_assoc($result);
$deliAddress = $row["address"].", ".$row["postcode"].", ".$row["city"].", ".$row["state"];

$date = date('Y-m-d H:i:s');
$OrderStatus = "Successful";

//ADD INTO PURCHASE DETAIL
$addPD = "INSERT INTO purchase_detail (Purchase_Date, Order_ID, User_ID, Discount, Delivery_Fee, TotalPay, Pay_Type, Pay_Status, Order_Status, Delivery_Address) VALUES 
										('$date', $oid, $uid, $discount, $delivery, $totPay, '$PayType', '$PayStatus', '$OrderStatus', '$deliAddress')";
$r2 = mysqli_query($connect,$addPD);
if(!$r2)
{
	echo mysqli_error($connect);
}

//DELETE FROM CART AFTER ORDER DONE
$dltcart = "DELETE FROM cart WHERE user_ID = $uid";
$r3 = mysqli_query($connect,$dltcart);
if(!$r3)
{
	echo mysqli_error($connect);
}

?>
