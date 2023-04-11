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
			$data="SELECT * FROM menu_juice WHERE juice_id=$id";
			$result=mysqli_query($connect, $data);
				
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
					
				$name=$row["juice_name"];
				$img=$row["juice_img_name"];
				$price=$row["juice_price"];
			}
		}
	?>
	
	<h1>Edit Product : JUICE</h1>
	<hr/>
	<br/><br/>
	<form method="post">
		<h2>Details</h2>
		<br/>
		<input type="hidden" name="juice_id" value="<?php echo $id; ?>">
		
		<p id="name">
		<label>Juice Name</label>
		<input type="text" name="juice_name" required size="30" maxlength="100" value="<?php echo $name; ?>"/>
		</p>
		<br/>
		<p id="img">
		<label>Juice Image Name</label>
		<input type="text" name="juice_img_name" required size="30" maxlength="100" value="<?php echo $img; ?>"/>
		</p>
		<br/>
		<p id="price">
		<label>Juice Price</label>
		<label style="margin-left:109px;">RM</label>
		<input type="number" name="juice_price" step="0.10" value="<?php echo $price; ?>" min="0.10" max="20" required />
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
		$juice_id = $_POST["juice_id"];
		$juice_name=$_POST["juice_name"];
		$juice_img_name=$_POST["juice_img_name"];
		$juice_price=$_POST["juice_price"];
		
		$edit=mysqli_query($connect, "UPDATE menu_juice SET juice_name='$juice_name', juice_img_name='$juice_img_name', juice_price='$juice_price' WHERE juice_ID=$juice_id");
		
		if($edit)
		{
			echo'<script>alert("UPDATED SUCCESSFULLY");</script>';
			echo'<script>window.location="A.Info Juice.php";</script>';
		}
	}
?>
