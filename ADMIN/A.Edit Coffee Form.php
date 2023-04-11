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
			$data="SELECT * FROM menu_coffee WHERE coffee_id=$id";
			$result=mysqli_query($connect, $data);
				
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
					
				$name=$row["coffee_name"];
				$img=$row["coffee_img_name"];
				$price=$row["coffee_price"];
			}
		}
	?>
	
	<h1>Edit Product : COFFEE</h1>
	<hr/>
	<br/><br/>
	<form method="post">
		<h2>Details</h2>
		<br/>
		<input type="hidden" name="coff_id" value="<?php echo $id; ?>">
		
		<p id="name">
		<label>Coffee Name</label>
		<input type="text" name="coff_name" required size="30" maxlength="100" value="<?php echo $name; ?>"/>
		</p>
		<br/>
		<p id="img">
		<label>Coffee Image Name</label>
		<input type="text" name="coff_img_name" required size="30" maxlength="100" value="<?php echo $img; ?>"/>
		</p>
		<br/>
		<p id="price">
		<label>Coffee Price</label>
		<label style="margin-left:109px;">RM</label>
		<input type="number" name="coff_price" step="0.10" value="<?php echo $price; ?>" min="0.10" max="20" required />
		</p>
		<br/>
		<p id="subbtn">
		<?php if($update==true):?>
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
		$coff_id = $_POST["coff_id"];
		$coff_name=$_POST["coff_name"];
		$coff_img_name=$_POST["coff_img_name"];
		$coff_price=$_POST["coff_price"];
		
		$edit=mysqli_query($connect, "UPDATE menu_coffee SET coffee_name='$coff_name', coffee_img_name='$coff_img_name', coffee_price='$coff_price' WHERE coffee_ID=$coff_id");
		$edit=mysqli_query($connect, "UPDATE menu_prod_coffee SET pcoffee_name='$coff_name', pcoffee_img_name='$coff_img_name', pcoffee_price='$coff_price' WHERE pcoffee_ID=$coff_id");
		$edit=mysqli_query($connect, "UPDATE cart SET prod_name='$coff_name', prod_img_name='$coff_img_name', prod_price='$coff_price' WHERE prod_ID=$coff_id");

		if($edit)
		{
			echo'<script>alert("UPDATED SUCCESSFULLY");</script>';
			echo'<script>window.location="A.Info Coffee.php";</script>';
		}
	}
?>
