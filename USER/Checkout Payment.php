<!DOCTYPE HTML>

<?php
	include("dataconnection.php");
	session_start();
?>

<?php 
$uid = $_GET["uid"];
$discount = $_GET["discount"];
$total = $_GET["total"];
$delivery = $_GET["delivery"];
$totPay = $_GET["totPay"];
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

.bdy{
	width:90%;
	margin-left:auto;
	margin-right:auto;
}

input[type="radio"]{
position:absolute;
opacity:0px;
width:0px;
height:0px;
}
						
input[type="radio"]+img{
cursor:pointer;
width:90px;
}

input[type="radio"]+img:hover{
width:85px;
}

input[type="radio"]:checked+img{
outline:3px solid black;
}

input[type="button"]:hover{
width:85px;
}

.left{
float:left;
width:50%;
}

.left button{
cursor:pointer;
}

.right{;
float:right;
margin-bottom:30px;
font-size:18px;
border:1px solid #fff2d9;
width:45%;
background-color:#fff2d9;
padding:5px 10px 5px 10px;
}

.right button{
cursor:pointer;
}

.right button:hover{
text-decoration:underline;
}

.apply button:hover{
text-decoration:none;
}

.info{
border:1px solid grey;
font-weight:bold;
}

.break{
word-break:break-all;
/*word-wrap:break-word;*/
width:600px;
padding-left:100px;
}

.break2{
word-break:break-all;
/*word-wrap:break-word;*/
width:600px;
padding-left:100px;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}
</style>	
<script type="text/javascript">
function goTo(f)
{
	for(var i=0; i<f.pay.length; i++) 
	{
		if(f.pay[i].checked) 
		{
			if (f.pay[i].value == 'Visa')
				{window.location = "Payment Type_VISA.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $delivery; ?>&totPay=<?php echo $totPay; ?>";}
			else if(f.pay[i].value == 'Master')
				{window.location = "Payment Type_MASTER.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $delivery; ?>&totPay=<?php echo $totPay; ?>";}
			else if(f.pay[i].value == 'FPX')
				{window.location = "Payment Type_FPX.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $delivery; ?>&totPay=<?php echo $totPay; ?>";}
			else if(f.pay[i].value == 'TNG E-Wallet')
				{window.location = "Payment Type_TNG.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $delivery; ?>&totPay=<?php echo $totPay; ?>";}
		}
	}
}

function goBack()
{
	window.history.back();
}

//Smooth Scroll
$(document).ready(function(){
	// Add smooth scrolling to all links
	$("a").on('click', function(event) {

	// Make sure this.hash has a value before overriding default behavior
	if (this.hash !== "") {
	// Prevent default anchor click behavior
	event.preventDefault();

	// Store hash
	var hash = this.hash;

	// Using jQuery's animate() method to add smooth page scroll
	// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	$('html, body').animate({
	scrollTop: $(hash).offset().top
	}, 800, function(){

	// Add hash (#) to URL when done scrolling (default click behavior)
	window.location.hash = hash;
	});
	} // End if
	});
});
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
	
	<h1>CHECKOUT</h1>
	<hr/><br/><br/>
	
	<?php
	$query = "select * from shipping_detail where user_ID = $uid";
	$result = mysqli_query($connect, $query) or die (mysqli_error());
	
	while($row=mysqli_fetch_assoc($result))
	{
		$deliAddress = $row["address"].", ".$row["postcode"].", ".$row["city"].", ".$row["state"];
	?>
	<div class="bdy">
	<div class="left">
		
		<div class="info">
			<p> 
				<div style="margin-top:10px;margin-bottom:10px;">
					<span style="float:left;padding-left:20px;">Contact</span> 
					<div class="break"><?php echo $row["email"];?><br/><div style="margin-top:15px;"><?php echo $row["phone"];?></div></div>
				</div>
			<hr/>
				<div style="margin-top:10px;margin-bottom:20px;">
					<span style="float:left;padding-left:20px;padding-bottom:20px;">Ship to</span> 
					<div class="break2"><?php echo $deliAddress; ?></div>
				</div>
			</p>
		</div>
	<?php } ?>
		<br/><br/><br/>
		<form name="method" method="post" action="#">
			<p>
				<label style="font-size:20px;"><b>Select a Payment Method :</b></label>
				<br/><br/>
				<div class="method">
					<label>
						<input type="radio" name="pay" value="Visa" checked />
						<img src="http://localhost/fyp/icon/visanew.png" />
					</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
						<input type="radio" name="pay" value="Master" />
						<img src="http://localhost/fyp/icon/masternew.png" />
					</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
						<input type="radio" name="pay" value="FPX" />
						<img src="http://localhost/fyp/icon/fpxnew.png" />
					</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
						<input type="radio" name="pay" value="TNG E-Wallet" />
						<img src="http://localhost/fyp/icon/tngnew.png" />
					</label>
				</div>
			</p>
			<div style="margin-bottom:25%;"></div>
			<input type="button" name="btn" value="Continue to payment" onclick="goTo(this.form);" style="float:right;width:35%;height:40px;background-color:#191970;color:white;font-size:1.25vw;border-radius:5px;"/>
		</form>
	</div>
	
	<div class="right">
		<br/>
		<h3 style="text-align:center;">ORDER SUMMARY</h3>
		<hr/>
	
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
					<b style="float:right;"><?php echo number_format($tol, 2); ?></b>
					<br/>
					<span style="float:left;padding-left:20px;"><?php echo $row["prod_unit"]; ?></span>		
				</p>
				<div style="padding-bottom:80px;"></div>
			<?php 
			}
			?>
				<hr/>
				<p style="margin-top:20px;">Total Item<span style="float:right" ><?php echo $num; ?></span></p>
				<p style="margin-top:20px;">Order Subtotal<span style="float:right" ><?php echo "RM ".number_format($subtol,2); ?></span> </p>
				<p style="margin-top:10px;">Order Discounts<span style="float:right;color:red"><?php echo "- RM ".number_format($discount,2); ?></span></p>
				<p style="margin-top:20px;">Order Total<span style="float:right" ><?php echo "RM ".number_format($total,2); ?></span></p>
				<p style="margin-top:20px;">Delivery Fees<span style="float:right" ><?php echo "RM ".number_format($delivery,2); ?></span></p>
				<p style="margin-top:30px;"><b style="font-size:1.6vw;">AMOUNT PAYABLE</b><span style="float:right" ><?php echo "RM ".number_format($totPay,2); ?></span></p>	
		<?php 
		}		
		?>
	</div>
	</div>
	<div style="clear:both"></div>	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>
</html>