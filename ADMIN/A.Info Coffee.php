<?php include("dataconnection.php")?>

<html>

<head>
	<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<style>
		body{background-color: #FDF5E6; margin-bottom: 50px;}
		h1{text-align:center;font-size: 5.5vw;margin-top:2%;margin-bottom:2%;}
		#add{text-align:right; margin-right: auto; margin-left: auto; margin-top: 2%; width:90%;}
		#add a{color: white; text-decoration: none;}
		#add a:visited{border:none;}
		#add button{color:white; background-color: #4682B4; width: 150px; border:none; border-radius:5px;}
		#add button:hover{color:white; background-color: #3C6F99; width: 150px; border:none;}
		
		#addtext{padding-left: 5px;}
		#table{margin-left:auto; margin-right:auto; border-spacing: 0px; border: 1px solid black; border-left:none; border-right:none; width: 90%;margin-bottom:1%;}
		#table tr{height: 40px; font-size: 1.28vw;}
		#table th{background-color: #D3D3D3;}
		#table th, td{text-align: left}
		#table td{border-bottom: 1px solid black;}
		#thbtn{margin: auto; text-align: right;}
		#table button{style="background-color:#4682B4;"}
		#btntext{padding-left: 8px;}
		#edit button{background-color: #4682B4;}
		#edit button:hover{background-color: #3C6F99; }
		#dlt button{background-color:#DC143C;}
		#dlt button:hover{background-color:#BF1134;}
		button{margin: auto; width:90px; height:30px; border:none; border-radius:5px; color: white; text-align: center;}
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
	<h1>Product Information : COFFEE</h1>
	<hr/>
	
	<div id="add">
		<a href="A.Add Coffee Form.php">
			<button>
				<img src="http://localhost/fyp/icon/add.png" width="10px" style="padding-top: 3px;" />
				<span id="addtext">Add New Product</span>
			</button>
		</a>
	</div>
	<br/>
	
	<table id="table">
		<tr>
			<th style="width: 9%; padding-left:5px;">ID</th>
			<th style="width: 28%; ">Name</th>
			<th style="width: 33%; ">Image Name</th>
			<th style="width: 10%; padding-left:5px;">Price</th>
			
			<div class="thbtn" style="text-align: right;">
			<th style="width: 10%; "></th>
			<th style="width: 10%; "></th>
			</div>
		</tr>
		<?php
			$data="SELECT * FROM menu_coffee";
			$result=mysqli_query($connect, $data);
			
			if(mysqli_num_rows($result)>0) //if there are data
			{
				while($row=mysqli_fetch_array($result))
				{
					?>
					<tr>
						<td style="padding-left:5px;"><?php echo $row["coffee_ID"]; ?></td>
						<td><?php echo $row["coffee_name"]; ?></td>
						<td><?php echo $row["coffee_img_name"]; ?></td>
						<td style="padding-left:5px;"><?php echo number_format($row["coffee_price"], 2); ?></td>

						<td>
							<div id="edit">
								<a href="A.Edit Coffee Form.php?edit&id=<?php echo $row["coffee_ID"];?>">
								<button>
									<img src="http://localhost/fyp/icon/edit.png"width="13px" style="padding-top:3px;"/>
									<span id="btntext">Edit</span>
								</button>
								</a>
							</div>
						</td>
						
						<td>
							<div id="dlt">
								<a href="A.Info Coffee.php?del&id=<?php echo $row["coffee_ID"];?>" onclick="return confirmation();">
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
	if(isset($_REQUEST["del"])) 
	{
		$delid = $_REQUEST["id"]; 
		mysqli_query($connect, "DELETE FROM menu_coffee WHERE coffee_ID=$delid");
		mysqli_query($connect, "DELETE FROM menu_prod_coffee WHERE pcoffee_ID=$delid");
		mysqli_query($connect, "DELETE FROM cart WHERE prod_ID=$delid");
		
		echo'<script>window.location="A.Info Coffee.php";</script>';
	}
?>