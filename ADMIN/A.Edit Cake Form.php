<?php include("dataconnection.php")?>

<html>
	
<head>
	<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<style>
		body{background-color: #FDF5E6;}
		h1{text-align:center;font-size: 5.5vw;margin-top:2%;margin-bottom:2%;}
		form{margin-left:50px; font-size:120%;}
		#name input[type="text"]{border-style: none; height: 25px; margin-left: 103px; border-radius: 5px;}
		#img input[type="text"]{border-style: none; height: 25px; margin-left: 45px; border-radius: 5px;}
		#price input[type="number"]{border-style: none; height: 25px; margin-left:5px; border-radius: 5px;}
		#name input[type="text"]:hover{background-color: #ECECEC;}
		#img input[type="text"]:hover{background-color: #ECECEC;}
		#price input[type="number"]:hover{background-color: #ECECEC;}
		#name input[type="text"]:focus{background-color: #ECECEC;}
		#img input[type="text"]:focus{background-color: #ECECEC;}
		#price input[type="number"]:focus{background-color: #ECECEC;}
		#subbtn input[type="submit"]{margin-top:30px; width: 170px; height:30px; letter-spacing: 1px; border-radius: 5px; border-width:1px; background-color:f2f2f2; font-size:16px; font-family:times new roman;}
		#subbtn input[type="submit"]:hover{font-weight: bold; background-color: #e0dede;}
	</style>
</head>

<body>
	<?php include("A.header.php");?>
	<?php
		if(isset($_REQUEST["edit"]))
		{
			$id=$_REQUEST["id"];
			$update=true;
			$data="SELECT * FROM menu_cake WHERE cake_ID=$id";
			$result=mysqli_query($connect, $data);
				
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
					
				$name=$row["cake_name"];
				$img=$row["cake_img_name"];
				$price=$row["cake_price"];
			}
		}
	?>
	
	<h1>Edit Product : CAKE</h1>
	<hr/>
	<br/><br/>
	<form method="post">
		<h2>Details</h2>
		<br/>
		<input type="hidden" name="cake_id" value="<?php echo $id; ?>">
		
		<p id="name">
		<label>Cake Name</label>
		<input type="text" name="cake_name" required size="30" maxlength="100" value="<?php echo $name; ?>"/>
		</p>
		<br/>
		<p id="img">
		<label>Cake Image Name</label>
		<input type="text" name="cake_img_name" required size="30" maxlength="100" value="<?php echo $img; ?>"/>
		</p>
		<br/>
		<p id="price">
		<label>Cake Price</label>
		<label style="margin-left:109px;">RM</label>
		<input type="number" name="cake_price" step="0.10" value="<?php echo $price; ?>" min="0.10" max="20" required />
		</p>
		<br/>
		<p id="subbtn">
		<?php if($update==true): ?>
			<input type="submit" name="subbtn" value="UPDATE"/>
		<?php else: ?>
			<input type="submit" name="subbtn" value="SAVE"/>
		<?php endif ?>
		</p>
	</form>
</body>

</html>

<?php
	if(isset($_POST["subbtn"]))
	{
		$cake_id = $_POST["cake_id"];
		$cake_name=$_POST["cake_name"];
		$cake_img_name=$_POST["cake_img_name"];
		$cake_price=$_POST["cake_price"];
		
		$edit=mysqli_query($connect, "UPDATE menu_cake SET cake_name='$cake_name', cake_img_name='$cake_img_name', cake_price='$cake_price' WHERE cake_ID=$cake_id");
		$edit=mysqli_query($connect, "UPDATE menu_prod_cake SET pcake_name='$cake_name', pcake_img_name='$cake_img_name', pcake_price='$cake_price' WHERE pcake_ID=$cake_id");
		$edit=mysqli_query($connect, "UPDATE cart SET prod_name='$cake_name', prod_img_name='$cake_img_name', prod_price='$cake_price' WHERE prod_ID=$cake_id");

		if($edit)
		{
			echo'<script>alert("UPDATED SUCCESSFULLY");</script>';
			echo'<script>window.location="A.Info Cake.php";</script>';
		}
	}
?>
