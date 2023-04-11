<?php include("dataconnection.php")?>

<html>

<head>
	<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<style>
		body{background-color: #FDF5E6;}
		h1{text-align:center;font-size: 5.5vw;margin-top:2%;margin-bottom:2%;}
		#select{background-color: #FDF5E6; position: -webkit-sticky; position: sticky; top: 0; margin-top: 20px; margin-bottom: 20px; width: 100%; height: auto; float: left;}
		#select ul{list-style-type: none; margin: 0; padding: 0; text-align: center; font-size: 16px;}
		#select ul li{float: left; width: 25%;color: gray;}
		#select ul li:hover{color: gray; }
		#select ul li a{display: block; color: gray; padding: 14px 16px; text-decoration: none; color: gray;}
		#select ul li a:hover{color: black; font-weight: bold;}
		h3{margin-bottom:10px;}
		#best, #cake, #coff, #lightmeal{width: 90%; margin-right: auto; margin-left: auto;}
		#box{width: 50%; float: left; margin-bottom: 50px; <!--border: 1px solid black;-->}
		#pic{float: left; claer: both;}
		#pic img{width: 150px; height: 150px;}
		#text{margin-left: 50px; margin-top: 3%; float: left;}
		#add button{background-color:#89cff0; border-style: none; color: white; border-radius: 5px; width: 100px; height: 35px;font-family: Times New Roman; letter-spacing: 1px; font-size: 16px;}
		#add button:hover{background-color:#57A0D3; font-weight:bold;}
	</style>
</head>

<body>
	<?php include("A.header.php");?>
	
	<h1>Add Delivery Menu : COFFEE</h1>
	<hr/>
	
	<div id="coff">
		<br/><br/>
		<h2>COFFEE</h2>
		<br/><br/>
		<?php
			$data="SELECT * FROM menu_coffee ORDER BY coffee_name ASC";
			$result=mysqli_query($connect, $data);
				
			if(mysqli_num_rows($result)>0) //if there are data
			{
				while($row=mysqli_fetch_array($result))
				{
					?>
					<div id="box">
						<div id="pic">
							<?php echo"";?><img src="<?php echo $row["coffee_img_name"]; ?>"/> <?php echo"<br>";?>
						</div>
						<div id="text">
							<h3><?php echo $row["coffee_name"]; ?> </h3>
							<!--<p>RM &nbsp;<?php echo $row["coffee_price"]; ?></p>-->
							<div id="add"><p>
								<a href="A.Add Delivery Menu Coffee.php?addcoff&id=<?php echo $row["coffee_ID"];?>">
								<button>ADD</button>
								</a>
							</p></div>
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
</body>

</html>

<?php	
	if(isset($_REQUEST["addcoff"]))
	{
		$id = $_REQUEST["id"];
		
		$duplicate=mysqli_query($connect, "SELECT * FROM menu_prod_coffee WHERE pcoffee_ID=$id");
		
		if(mysqli_num_rows($duplicate)==0)
		{
			$data="SELECT * FROM menu_coffee WHERE coffee_ID=$id";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
						
				$name=$row["coffee_name"];
				$img=$row["coffee_img_name"];
				$price=$row["coffee_price"];
				
				$add="INSERT INTO menu_prod_coffee(pcoffee_ID, pcoffee_name, pcoffee_img_name, pcoffee_price) VALUES('$id', '$name', '$img', '$price')";
				
				if(mysqli_query($connect, $add))
				{
					echo'<script>alert("ADDED SUCCESSFULLY");</script>';
					echo'<script>window.location="A.Info Delivery Menu.php";</script>';
				}
				else
				{
					echo"FAIL TO ADD".mysqli_error($connect);
				}
			}
		}
		else
		{
			echo'<script>alert("ALREADY ADDED");</script>';
			echo'<script>window.location="A.Info Delivery Menu.php";</script>';
		}
		
	}
?>