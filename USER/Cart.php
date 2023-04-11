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
		body{background-color: #FDF5E6;}
		h1{text-align: center; font-size: 5.5vw;}

		#cart{width: 90%; margin-left: auto; margin-right: auto; margin-top: 20px;}
		#top{width: 54.77%; height: 30px; float:right; text-align: right; border-spacing: 0px; margin-top:15px;}
		#top tr, th{padding-right: 10px; font-size: 1.5vw;}
		#box{width: 100%; height: 45%; border-left: none; border-right:none; margin-top: 20px; margin-bottom: 20px;<!--border: 0.1px solid black;-->}
		#img{width: 21%; float: left; height: 100%; margin-top: auto; margin-bottom: auto;}
		#img img{width: 100%; height: auto;}
		#text{width: 24%; float: left; height: 100%;}
		#text h3{padding-top: 14%; margin-left: 30px; font-family: Garamond, serif; font-size: 2vw;}
		#text #rubbish {padding-top: 8%;}
		#text #rubbish button{margin-left: 30px; background-color: #d13d5a; border: none; border-radius: 5px; width: 60px; height: 30px;}
		#text #rubbish button:hover{background-color: #ba2d49;}
		#text #rubbish button img{width: 18px; height: 18px;}
		#table{border-spacing: 0px; float: left; width: 54.77%; height:100%; text-align: right; font-family:Garamond, serif;}
		#table tr, td{padding-right: 10px; vertical-align: top; font-size: 1.5vw;}
		#table input[type="number"]{border-style: solid; border-color: #d4d4d4; border-width: 0.1px; background-color: transparent; width: 40%; height: 11.2%; font-size: 1.5vw; font-family:Garamond, serif; border-radius:5px; padding-left: 10px; margin-top: 23%;}
		
		#subtol{width: 100%; margin-left: auto; margin-right: auto; text-align: right; font-family: Garamond, serif; font-size: 25px; margin-top: 35px; margin-bottom: 35px;} 
		
		#next{width: 100%; margin-left: auto; margin-right: auto; height: 45px; text-align:right;}
		#next #more button{background-color: transparent; border-style:solid; border-width: 0.1px; border-radius:5px; height: 100%; width: 135px; font-family: Garamond, serif; font-size:18px; font-weight: bold;}
		#next #more button:hover{background-color: #ede2ce;}
		#next #check button{background-color:#303030; color: white; border-style:solid; border-width: 0.1px; border-color:#303030; border-radius:5px; height: 100%; width: 140px; font-family:Garamond, serif; font-size:18px; font-weight: bold;}
		#next #check button:hover{background-color:#0f0f0f;}
		#next input[type="submit"]{background-color: transparent; border-style:solid; border-width: 0.1px; border-radius:5px; height: 100%; width:150px; font-family:Garamond, serif; font-size:18px; font-weight: bold;}
		#next input[type="submit"]:hover{background-color: #ede2ce;}
		
		#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%; min-height:240px;}
		#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
		#none a{color:#878282;}
		#none a:visited{color:#878282;}
	</style>
	
	<script type="text/javascript">
		function confirmation()
		{
			answer = alert("ADDED SUCCESSFULLY TO CART");
			return answer;
		}
		
		function delconfirmation()
		{
			answer = confirm("Do you sure want to delete?");
			return answer;
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
							<a href="http://localhost/fyp/USER/Menudtghtmeal.php">LIGHTMEAL</a>
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

	<h1>Your Cart</h1>
	<hr/>
	
	
		
		<?php
			$uid=$_SESSION["id"];
			$data="SELECT * FROM cart WHERE user_ID=$uid ORDER BY cart_ID ASC"; 
			$result=mysqli_query($connect, $data);

			$subtol=0;
			
			if(mysqli_num_rows($result)>0) //if there are data
			{
				?>
				<div id="cart">
				<table id="top">
					<tr>
						<th style="width: 0.5%"></th>
						<th style="width: 0.5%"></th>
						<th style="width: 33%">Price</th>
						<th style="width: 33%">Quantity</th>
						<th style="width: 33%">Total</th>
					</tr>
				</table>
				<div style="clear:both"></div>
				<hr/>
				<?php
				while($row=mysqli_fetch_assoc($result))
				{
					$iid=$row["prod_ID"];
					$tol=$row["prod_price"]*$row["prod_unit"];
					
					$subtol+=$tol;
					
					?>					
					<div id="box">
						<div id="img">
							<p>
								<img src="<?php echo $row["prod_img_name"]; ?>"/>
							</p>
						</div>
						<div id="text">
							<h3><?php echo $row["prod_name"]; ?></h3>
							<div id="rubbish">
								<form method="post">
									<button  formaction="Cart.php?delcart&pid=<?php echo $iid;?>" name="delcart" onclick="return delconfirmation();">
										<img src="http://localhost/fyp/icon/delete.png"/>
									</button>
								<form>
							</div>
						</div>
						<table id="table">
							<tr>
								<td style="width: 0.5%"></td>
								<td style="width: 0.5%"></td>
								<td style="width: 33%; padding-top: 7.5%">RM <?php echo number_format($row["prod_price"], 2); ?></td>
								<td style="width: 33%">
								<form method="post" id="updd">
									<?php $id[]=$row["prod_ID"]?>
									<input type="number"  name="unit[]" step="1" min="1" value="<?php echo $row["prod_unit"]; ?>"/>
								</td>
								<td style="width: 33%; padding-top: 7.5%">RM <?php echo number_format($tol, 2); ?></td>
							</tr>
						</table>
					</div>
					<hr/>
					<?php
				}
				?>
				<div id="subtol">
					<p><b>Subtotal &nbsp;&nbsp;&nbsp;</b> RM <?php echo number_format($subtol, 2);?></p>
					<p style="padding-top: 15px; font-size: 18px;"><b>taxes and shipping fee will be calculated at checkout</b></p>
				</div>
				
				<div id="next">
					<span id="more"><button formaction="DeliveryMenu.php">ADD ITEMS</button></span>
					<span id="upd"><input type="submit" name="upd" value="UPDATE CART"/></span></form>
					<a href="Checkout Information.php?uid=<?php echo $uid; ?>&check=<?php $check="1"; echo $check;?>"><span id="check"><button>CHECK OUT</button></span></a>
				</div><?php
			}
			else
			{
				?>
				<div id="none">
					<p><b>Your cart is currently empty.</b></p>
					<p><b>Continue browsing <a href="DeliveryMenu.php">here</a>.</b></p>
				</div>
				<br/><br/><br/><br/><br/>
				<?php
			}
		?>
	</div>
	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>

</html>

<?php
	if(isset($_POST["upd"]))
	{
		$count=mysqli_num_rows($result);
		
		for($i=0; $i<$count; $i++)
		{
			$unit1[$i]=$_POST["unit"][$i];
			
			$edit="UPDATE cart SET prod_unit='$unit1[$i]' WHERE prod_ID='$id[$i]'";
			$result1=mysqli_query($connect, $edit);
		}
		
		if($result1)
		{
			echo'<script>window.location="Cart.php";</script>';
		}
	}
	
	if(isset($_POST["delcart"]))
	{
		echo"yes";
		$pid = $_GET["pid"];
		$suc=mysqli_query($connect, "DELETE FROM cart WHERE prod_ID=$pid");
		
		if($suc)
		{
			echo'<script>window.location="Cart.php";</script>';
		}
	}
	
	
?>