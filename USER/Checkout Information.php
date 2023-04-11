<!DOCTYPE HTML>

<?php
	include("dataconnection.php");
	session_start();
?>

<html>
<head>
<title>Bleu Foncé</title>
<l<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
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

.whhh{
	width:90%;
	margin-left:auto;
	margin-right:auto;
}

.left{
float:left;
width:50%;
}

input[type="submit"]:hover{
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

.apply button:hover{
text-decoration:none;
cursor:pointer;
text-decoration:underline;
}

#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
#none a{color:#878282;}
#none a:visited{color:#878282;}
</style>	
<script type="text/javascript">
function goBack()
{
	window.history.back();
}

//Smooth Scroll
$(document).ready(function()
{
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

function validateForm()
{
	var a = document.getElementById('btn');
	if(a.clicked == true)
	{
		return true;
	}
	else 
	{
		alert("Please confirm with shipping details");
		return false;
	}
}

function validateForm2()
{
	var a = document.getElementById('btn2');
	if(a.clicked == true)
	{
		return true;
	}
	else 
	{
		alert("Please confirm with shipping details");
		return false;
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
	<div class="whhh">
	<div class="right" id="section2">
		<br/>
		<h3 style="text-align:center;">ORDER SUMMARY</h3>
		<hr/>
		<?php
		$uid = $_GET["uid"];
		$check = $_GET["check"];
		$query = "select * from cart where user_ID = $uid ORDER BY cart_ID ASC ";
		$result = mysqli_query($connect, $query);
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
					<img src="<?php echo $row["prod_img_name"]?>" style="width:80px;height:80px;float:left;"/>
					<b style="float:left;padding-left:20px;"><?php echo $row["prod_name"]; ?></b>
					<b style="float:right;"><?php echo "RM ".number_format($tol, 2); ?></b>
					<br/>
					<span style="float:left;padding-left:20px;font-size:16px;"><?php echo "Qty: ".$row["prod_unit"]; ?></span>		
				</p>
				<div style="padding-bottom:80px;"></div>
			<?php 
			}
			?>
				<hr/>
				<div class="apply">
					<form method="post">	
						<input type="text" name="Dcode" size="45" placeholder="Discount code" style="margin-top:10px;background-color:#FDF5E6;border-radius:5px;padding-left:20px;height:30px;"/>
						<a><button name="code" style="margin-bottom:10px;background-color:#FFDAB9;border-radius:5px;padding-left:10px;height:30px;width:100px;border:none;">APPLY</button></a>
					</form>
				</div>
				<?php
				$dis = "NO";
				
				if(isset($_POST["code"]))
				{
					$code = $_POST["Dcode"];
					
					if($subtol > 50)
					{
						if($code == "bleufonce5")
						{
							echo '<span style="font-size:12px;color:red;">'."Discound Applied".'</span>';
							$dis = "YES";
						}
						else
						{
							echo '<span style="font-size:12px;color:red;">'."Please Enter Correct Discount Code".'</span>';
						}
					}
					else
					{
						echo '<span style="font-size:12px;color:red;">'."Discount Cannot Be Applied due to Insufficient Requirement".'</span>';
					}
				}
				?>
				<hr/>
				<p style="margin-top:20px;">Total Item<span style="float:right" ><?php echo $num; ?></span></p>
				<p style="margin-top:20px;">Order Subtotal (inclusive of 6% SST)<span style="float:right" ><?php echo "RM ".number_format($subtol,2); ?></span> </p>
				<p style="margin-top:10px;">Order Discounts 
					<span style="float:right;color:red;" > 
						<?php
						if($dis=="YES")
						{
							$discount = 5;
							echo "- RM ".number_format($discount,2);
						} 
						else
						{
							$discount = 0;
							echo "- RM ".number_format($discount,2);
						}
						?> 
					</span> 
				</p>
				<p style="margin-top:20px;">Order Total 
					<span style="float:right" > 
						<?php
						if($dis=="YES")
						{
							$total = $subtol-5;
							echo "RM ".number_format($total,2);
						} 
						else
						{
							$total = $subtol-0;
							echo "RM ".number_format($total,2);
						}
						?> 
					</span> 
				</p>
				<p style="margin-top:20px;">Delivery Fees 
					<span style="float:right" > 
						<?php 
							$delivery="NO";
							
							if($total<40)
							{	
								$deliFee=5.5;
								echo "RM ".number_format($deliFee,2);
								$delivery="YES";
							}
							else
							{
								$deliFee=0;
								echo "RM ".number_format($deliFee,2);
							}
						?>
					</span>
				</p>
				<p style="margin-top:30px;"><b style="font-size:1.6vw;">AMOUNT PAYABLE</b>
					<span style="float:right;font-size:1.6vw;" > 
						<?php 
						if($delivery=="YES")
							$amount = $total+5.5;
						else
							$amount = $total+0;
						
						echo "RM ".number_format($amount,2); 
						?> 
					</span>
				</p>
		<?php 
		}
		?>
	</div>	
	
	<div class="left" id="section1">
	<?php
	$checkdata = "SELECT * FROM shipping_detail where user_ID = $uid";
	$resultdata = mysqli_query($connect, $checkdata);
	if(mysqli_num_rows($resultdata)>0) //if already got data
	{
		while($row=mysqli_fetch_assoc($resultdata))
		{
	?>
		<form method="post" >
			<h2>Shipping Address</h2>
			<br/>
			<div class="names" width="100%">
			<input type="text" value="<?php echo $row["first_name"]?>" name="fname" placeholder="First Name" style="width:49%;height:35px;padding-left:10px;float:left;" required />
			<input type="text" value="<?php echo $row["last_name"]?>" name="lname" placeholder="Last Name" style="width:49%;height:35px;padding-left:10px; float:right;" required />
			</div>
			<br/><br/>
			<input type="text" value="<?php echo $row["address"]?>" name="address" placeholder="Address" style="width:100%;height:35px;padding-left:10px;" required />
			<br/><br/>
			<div class="postcity" width="100%">
			<input type="text" value="<?php echo $row["postcode"]?>" name="postcode" placeholder="Postcode" style="width:49%;height:35px;padding-left:10px;float:left;" required />
			<input type="text" value="<?php echo $row["city"]?>" name="city" placeholder="City" style="width:49%;height:35px;padding-left:10px; float:right;" required />
			</div>
			<br/><br/>
			<p style="border:0.5px solid gray;padding-top:10px;background-color:white;width:47%;height:30px;padding-left:10px;">Selangor</p> 
			<br/><br/>
			
			<h2>Contact Information</h2>
			<br/>
			<input type="text" value="<?php echo $row["email"]?>" name="email" placeholder="Email Address" style="width:47%;height:35px;padding-left:10px;" required />
			<br/><br/>
			<input type="text" value="<?php echo $row["phone"]?>" name="phone" placeholder="Phone Number" style="width:47%;height:35px;padding-left:10px;" required />
			<br/><br/><br/>
			<div class="buttt" style="width:100%;">
			<?php 
			if($check=="2")
			{
			?>
			<a href="#section2"><input type="submit" name="confirm" value="Confirm" style="float:left;margin-bottom:30px;width:35%;height:40px;background-color:#191970;color:white;font-size:18px;border-radius:5px;"/></a>
			<button value="Continue" style="float:right;margin-bottom:30px;width:35%;height:40px;background-color:#191970;color:white;font-size:18px;border-radius:5px;"><a style="color:white;text-decoration:none;" href="Checkout Payment.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $deliFee; ?>&totPay=<?php echo $amount; ?>" >Continue</a></button>
			<?php
			}
			else
			{
			?>
			<a href="#section2"><input id="btn" type="submit" name="confirm" value="Confirm" style="float:left;margin-bottom:30px;width:35%;height:40px;background-color:#191970;color:white;font-size:18px;border-radius:5px;"/></a>
			<button value="Continue" style="float:right;margin-bottom:30px;width:35%;height:40px;background-color:#191970;color:white;font-size:18px;border-radius:5px;"><a style="color:white;text-decoration:none;" href="Checkout Payment.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $deliFee; ?>&totPay=<?php echo $amount; ?>" onclick="return validateForm()">Continue</a></button>
			<?php
			}
			?>
			
			</div>
		</form>
	<?php
		}
	}
	else //if new user
	{
	?>
		<form method="post" >
			<h2>Shipping Information</h2>
			<br/>
			<div class="names" width="100%">
			<input type="text" name="fname" placeholder="First Name" style="width:49%;height:35px;padding-left:10px;float:left;" required />
			<input type="text" name="lname" placeholder="Last Name" style="width:49%;height:35px;padding-left:10px; float:right;" required />
			</div>
			<br/><br/>
			<input type="text" name="address" placeholder="Address" style="width:100%;height:35px;padding-left:10px;" required />
			<br/>
			<div class="postcity" width="100%">
			<input type="text" name="postcode" placeholder="Postcode" style="width:49%;height:35px;padding-left:10px;float:left;" required />
			<input type="text" name="city" placeholder="City" style="width:49%;height:35px;padding-left:10px; float:right;" required />
			</div>
			<br/><br/>
			<p style="border:0.5px solid gray;padding-top:10px;background-color:white;width:47%;height:30px;padding-left:10px;">Selangor</p> 
			<br/><br/>
			
			<h2>Contact Information</h2>
			<br/>
			<input type="text" name="email" placeholder="Email Address" style="width:47%;height:35px;padding-left:10px;" required />
			<br/>
			<input type="text" name="phone" placeholder="Phone Number" style="width:47%;height:35px;padding-left:10px;" required />
			<br/><br/><br/>
			<div class="buttt" style="width:100%;">
			<a href="#section2"><input type="submit" id="btn2" name="confirm" value="Confirm" style="float:left;margin-bottom:30px;width:35%;height:40px;background-color:#191970;color:white;font-size:18px;border-radius:5px;"/></a>
			<button value="Continue" style="float:right;margin-bottom:30px;width:35%;height:40px;background-color:#191970;color:white;font-size:18px;border-radius:5px;"><a style="color:white;text-decoration:none;" href="Checkout Payment.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $deliFee; ?>&totPay=<?php echo $amount; ?>" onclick="return validateForm2()" >Continue</a></button>
			</div>
		</form>
			
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

<?php
if(isset($_POST["confirm"]))
{
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$postcode = $_POST["postcode"];
	$city = $_POST["city"];
	$state = "Selangor";
	//$deliAddress = $address.", ".$postcode.", ".$city.", ".$state;
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	
	$check = "select * from shipping_detail where user_ID = $uid";
	$result = mysqli_query($connect, $check);
	
	if(mysqli_num_rows($result)>0) //if already got data
	{
		$query = "UPDATE shipping_detail SET
				first_name = '$fname',  
				last_name = '$lname',
				address = '$address',
				postcode = '$postcode',
				city = '$city',
				state = 'Selangor',
				email = '$email',
				phone = '$phone'
				WHERE user_ID = $uid";
		$r = mysqli_query($connect, $query);
	}
	else
	{
		$query = "INSERT INTO shipping_detail (user_ID, first_name, last_name, address, postcode, city, state, email, phone) VALUES ($uid, '$fname', '$lname', '$address', '$postcode', '$city', '$state', '$email', '$phone')";
		$r = mysqli_query($connect, $query);
	}
	
	if($r)
	{
		$check="2";
		?>
		<script>
		window.location="Checkout Information.php?uid=<?php echo $uid;?>&check=<?php echo $check;?>";
		</script>
		<?php
	}
}	
?>