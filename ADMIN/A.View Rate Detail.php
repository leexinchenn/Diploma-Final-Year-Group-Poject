<!DOCTYPE html>

<?php include("dataconnection.php"); ?>

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
table-layout:fixed;
width:90%;
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
color:white;
}

.btn:hover{
cursor:pointer;
}
		
.search{
margin-left:10%; 
margin-right:auto; 
width: 90%;
}
</style>
<script type="text/javascript">
</script>
</head>

<body>
	<?php include("A.header.php");?>
	<h1>Customer Rate & Review</h1>
	<hr/><br/><br/>
		
	<?php
	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['myList'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM rate_review WHERE Rate = '$valueToSearch'";
		$search_result = filterTable($query);
		
	}
	else 
	{
		$query = "SELECT * FROM rate_review";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "bleufonce");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}

	if(isset($_POST['refresh']))
	{
		$query = "SELECT * FROM rate_review";
		$search_result = filterTable($query);
	}		
	?>
	
	<form class="search" method="post">
		<div style="float:left;margin-left:auto;margin-right:auto">
			<label style="font-weight:bold;font-size:17px;">Choose rate type:</label>
			<select name="myList" style="padding:5px 10px 5px 10px;width:180px;" >
				<option value="all">Select Rate Type</option>
				<option value="Excellent">Excellent</option>
				<option value="Good" />Good</option>
				<option value="Average" />Average</option>
				<option value="Fair" />Fair</option>
				<option value="Poor" />Poor</option>
			</select>
		</div>
		<button class="btn" name="search" style="background-color:#4682B4;color:white;width:110px;height:30px;border:none;border-radius:3px;padding-right:5px;padding-top:px;margin-left:7px;"><img src="http://localhost/fyp/icon/search.png" width="16px" style="padding-right:10px;padding-top:2px;" />SEARCH</button>
		<button class="btn" name="refresh" style="background-color:#4682B4;color:white;width:90px;height:30px;border:none;border-radius:3px;float:right;margin-right:10%;">REFRESH</button>
		
		<?php
		if(mysqli_num_rows($search_result)>0) //if there are data
		{
		?>
		
		<br/><br/><br/>
		<div class="table">
			<table border="1" id="myTable">
				<tr style="background-color:#D3D3D3;height:35px;font-size:18px;">
					<th style="width:50px;" >No</th>
					<th style="width:150px;" >User ID</th>
					<th style="width:200px;">Rate</th>
					<th style="width:400px;word-wrap: break-word">Review</th>
					<th style="width:400px;word-wrap: break-word">Reply</th>
					<th style="width:100px;"></th>
				</tr>
				
				<!--get data from database phpmyadmin-->
				<?php 
				$a=0;
				while($row = mysqli_fetch_array($search_result)): 
				?>			
		
				<tr>
					<td class="nonebtn"> <?php echo ++$a; ?> </td>
					<td class="nonebtn"> <?php echo $row["User_ID"] ?> </td>
					<td class="nonebtn"> <?php echo $row["Rate"]; ?> </td>
					<td class="nonebtn"> <?php echo $row["Review"]; ?> </td>
					<td class="nonebtn"> <?php echo $row["Reply"]; ?> </td>
					<td><button name="reply" class="btn" style="background-color:#4682B4;width:95px;height:30px;border:none;border-radius:3px;"><img src="http://localhost/fyp/icon/edit.png" width="15px" style="padding-top:3px;"/><a href="A.Reply Rate Review.php?reply&id=<?php echo $row["No"] ?>">&nbsp;&nbsp;&nbsp;Reply</button></a></td>
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
</body>
</html>

