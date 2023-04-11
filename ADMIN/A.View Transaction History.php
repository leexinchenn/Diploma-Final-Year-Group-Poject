<!DOCTYPE HTML>

<html>
<head>
<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<style>
body{
background-color:#FDF5E6;
}

h1{
text-align:center;  
font-size:5.5vw; 
margin:30px;
}	

.table{
border-bottom:1px solid black;
}

.table table, tr, th, td{
border-collapse:collapse;
border-left:none;
border-right:none;	
border-spacing: 1px;
}

.table tr{
height:40px;
}

.table th, .nonebtn{
padding-left:5px;
text-align:left;
}

.btn a{
text-decoration:none;
color:black;
}

.btn:hover{
cursor:pointer;
}

.search{
margin-left:auto; 
margin-right:auto; 
width: 90%;
}

.header a.T{
background-color: #F0F0F0;
border:none;
text-decoration:none;
}
</style>
<script type="text/javascript">
function myFunction() 
{
  var elmnt = document.getElementById("myDIV");
  var x = elmnt.scrollLeft;
  var y = elmnt.scrollTop;
  document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
}

function search() 
{
	var input, filter, table, tr, td, i, txtValue;
	
	input = document.getElementById("myList");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	
	for (i = 0; i < tr.length; i++) 
	{
		td = tr[i].getElementsByTagName("td")[0];
		if (td) 
		{
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
			{
				tr[i].style.display = "";
			} 
			else 
			{
				tr[i].style.display = "none";
			}
		}       
	}
}		
</script>
</head>

<body>	
	<?php include("A.header.php");?>
	<h1>Transaction History</h1>
	<hr/><br/><br/>
	
	<?php
	include("dataconnection.php"); 
	
	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['myList'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM purchase_detail WHERE Pay_Type = '$valueToSearch'";
		$search_result = filterTable($query);
		
	}
	else 
	{
		$query = "SELECT * FROM purchase_detail ORDER BY Purchase_Date DESC";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		include("dataconnection.php"); 
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}

	if(isset($_POST['refresh']))
	{
		$query = "SELECT * FROM purchase_detail ORDER BY Purchase_Date DESC";
		$search_result = filterTable($query);
	}
	?>
	
	<form class="search" method="post">
		<div style="float:left;margin-left:auto;margin-right:auto">
			<label style="font-weight:bold;font-size:17px;">Choose payment type:</label>
			<select name="myList" style="padding:5px 10px 5px 10px;width:180px;" >
				<option value="all">Select Payment Type</option>
				<option value="visa">VISA</option>
				<option value="master">MASTER</option>
				<option value="fpx">FPX</option>
				<option value="e-wallet">E-WALLET</option>
			</select>
			
		</div>
		<button class="btn" name="search" style="background-color:#4682B4;color:white;width:110px;height:30px;border:none;border-radius:3px;padding-right:5px;padding-top:px;margin-left:7px;"><img src="http://localhost/fyp/icon/search.png" width="16px" style="padding-right:10px;padding-top:2px;" />SEARCH</button>
		<button class="btn" name="refresh" style="background-color:#4682B4;color:white;width:90px;height:30px;border:none;border-radius:3px;float:right;">REFRESH</button>
		
		<?php
		if(mysqli_num_rows($search_result)>0) //if there are data
		{
		?>
		
		<br/><br/><br/>
		<div class="table">
			<table border="1" id="myTable">
				<tr style="background-color:#D3D3D3;height:35px;font-size:18px;">
					<th style="width:15%;">Purchase Date</th>
					<th style="width:15%">Order ID</th>
					<th style="width:15%">Amount</th>
					<th style="width:20%">Payment Type</th>
					<th style="width:15%">Payment Status</th>
					<th style="width:15%">Order Status</th>
					<th style="width:15%;"></th>
				</tr>
				
				<?php 
				//to output filter data
				while($row = mysqli_fetch_array($search_result)):
				?>
				
				<tr>
					<td class="nonebtn"> <?php echo $row["Purchase_Date"] ?> </td>
					<td class="nonebtn"> <?php echo $row["Order_ID"]; ?> </td>
					<td class="nonebtn"> <?php echo "RM ".number_format($row["TotalPay"],2); ?> </td>
					<td class="nonebtn"> <?php echo $row["Pay_Type"]; ?> </td>
					<td class="nonebtn"> <?php echo $row["Pay_Status"]; ?> </td>
					<td class="nonebtn"> <?php echo $row["Order_Status"]; ?> </td>
					<td><button class="btn" style="background-color:#4682B4;width:130px;height:30px;border:none;border-radius:3px;"><img src="http://localhost/fyp/icon/md.png" width="15px" style="padding-top:3px;"/><a style="color:white;" href="A.View Order Detail.php?view&id=<?php echo $row['Order_ID']; ?>">&nbsp;&nbsp;&nbsp;Order Details</a></button></td>
				</tr>

				<?php endwhile; ?>
			</table>
		</div>
	</form>
	<?php
	}
	else
	{
		echo '<br/><br/><br/>'."0 results";
	}
	?>
	<br/>
</body>
</html>