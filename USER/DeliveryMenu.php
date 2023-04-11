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
		#select{background-color: #FDF5E6; position: -webkit-sticky; position: sticky; top: 0; margin-top: 20px; margin-bottom: 20px; width: 100%; height: auto; float: left;}
		#select ul{list-style-type: none; margin: 0; padding: 0; text-align: center; font-size: 16px;}
		#select ul li{float: left; width: 25%;color: gray;}
		#select ul li:hover{color: gray; }
		#select ul li a{display: block; color: gray; padding: 14px 16px; text-decoration: none; color: gray;}
		#select ul li a:hover{color: black; font-weight: bold;}
		
		h2{font-size:40px;}
		#cake, #coff, #lightmeal{width: 90%; margin-left: auto; margin-right: auto;}
		#box{width: 50%; float: left; margin-bottom: 50px; <!--border: 1px solid black;-->}
		#pic{float: left; claer: both;}
		#pic img{width: 210px; height: 210px;}
		#text{margin-left: 40px; float: left;}
		#text h3{font-size: 20px;}
		#text p{margin-top: 20px; margin-bottom: 25px; font-size:18px;}
		#text input[type="number"]{border-style: none; height: 30px; padding-left: 9px; border-radius: 5px; font-size: 16px; width: 160px; margin-bottom: 10px;}
		#add input[type="submit"]{background-color:#89cff0; border-style: none; color: white; border-radius: 5px; width: 160px; height: 30px;font-family: Times New Roman; font-size: 16px; letter-spacing: 0.5px;}
		#add input[type="submit"]:hover{background-color:#57A0D3; font-weight:bold;}
		
		#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
		#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
		#none a{color:#878282;}
		#none a:visited{color:#878282;}
	</style>
	
	<script type="text/javascript">
		function confirmation()
		{
			answer = alert("ADDED SUCCESSFULLY");
			return answer;
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
	
	<h1>DELIVERY MENU</h1>
	<hr/>

	<div id="cake">
		<br/>
		<h2>CAKE</h2>
		<br/>
		<?php	
		$data="SELECT * FROM menu_prod_cake ORDER BY pcake_name ASC";
		$result=mysqli_query($connect, $data);
			
		if(mysqli_num_rows($result)>0) //if there are data
		{
			while($row=mysqli_fetch_array($result))
			{
				?>
				<div id="box">
					<div id="pic">
						<?php echo"";?><img src="<?php echo $row["pcake_img_name"]; ?>"/> <?php echo"<br>";?>
					</div>
					<div id="text">
						<h3><?php echo $row["pcake_name"]; ?> </h3>
						<p>RM &nbsp;<?php echo number_format($row["pcake_price"], 2); ?></p>
						<form method="post">
							<input type="number" step="1" value="1" min="1" max="100" name="quan"/>
						
						<div id="add">
							<input formaction="DeliveryMenu.php?id=<?php echo $row["pcake_ID"];?>" type="submit" value="Add To Cart" name="addcake" onclick="return confirmation();" />
						</div>
						</form>
					</div>
				</div>
				<?php
			}
			?><div style="clear:both"></div><?php
		}
		else
		{
			echo"0 results";
		}
		?>
	</div>
	
	<div id="coff">
		<br/>
		<h2>COFFEE</h2>
		<br/>
		<?php	
		$data="SELECT * FROM menu_prod_coffee ORDER BY pcoffee_name ASC";
		$result=mysqli_query($connect, $data);
			
		if(mysqli_num_rows($result)>0) //if there are data
		{
			while($row=mysqli_fetch_array($result))
			{
				?>
				<div id="box">
					<div id="pic">
						<?php echo"";?><img src="<?php echo $row["pcoffee_img_name"]; ?>"/> <?php echo"<br>";?>
					</div>
					<div id="text">
						<h3><?php echo $row["pcoffee_name"]; ?> </h3>
						<p>RM &nbsp;<?php echo number_format($row["pcoffee_price"], 2); ?></p>
						<form method="post">
							<input type="number" step="1" value="1" min="1" max="100" name="quan"/>
						
						<div id="add"> 
							<input formaction="DeliveryMenu.php?id=<?php echo $row["pcoffee_ID"];?>" type="submit" value="Add To Cart" name="addcoff" onclick="return confirmation();" />
						</div>
						</form>
					</div>
				</div>
				<?php
			}
			?><div style="clear:both"></div><?php
		}
		else
		{
			echo"0 results";
		}
		?>
	</div>
	
	<div id="lightmeal">
		<br/>
		<h2>LIGHTMEAL</h2>
		<br/>
		<?php	
		$data="SELECT * FROM menu_prod_lightmeal ORDER BY plmeal_name ASC";
		$result=mysqli_query($connect, $data);
			
		if(mysqli_num_rows($result)>0) //if there are data
		{
			while($row=mysqli_fetch_array($result))
			{
				?>
				<div id="box">
					<div id="pic">
						<?php echo"";?><img src="<?php echo $row["plmeal_img_name"]; ?>"/> <?php echo"<br>";?>
					</div>
					<div id="text">
						<h3><?php echo $row["plmeal_name"]; ?> </h3>
						<p>RM &nbsp;<?php echo number_format($row["plmeal_price"], 2); ?></p>
						<form method="post">
							<input type="number" step="1" value="1" min="1" max="100" name="quan"/>
						
						<div id="add">
							<input formaction="DeliveryMenu.php?id=<?php echo $row["plmeal_ID"];?>" type="submit" value="Add To Cart" name="addlmeal" onclick="return confirmation();" />
						</div>
						</form>
					</div>
				</div>
				<?php
			}
			?><div style="clear:both"></div><?php
		}
		else
		{
			echo"0 results";
		}
		?>
	</div>
	
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
</body>

</html>

<?php
	$uid = $_SESSION["id"];
	$data2="SELECT id FROM user WHERE id=$uid"; 
	$result2=mysqli_query($connect, $data2);
	if(mysqli_num_rows($result2)==1)
	{
		$row2=mysqli_fetch_array($result2);
		
		$userid=$row2["id"];
	}
	
	if(isset($_POST["addcake"]))
	{
		$id=$_GET["id"];
		$unit=$_POST["quan"];
		
		$duplicate=mysqli_query($connect, "SELECT * FROM cart WHERE user_ID=$userid and prod_ID=$id");
		
		if(mysqli_num_rows($duplicate)==1)
		{
			$row2=mysqli_fetch_array($duplicate);
			
			$punit=$row2["prod_unit"];
			$tol=$punit+$unit;
				
			$edit="UPDATE cart SET prod_unit='$tol' WHERE prod_ID=$id";
			
			if(mysqli_query($connect, $edit))
			{
				echo'<script>window.location="DeliveryMenu.php";</script>';
			}
			else
			{
				echo"FAIL TO ADD".mysqli_error($connect);
			}
		}
		else
		{
			$data="SELECT * FROM menu_prod_cake WHERE pcake_ID=$id";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
				
				$name=$row["pcake_name"];
				$img=$row["pcake_img_name"];
				$price=$row["pcake_price"];
				$cate="cake";
				
				$add="INSERT INTO cart(user_ID, prod_ID, prod_name, prod_img_name, prod_price, prod_unit, prod_category) VALUES('$userid', '$id', '$name', '$img', '$price', '$unit', '$cate')";
			}
			
			if(mysqli_query($connect, $add))
			{
				echo'<script>window.location="DeliveryMenu.php";</script>';
			}
			else
			{
				echo"FAIL TO ADD".mysqli_error($connect);
			}	
		}
	}
	
	if(isset($_POST["addcoff"]))
	{
		$id=$_GET["id"];
		$unit=$_POST["quan"];
		
		$duplicate=mysqli_query($connect, "SELECT * FROM cart WHERE user_ID=$userid and prod_ID=$id");
		
		if(mysqli_num_rows($duplicate)==1)
		{
			$row2=mysqli_fetch_array($duplicate);
			
			$punit=$row2["prod_unit"];
			$tol=$punit+$unit;
				
			$edit="UPDATE cart SET prod_unit='$tol' WHERE prod_ID=$id ";
			
			if(mysqli_query($connect, $edit))
			{
				echo'<script>window.location="DeliveryMenu.php";</script>';
			}
			else
			{
				echo"FAIL TO ADD".mysqli_error($connect);
			}
		}
		else
		{
			$data="SELECT * FROM menu_prod_coffee WHERE pcoffee_ID=$id";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
				
				$name=$row["pcoffee_name"];
				$img=$row["pcoffee_img_name"];
				$price=$row["pcoffee_price"];
				$cate="coffee";
				
				$add="INSERT INTO cart(user_ID, prod_ID, prod_name, prod_img_name, prod_price, prod_unit, prod_category) VALUES('$userid', '$id', '$name', '$img', '$price', '$unit', '$cate')";
			}
					
			if(mysqli_query($connect, $add))
			{
				echo'<script>window.location="DeliveryMenu.php";</script>';
			}
			else
			{
				echo"FAIL TO ADD".mysqli_error($connect);
			}
		}
	}
	
	if(isset($_POST["addlmeal"]))
	{
		$id=$_GET["id"];
		$unit=$_POST["quan"];
		
		$duplicate=mysqli_query($connect, "SELECT * FROM cart WHERE user_ID=$userid and prod_ID=$id");
		
		if(mysqli_num_rows($duplicate)==1)
		{
			$row2=mysqli_fetch_array($duplicate);
			
			$punit=$row2["prod_unit"];
			$tol=$punit+$unit;
				
			$edit="UPDATE cart SET prod_unit='$tol' WHERE prod_ID=$id ";
			
			if(mysqli_query($connect, $edit))
			{
				echo'<script>window.location="DeliveryMenu.php";</script>';
			}
			else
			{
				echo"FAIL TO ADD".mysqli_error($connect);
			}
		}
		else
		{
			$data="SELECT * FROM menu_prod_lightmeal WHERE plmeal_ID=$id";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
				
				$name=$row["plmeal_name"];
				$img=$row["plmeal_img_name"];
				$price=$row["plmeal_price"];
				$cate="lightmeal";
				
				$add="INSERT INTO cart(user_ID, prod_ID, prod_name, prod_img_name, prod_price, prod_unit, prod_category) VALUES('$userid', '$id', '$name', '$img', '$price', '$unit', '$cate')";
			}
					
			if(mysqli_query($connect, $add))
			{
				echo'<script>window.location="DeliveryMenu.php";</script>';
			}
			else
			{
				echo"FAIL TO ADD".mysqli_error($connect);
			}
		}
	}
?>