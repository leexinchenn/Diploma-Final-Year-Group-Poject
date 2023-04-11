<?php include("dataconnection.php")?>

<html>
	
<head>
	<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<style>
		body{background-color: #FDF5E6;}
		h1{text-align:center;font-size: 5.5vw;margin-top:2%;margin-bottom:2%;}
		
		form{font-size:120%; width:90%; margin-left: auto; margin-right: auto;}
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
	<h1>Add New Product : LIGHTMEAL</h1>
	<hr/>
	<br/><br/>
	<form method="post">
		<h2>Details</h2>
		<br/>
		<p id="name">
		<label>Lightmeal Name</label>
		<input type="text" name="lm_name" required size="30" maxlength="100"/>
		</p>
		<br/>
		<p id="img">
		<label>Lightmeal Image Name</label>
		<input type="text" placeholder="eg: lightmeal/sandwich.jpg" name="lm_img_name" required size="30" maxlength="100"/>
		</p>
		<br/>
		<p id="price">
		<label>Lightmeal Price</label>
		<label style="margin-left:109px;">RM</label>
		<input type="number" step="0.10" value="0.10" min="0.10" max="20" name="lm_price" required />
		</p>
		<br/>
		<p id="subbtn">
		<input type="submit" name="subbtn" value="SUBMIT"/>
		</p>
	</form>
</body>

</html>

<?php
	function getid()
	{
		return rand(00000,99999);
	}
	
	if(isset ($_POST["subbtn"]))
	{
		$lm_id=getid();
		$lm_name=$_POST["lm_name"];
		$lm_img_name=$_POST["lm_img_name"];
		$lm_price=$_POST["lm_price"];
		
		$add="insert into menu_lightmeal(lmeal_ID, lmeal_name, lmeal_img_name, lmeal_price) values('$lm_id', '$lm_name', '$lm_img_name', '$lm_price')";
		if(mysqli_query($connect, $add))
		{
			echo'<script>alert("ADDED SUCCESSFULLY");</script>';
			echo'<script>window.location="A.Info Lightmeal.php";</script>';
		}
		else
		{
			echo"FAIL TO ADD".mysqli_error($connect);
		}
	}
?>