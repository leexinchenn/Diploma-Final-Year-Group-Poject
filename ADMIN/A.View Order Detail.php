<!DOCTYPE HTML>

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

/**********TOP**********/
.accordion {
background-color:#FDF5E6;
cursor: pointer;
padding: 18px;
width: 100%;
border:none;
text-align: left;
outline: none;
font-size: 15px;
transition: 0.4s;
}

/*.active:after {
content: "\2212";
}*/

.active, .accordion:hover {
background-color: #ccc;
}

.accordion:after {
content: '\002B';
color: #777;
font-weight: bold;
float: right;
margin-left: 5px;
}

.panel {
padding: 0 20px;
padding-left:30px;
background-color:#FDF5E6;
max-height: 0;
overflow: hidden;
transition: max-height 0.2s ease-out;
}

.left{
float:left;
padding-left:20px;
padding-top:10px;
padding-bottom:10px;
}

.left2{
float:left;
padding-left:20%;
padding-top:10px;
padding-bottom:10px;
}

.right{
border-left:1px solid #FDF5E6;
padding-left:20px;
float:left;
margin-left:30px;
padding-top:10px;
padding-bottom:10px;
}

.inside{
margin-top:10px;
margin-bottom:20px;
margin-left:auto;
margin-right:auto;
}

.inside tr{
height:60px;
text-align:left;
}

.inside table, tr, th, td{
border-collapse:collapse;
border:none;	
border-spacing:1px;
padding-left:10px;
padding-right:10px;
}

/**********BOTTOM**********/
.bottom{
	width:90%;
	margin-left:auto;
	margin-right:auto;
}

.leftB{ 
float:left;
border-spacing:1px;
width:67%;
}

.leftB table, tr, th, td{
border-collapse:collapse;
border:none;	
padding-left:10px;
padding-right:10px;
}

.leftB table, tr, th{
padding-left:10px;
padding-right:10px;
}

.leftB tr{
height:40px;
text-align:left;
}

.rightB{
float:right;
margin-bottom:5%;
width: 30%;
}

.rightB table{
width:100%;
}

.rightB table, tr, th, td{
border-spacing:1px;
}

.rightB tr{
height:40px;
text-align:left;
}

.Rleft{
float:left;
}

.Rright{
float:right;
}

.header a.T{
background-color: #F0F0F0;
border:none;
text-decoration:none;
}
</style>
<script>
</script>
</head>

<body>	
	<?php include("A.header.php");?>
	<h1>Order Details</h1>
	<hr/><br/><br/>
	
	<?php
	if(isset($_GET["view"]))
	{
		$oid = $_GET["id"];

		$top = "select * from purchase_detail where Order_ID = $oid";
		$resultTop = mysqli_query($connect, $top) or die (mysqli_error());
		$rowTop = mysqli_fetch_assoc($resultTop);	
		
	?>
		<div style="margin-left:50px;margin-right:50px;">
			<button class="accordion"><img src="http://localhost/fyp/icon/od.png" width="11px;" style="padding-right:12px;padding-left:4px;" />ORDER SUMMARY</button>
			<div class="panel">
				<div class="left">
					<p><b>ORDER ID</b></p>
					<p><b>ORDER STATUS</b></p>
				</div>
				<div class="right">
					<p><?php echo $rowTop["Order_ID"]; ?></p>
					<p><?php echo $rowTop["Order_Status"]; ?></p>
				</div>
				
				<div class="left2">
					<div>
						<p><b>ORDER DATE & TIME</b></p>
						<p><b>USER ID</b></p>
					</div>
				</div>
				<div class="right">	
					<p><?php echo $rowTop["Purchase_Date"]; ?></p>
					<p><?php echo $rowTop["User_ID"]; ?></p>
				</div>			
			</div>

			<button class="accordion" style="border-top: 1px solid #C0C0C0;"><img src="http://localhost/fyp/icon/payment.png" width="23px;" style="padding-right:5px;" />PAYMENT DETAILS</button>
			<div class="panel">
				<div class="inside">
					<table border="1">
						<tr style="background-color:#DCDCDC;">
							<th style="width:300px;">PAYMENT METHOD</th>
							<th style="width:300px;">PAYMENT AMOUNT</th>
							<th style="width:300px;">PAYMENT DATE</th>
							<th style="width:300px;">PAYMENT STATUS</th>
						</tr>
						<tr style="border-bottom: 1px solid #C0C0C0;">
							<td><?php echo $rowTop["Pay_Type"]; ?></td>
							<td><?php echo "RM ".$rowTop["TotalPay"]; ?></td>
							<td><?php echo $rowTop["Purchase_Date"]; ?></td>
							<td><?php echo $rowTop["Pay_Status"]; ?></td>
						</tr>
					</table>
				</div>
			</div>

			<button class="accordion" style="border-top: 1px solid #C0C0C0;"><img src="http://localhost/fyp/icon/car.png" width="20px;" style="padding-right:7px;" />DELIVERY DETAILS</button>
			<div class="panel" style="border-bottom: 1px solid #C0C0C0;">
				<div class="left">
					<p><b>DELIVERY ADDRESS</b></p>
				</div>
				
				<div class="right">
					<p><?php echo $rowTop["Delivery_Address"]; ?></p>
				</div>
			</div>
		</div>
		
		<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
			  panel.style.maxHeight = null;
			} else {
			  panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		  });
		}
		</script>
		
		<br/><br/>
		<div style="width:90%;margin-left:auto;margin-right:auto;"><h3>ORDER ITEMS</h3></div>
		<br/>
		<div class="bottom">
		<div class="leftB">
			<table border="1">
					<tr style="font-size:18px;background-color:#DCDCDC;">
						<th style="width:50px;">NO</th>
						<th style="width:100px;">ITEM ID</th>
						<th style="width:350px;">ITEM NAME</th>
						<th style="width:150px;">PRICE</th>
						<th style="width:100px;">QTY</th>
						<th style="width:100px;">TOTAL</th>
					</tr>
					<?php
					$a=0;
					$subtol=0;
					$num=0;
					
					$bottom = "SELECT * FROM order_detail WHERE Order_ID = $oid ORDER BY Item_Name ASC";
					$resultBottom = mysqli_query($connect, $bottom) or die (mysqli_error());
					
					if(mysqli_num_rows($resultBottom)>0) //if there are data
					{
						while($rowBottom=mysqli_fetch_assoc($resultBottom))
						{
							$tol = $rowBottom["Unit_Price"]*$rowBottom["Quantity"];
							$subtol+=$tol;
							$num+=$rowBottom["Quantity"];
					?>
					
					<tr>
						<td><?php echo ++$a; ?></td>
						<td><?php echo $rowBottom["Item_ID"]; ?></td>
						<td><?php echo $rowBottom["Item_Name"]; ?></td>
						<td><?php echo $rowBottom["Unit_Price"]; ?></td>
						<td><?php echo $rowBottom["Quantity"]; ?></td>
						<td><?php echo "RM ".$rowBottom["Total"]; ?></td>
					</tr>
					<?php
						}
					}
					?>
			</table>
		</div>
		
		<div class="rightB">
			<table border="1" >
				<tr style="background-color:#DCDCDC;">
					<th style="width:300px;">ORDER SUMMARY</th>
				</tr>
				<tr>
					<td>
						<span class="Rleft">Total Items</span>
						<span class="Rright"><?php echo $num; ?><span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="Rleft">Order Subtotal</span>
						<span class="Rright"><?php echo "RM ".number_format($subtol,2);?><span>
					</td>
				</tr>
				<tr>
					<td style="padding-bottom:30px;">
						<span class="Rleft">Order Discounts</span>
						<span class="Rright" style="color:red;"><?php echo "- RM ".number_format($rowTop["Discount"],2);?><span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="Rleft">Order Total</span>
						<span class="Rright">
							<?php 
								$total = $subtol-$rowTop["Discount"];
								echo "RM ".number_format($total,2); 
							?>
						<span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="Rleft">Delivery Fees</span>
						<span class="Rright"><?php echo "RM ".number_format($rowTop["Delivery_Fee"],2); ?><span>
					</td>
				</tr>
				<tr>
					<td style="border-top:1px solid #C0C0C0;font-size:18px;font-family:Times New Roman;">
						<span class="Rleft">AMOUNT PAYABLE</span>
						<span class="Rright"><?php echo "RM ".number_format($rowTop["TotalPay"],2); ?><span>
					</td>
				</tr>
			</table>
		</div>
		</div>
	<?php 
	} 
	?>
	
</body>
</html>