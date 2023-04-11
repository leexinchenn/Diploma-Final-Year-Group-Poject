<?php include("dataconnection.php")?>

<html>

<head>
	<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<style>
		body{background-color: #FDF5E6;}
		h1{text-align:center;font-size: 5.5vw;margin:30px;}
		#add{text-align:right; margin-right: auto; margin-left: auto; margin-top: 2%; width:90%;}
		#add a{color: white; text-decoration: none;}
		#add a:visited{border:none;}
		#add button{color:white; background-color: #4682B4; width: 150px; border:none;}
		#add button:hover{color:white; background-color: #3C6F99; width: 150px; border:none;}
		#addtext{padding-left: 5px;}
		
		h2{width:90%; margin-right: auto; margin-left: auto; font-size: 30px;}
		#table{margin-left:auto; margin-right:auto; margin-bottom: 70px;border-spacing: 0px; border: 1px solid black; border-left:none; border-right:none;width: 90%;}
		#table tr{height: 40px; font-size: 18px;}
		#table th{background-color: #D3D3D3;}
		#table th, td{text-align: left}
		#table td{border-bottom: 1px solid black;}
		#table tdimg{}
		#thbtn{margin: auto;}
		#table button{style="background-color:#4682B4;"}
		#btntext{padding-left: 8px;}
		#edit button{background-color: #4682B4;}
		#edit button:hover{background-color: #3C6F99; }
		#dlt button{background-color:#DC143C;}
		#dlt button:hover{background-color:#BF1134;}
		button{margin: auto; width:90px; height:30px; border:none; border-radius:3px; color: white; text-align: center;}
	</style>
	
	<script type="text/javascript">
		function confirmation()
		{
			answer = confirm("Do you sure want to delete?");
			return answer;
		}
	</script>
</head>

<body>
	<?php include("A.header.php");?>
	<h1>DELIVERY MENU</h1>
	<hr/><br/><br/><br/>
	
	<h2>Cake</h2>
	<div id="add">
		<a href="A.Add Delivery Menu Cake.php">
			<button>
				<img src="http://localhost/fyp/icon/add.png" width="10px" style="padding-top: 3px;" />
				<span id="addtext">Add New Product</span>
			</button>
		</a>
	</div>
	<br/>
	
	<table id="table">
		<tr>
			<th style="width: 100px; padding-left:5px;">ID</th>
			<th style="width: 200px; ">Image</th>
			<th style="width: 300px; ">Name</th>
			<th style="width: 100px; padding-left:5px;">Price</th>
			
			<div class="thbtn">
			<th style="width: 100px; "></th>
			</div>
		</tr>
		<?php
			$data="SELECT * FROM menu_prod_cake ORDER BY pcake_name ASC";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)>0) //if there are data
			{
				while($row=mysqli_fetch_array($result))
				{
					?>
					<tr>
						<td style="padding-left:5px;"><?php echo $row["pcake_ID"]; ?></td>
						<td><img src="<?php echo $row["pcake_img_name"]; ?>" width="100px" style="margin-top: 5px; margin-bottom:5px;"/></td>
						<td><?php echo $row["pcake_name"]; ?></td>
						<td style="padding-left:5px;"><?php echo number_format($row["pcake_price"], 2); ?></td>

						
						<td>
							<div id="dlt">
								<a href="A.Info Delivery Menu.php?delcake&id=<?php echo $row["pcake_ID"];?>" onclick="return confirmation();">
								<button>
									<img src="http://localhost/fyp/icon/delete.png" width="11px" style="padding-top:2.5px;"/>
									<span id="btntext">Delete</span>
								</button>
								</a>
							</div>
						</td>
					</tr>
					<?php
				}
			}
			
			else
			{
				echo"0 results";
			}
		?>
	</table>
	
	<h2>Coffee</h2>
	<div id="add">
		<a href="A.Add Delivery Menu Coffee.php">
			<button>
				<img src="http://localhost/fyp/icon/add.png" width="10px" style="padding-top: 3px;" />
				<span id="addtext">Add New Product</span>
			</button>
		</a>
	</div>
	<br/>
	
	<table id="table">
		<tr>
			<th style="width: 12%; padding-left:5px;">ID</th>
			<th style="width: 25%;">Image</th>
			<th style="width: 33%;">Name</th>
			<th style="width: 15%; padding-left:5px;">Price</th>
			
			<div class="thbtn">
			<th style="width: 15%; "></th>
			</div>
		</tr>
		<?php
			$data="SELECT * FROM menu_prod_coffee ORDER BY pcoffee_name ASC";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)>0) //if there are data
			{
				while($row=mysqli_fetch_array($result))
				{
					?>
					<tr>
						<td style="padding-left:5px;"><?php echo $row["pcoffee_ID"]; ?></td>
						<td><img src="<?php echo $row["pcoffee_img_name"]; ?>" width="100px" style="margin-top: 5px; margin-bottom:5px;"/></td>
						<td><?php echo $row["pcoffee_name"]; ?></td>
						<td style="padding-left:5px;"><?php echo number_format($row["pcoffee_price"], 2); ?></td>

						
						<td>
							<div id="dlt">
								<a href="A.Info Delivery Menu.php?delcoff&id=<?php echo $row["pcoffee_ID"];?>" onclick="return confirmation();">
								<button>
									<img src="http://localhost/fyp/icon/delete.png" width="11px" style="padding-top:2.5px;"/>
									<span id="btntext">Delete</span>
								</button>
								</a>
							</div>
						</td>
					</tr>
					<?php
				}
			}
			
			else
			{
				echo"0 results";
			}
		?>
	</table>
	
	<h2>Lightmeal</h2>
	<div id="add">
		<a href="A.Add Delivery Menu Lightmeal.php">
			<button>
				<img src="http://localhost/fyp/icon/add.png" width="10px" style="padding-top: 3px;" />
				<span id="addtext">Add New Product</span>
			</button>
		</a>
	</div>
	<br/>
	
	<table id="table">
		<tr>
			<th style="width: 100px; padding-left:5px;">ID</th>
			<th style="width: 200px; ">Image</th>
			<th style="width: 300px; ">Name</th>
			<th style="width: 100px; padding-left:5px;">Price</th>
			
			<div class="thbtn">
			<th style="width: 100px; "></th>
			</div>
		</tr>
		<?php
			$data="SELECT * FROM menu_prod_lightmeal ORDER BY plmeal_name ASC";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)>0) //if there are data
			{
				while($row=mysqli_fetch_array($result))
				{
					?>
					<tr>
						<td style="padding-left:5px;"><?php echo $row["plmeal_ID"]; ?></td>
						<td><img src="<?php echo $row["plmeal_img_name"]; ?>" width="100px" style="margin-top: 5px; margin-bottom:5px;"/></td>
						<td><?php echo $row["plmeal_name"]; ?></td>
						<td style="padding-left:5px;"><?php echo number_format($row["plmeal_price"], 2); ?></td>

						
						<td>
							<div id="dlt">
								<a href="A.Info Delivery Menu.php?dellmeal&id=<?php echo $row["plmeal_ID"];?>" onclick="return confirmation();">
								<button>
									<img src="http://localhost/fyp/icon/delete.png" width="11px" style="padding-top:2.5px;"/>
									<span id="btntext">Delete</span>
								</button>
								</a>
							</div>
						</td>
					</tr>
					<?php
				}
			}
			
			else
			{
				echo"0 results";
			}
		?>
	</table>
</body>

</html>

<?php
	if(isset($_REQUEST["dellmeal"])) 
	{
		$id = $_REQUEST["id"]; 
		mysqli_query($connect, "DELETE FROM menu_prod_lightmeal WHERE plmeal_ID=$id");
		mysqli_query($connect, "DELETE FROM cart WHERE prod_ID=$id");
		
		echo'<script>window.location="A.Info Delivery Menu.php";</script>';
	}
	
	if(isset($_REQUEST["delcoff"])) 
	{
		$id = $_REQUEST["id"]; 
		mysqli_query($connect, "DELETE FROM menu_prod_coffee WHERE pcoffee_ID=$id");
		mysqli_query($connect, "DELETE FROM cart WHERE prod_ID=$id");
		
		echo'<script>window.location="A.Info Delivery Menu.php";</script>';
	}
	
	if(isset($_REQUEST["delcake"])) 
	{
		$id = $_REQUEST["id"]; 
		mysqli_query($connect, "DELETE FROM menu_prod_cake WHERE pcake_ID=$id");
		mysqli_query($connect, "DELETE FROM cart WHERE prod_ID=$id");
		
		echo'<script>window.location="A.Info Delivery Menu.php";</script>';
	}
?>