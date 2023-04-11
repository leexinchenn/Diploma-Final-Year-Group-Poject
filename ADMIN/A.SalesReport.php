<!DOCTYPE HTML>

<?php include("dataconnection.php"); ?>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<link rel="stylesheet" type="text/css" href="home,us.css"/> 
<style>
body{
background-color:#FDF5E6;
}

h1{
text-align:center; 
font-size:5.5vw; 
margin:30px;
}

/*******************************************************************/

/* Style the tab */
.tab {
float: left;
border: 1px solid #ccc;
background-color: #f1f1f1;
width: 15%;
height: auto;
}

/* Style the buttons inside the tab */
.tab button {
display: block;
background-color: inherit;
color: black;
padding: 22px 16px;
width: 100%;
border: none;
outline: none;
text-align: left;
cursor: pointer;
transition: 0.3s;
font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
float: left;
padding-left:20px;
padding-top:10px;
width: 70%;
margin-bottom:50px;
}

/*******************************************************************/

table {
font-family: arial, sans-serif;
border-collapse: collapse;
margin-left:auto;
margin-right:auto;
width: 120%;
}

td{
border: 1px solid #dddddd;
text-align: right;
padding: 8px;
border:none;
}
th{
border: 1px solid #dddddd;
text-align:center;
padding:8px;
border:none;
}

tr:nth-child(even) {
background-color: #dddddd;
}
/*******************************************************************/

#myInput2, #myInput3, #myInput4{
background-image:url(icon/s2.png);
background-repeat:no-repeat;
background-size:20px;
background-position:3% 50%;
padding-left:10px;
width: 23%;
font-size: 16px;
padding: 12px 20px 12px 40px;
border: 1px solid #ddd;
margin-bottom: 12px;
margin-left:90%;
}

.header a.S{
background-color: #F0F0F0;
border:none;
text-decoration:none;
}
</style>
<script type="text/javascript">
function searchCake() 
{
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput2");
	filter = input.value.toUpperCase();
	table = document.getElementById("CAKE");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) 
	{
		td = tr[i].getElementsByTagName("td")[0];
		if (td) 
		{
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) 
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

function searchCoff() 
{
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput3");
	filter = input.value.toUpperCase();
	table = document.getElementById("COFFEE");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) 
	{
		td = tr[i].getElementsByTagName("td")[0];
		if (td) 
		{
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) 
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

function searchLight() 
{
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput4");
	filter = input.value.toUpperCase();
	table = document.getElementById("LIGHTMEAL");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) 
	{
		td = tr[i].getElementsByTagName("td")[0];
		if (td) 
		{
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) 
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
	<h1>SALES REPORT 2021</h1>
	<hr/>

	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'all')" id="defaultOpen">ALL</button>
		<button class="tablinks" onclick="openCity(event, 'cake')">CAKE</button>
		<button class="tablinks" onclick="openCity(event, 'coffee')">COFFEE</button>
		<button class="tablinks" onclick="openCity(event, 'lightmeal')">LIGHTMEAL</button>
	</div>

	<div id="all" class="tabcontent">
		<br/>
		<h2>ALL SALES</h2>
		<br/>
		<table border="1">
		
			<?php $totalAll=0; ?>
			
			<tr>
				<th style="width:200px;"></th>
				<th style="width:250px;">JAN</th>
				<th style="width:250px;">FEB</th>
				<th style="width:250px;">MARCH</th>
				<th style="width:250px;">APRIL</th>
				<th style="width:250px;">MAY</th>
				<th style="width:250px;">JUNE</th>
				<th style="width:250px;">JULY</th>
				<th style="width:250px;">AUG</th>
				<th style="width:250px;">SEP</th>
				<th style="width:250px;">OCT</th>
				<th style="width:250px;">NOV</th>
				<th style="width:250px;">DEC</th>
				<th style="width:500px;">TOTAL SALES</th>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qcake = "SELECT * FROM order_detail WHERE Item_Category = 'cake'";
			$Rcake = mysqli_query($connect, $Qcake) or die(mysqli_error());
			$totcake=0;
			$totcake1=0;
			$totcake2=0;
			$totcake3=0;
			$totcake4=0;
			$totcake5=0;
			$totcake6=0;
			$totcake7=0;
			$totcake8=0;
			$totcake9=0;
			$totcake10=0;
			$totcake11=0;
			$totcake12=0;
			
			if(mysqli_num_rows($Rcake)>0)
			{
				while($rowCake=mysqli_fetch_assoc($Rcake))
				{
					$totcake+=$rowCake["Total"];
					
					$month = date("m",strtotime($rowCake["Order_Date"])); 
					if($month=='01')
					{
						$totcake1+=$rowCake["Total"];
					}
					else if($month=='02')
					{
						$totcake2+=$rowCake["Total"];
					}
					else if($month=='03')
					{
						$totcake3+=$rowCake["Total"];
					}
					else if($month=='04')
					{
						$totcake4+=$rowCake["Total"];
					}
					else if($month=='05')
					{
						$totcake5+=$rowCake["Total"];
					}
					else if($month=='06')
					{
						$totcake6+=$rowCake["Total"];
					}
					else if($month=='07')
					{
						$totcake7+=$rowCake["Total"];
					}
					else if($month=='08')
					{
						$totcake8+=$rowCake["Total"];
					}
					else if($month=='09')
					{
						$totcake9+=$rowCake["Total"];
					}
					else if($month=='10')
					{
						$totcake10+=$rowCake["Total"];
					}
					else if($month=='11')
					{
						$totcake11+=$rowCake["Total"];
					}
					else if($month=='12')
					{
						$totcake12+=$rowCake["Total"];
					}
				}
			}
			$totalAll+=$totcake;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:16px;font-weight:bold;">CAKE</td>
				<td><?php echo "$".number_format($totcake1,2);?></td>
				<td><?php echo "$".number_format($totcake2,2);?></td>
				<td><?php echo "$".number_format($totcake3,2);?></td>
				<td><?php echo "$".number_format($totcake4,2);?></td>
				<td><?php echo "$".number_format($totcake5,2);?></td>
				<td><?php echo "$".number_format($totcake6,2);?></td>
				<td><?php echo "$".number_format($totcake7,2);?></td>
				<td><?php echo "$".number_format($totcake8,2);?></td>
				<td><?php echo "$".number_format($totcake9,2);?></td>
				<td><?php echo "$".number_format($totcake10,2);?></td>
				<td><?php echo "$".number_format($totcake11,2);?></td>
				<td><?php echo "$".number_format($totcake12,2);?></td>
				<td><?php echo "$".number_format($totcake,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qcoffee = "SELECT * FROM order_detail WHERE Item_Category = 'coffee'";
			$Rcoffee = mysqli_query($connect, $Qcoffee) or die(mysqli_error());
			$totcoffee=0;
			$totcoffee1=0;
			$totcoffee2=0;
			$totcoffee3=0;
			$totcoffee4=0;
			$totcoffee5=0;
			$totcoffee6=0;
			$totcoffee7=0;
			$totcoffee8=0;
			$totcoffee9=0;
			$totcoffee10=0;
			$totcoffee11=0;
			$totcoffee12=0;
			
			if(mysqli_num_rows($Rcoffee)>0)
			{
				while($rowCoffee=mysqli_fetch_assoc($Rcoffee))
				{
					$totcoffee+=$rowCoffee["Total"];
					
					$month = date("m",strtotime($rowCoffee["Order_Date"])); 
					if($month=='01')
					{
						$totcoffee1+=$rowCoffee["Total"];
					}
					else if($month=='02')
					{
						$totcoffee2+=$rowCoffee["Total"];
					}
					else if($month=='03')
					{
						$totcoffee3+=$rowCoffee["Total"];
					}
					else if($month=='04')
					{
						$totcoffee4+=$rowCoffee["Total"];
					}
					else if($month=='05')
					{
						$totcoffee5+=$rowCoffee["Total"];
					}
					else if($month=='06')
					{
						$totcoffee6+=$rowCoffee["Total"];
					}
					else if($month=='07')
					{
						$totcoffee7+=$rowCoffee["Total"];
					}
					else if($month=='08')
					{
						$totcoffee8+=$rowCoffee["Total"];
					}
					else if($month=='09')
					{
						$totcoffee9+=$rowCoffee["Total"];
					}
					else if($month=='10')
					{
						$totcoffee10+=$rowCoffee["Total"];
					}
					else if($month=='11')
					{
						$totcoffee11+=$rowCoffee["Total"];
					}
					else if($month=='12')
					{
						$totcoffee12+=$rowCoffee["Total"];
					}
				}
			}
			$totalAll+=$totcoffee;
			?>
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:16px;font-weight:bold;">COFFEE</td>
				<td><?php echo "$".number_format($totcoffee1,2);?></td>
				<td><?php echo "$".number_format($totcoffee2,2);?></td>
				<td><?php echo "$".number_format($totcoffee3,2);?></td>
				<td><?php echo "$".number_format($totcoffee4,2);?></td>
				<td><?php echo "$".number_format($totcoffee5,2);?></td>
				<td><?php echo "$".number_format($totcoffee6,2);?></td>
				<td><?php echo "$".number_format($totcoffee7,2);?></td>
				<td><?php echo "$".number_format($totcoffee8,2);?></td>
				<td><?php echo "$".number_format($totcoffee9,2);?></td>
				<td><?php echo "$".number_format($totcoffee10,2);?></td>
				<td><?php echo "$".number_format($totcoffee11,2);?></td>
				<td><?php echo "$".number_format($totcoffee12,2);?></td>
				<td><?php echo "$".number_format($totcoffee,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qligh = "SELECT * FROM order_detail WHERE Item_Category = 'lightmeal'";
			$Rligh = mysqli_query($connect, $Qligh) or die(mysqli_error());
			$totlight=0;
			$totlight1=0;
			$totlight2=0;
			$totlight3=0;
			$totlight4=0;
			$totlight5=0;
			$totlight6=0;
			$totlight7=0;
			$totlight8=0;
			$totlight9=0;
			$totlight10=0;
			$totlight11=0;
			$totlight12=0;
			
			if(mysqli_num_rows($Rligh)>0)
			{
				while($rowLight=mysqli_fetch_assoc($Rligh))
				{
					$totlight+=$rowLight["Total"];
					
					$month = date("m",strtotime($rowLight["Order_Date"])); 
					if($month=='01')
					{
						$totlight1+=$rowLight["Total"];
					}
					else if($month=='02')
					{
						$totlight2+=$rowLight["Total"];
					}
					else if($month=='03')
					{
						$totlight3+=$rowLight["Total"];
					}
					else if($month=='04')
					{
						$totlight4+=$rowLight["Total"];
					}
					else if($month=='05')
					{
						$totlight5+=$rowLight["Total"];
					}
					else if($month=='06')
					{
						$totlight6+=$rowLight["Total"];
					}
					else if($month=='07')
					{
						$totlight7+=$rowLight["Total"];
					}
					else if($month=='08')
					{
						$totlight8+=$rowLight["Total"];
					}
					else if($month=='09')
					{
						$totlight9+=$rowLight["Total"];
					}
					else if($month=='10')
					{
						$totlight10+=$rowLight["Total"];
					}
					else if($month=='11')
					{
						$totlight11+=$rowLight["Total"];
					}
					else if($month=='12')
					{
						$totlight12+=$rowLight["Total"];
					}
				}
			}
			$totalAll+=$totlight;
			?>
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:16px;font-weight:bold;">LIGHTMEAL</td>
				<td><?php echo "$".number_format($totlight1,2);?></td>
				<td><?php echo "$".number_format($totlight2,2);?></td>
				<td><?php echo "$".number_format($totlight3,2);?></td>
				<td><?php echo "$".number_format($totlight4,2);?></td>
				<td><?php echo "$".number_format($totlight5,2);?></td>
				<td><?php echo "$".number_format($totlight6,2);?></td>
				<td><?php echo "$".number_format($totlight7,2);?></td>
				<td><?php echo "$".number_format($totlight8,2);?></td>
				<td><?php echo "$".number_format($totlight9,2);?></td>
				<td><?php echo "$".number_format($totlight10,2);?></td>
				<td><?php echo "$".number_format($totlight11,2);?></td>
				<td><?php echo "$".number_format($totlight12,2);?></td>
				<td><?php echo "$".number_format($totlight,2);?></td>
			</tr>
			
			<?php
			$Ajan=$totcake1+$totcoffee1+$totlight1;
			$Afeb=$totcake2+$totcoffee2+$totlight2;
			$Amar=$totcake3+$totcoffee3+$totlight3;
			$Aapr=$totcake4+$totcoffee4+$totlight4;
			$Amay=$totcake5+$totcoffee5+$totlight5;
			$Ajun=$totcake6+$totcoffee6+$totlight6;
			$Ajul=$totcake7+$totcoffee7+$totlight7;
			$Aogo=$totcake8+$totcoffee8+$totlight8;
			$Asep=$totcake9+$totcoffee9+$totlight9;
			$Aoct=$totcake10+$totcoffee10+$totlight10;
			$Anov=$totcake11+$totcoffee11+$totlight11;
			$Adec=$totcake12+$totcoffee12+$totlight12;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:16px;font-weight:bold;">TOTAL</td>
				<td><?php echo "$".number_format($Ajan,2);?></td>
				<td><?php echo "$".number_format($Afeb,2);?></td>
				<td><?php echo "$".number_format($Amar,2);?></td>
				<td><?php echo "$".number_format($Aapr,2);?></td>
				<td><?php echo "$".number_format($Amay,2);?></td>
				<td><?php echo "$".number_format($Ajun,2);?></td>
				<td><?php echo "$".number_format($Ajul,2);?></td>
				<td><?php echo "$".number_format($Aogo,2);?></td>
				<td><?php echo "$".number_format($Asep,2);?></td>
				<td><?php echo "$".number_format($Aoct,2);?></td>
				<td><?php echo "$".number_format($Anov,2);?></td>
				<td><?php echo "$".number_format($Adec,2);?></td>
				<td><?php echo "$".number_format($totalAll,2); ?></td>
			</tr>
		</table>
	</div>
	
	<div id="cake" class="tabcontent">
		<input type="text" id="myInput2" onkeyup="searchCake()" placeholder="Search for product names.." title="Type in a name" />
		<br/>
		<h2>CAKE SALES</h2>
		<br/>
		<table border="1" id="CAKE">
		
			<?php $cakeAll=0; ?>
			
			<tr>
				<th style="width:300px;"></th>
				<th style="width:250px;">JAN</th>
				<th style="width:250px;">FEB</th>
				<th style="width:250px;">MARCH</th>
				<th style="width:250px;">APRIL</th>
				<th style="width:250px;">MAY</th>
				<th style="width:250px;">JUNE</th>
				<th style="width:250px;">JULY</th>
				<th style="width:250px;">AUG</th>
				<th style="width:250px;">SEP</th>
				<th style="width:250px;">OCT</th>
				<th style="width:250px;">NOV</th>
				<th style="width:250px;">DEC</th>
				<th style="width:600px;">TOTAL SALES</th>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qblack = "SELECT * FROM order_detail WHERE Item_Name = 'Black Forest'";
			$Rblack = mysqli_query($connect, $Qblack) or die(mysqli_error());
			$totBlack=0;
			$totBlack1=0;
			$totBlack2=0;
			$totBlack3=0;
			$totBlack4=0;
			$totBlack5=0;
			$totBlack6=0;
			$totBlack7=0;
			$totBlack8=0;
			$totBlack9=0;
			$totBlack10=0;
			$totBlack11=0;
			$totBlack12=0;
			
			if(mysqli_num_rows($Rblack)>0)
			{
				while($rowBlack=mysqli_fetch_assoc($Rblack))
				{
					$totBlack+=$rowBlack["Total"];
					
					$month = date("m",strtotime($rowBlack["Order_Date"])); 
					if($month=='01')
					{
						$totBlack1+=$rowBlack["Total"];
					}
					else if($month=='02')
					{
						$totBlack2+=$rowBlack["Total"];
					}
					else if($month=='03')
					{
						$totBlack3+=$rowBlack["Total"];
					}
					else if($month=='04')
					{
						$totBlack4+=$rowBlack["Total"];
					}
					else if($month=='05')
					{
						$totBlack5+=$rowBlack["Total"];
					}
					else if($month=='06')
					{
						$totBlack6+=$rowBlack["Total"];
					}
					else if($month=='07')
					{
						$totBlack7+=$rowBlack["Total"];
					}
					else if($month=='08')
					{
						$totBlack8+=$rowBlack["Total"];
					}
					else if($month=='09')
					{
						$totBlack9+=$rowBlack["Total"];
					}
					else if($month=='10')
					{
						$totBlack10+=$rowBlack["Total"];
					}
					else if($month=='11')
					{
						$totBlack11+=$rowBlack["Total"];
					}
					else if($month=='12')
					{
						$totBlack12+=$rowBlack["Total"];
					}
				}
			}
			$cakeAll+=$totBlack;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">BLACK FOREST</td>
				<td><?php echo "$".number_format($totBlack1,2);?></td>
				<td><?php echo "$".number_format($totBlack2,2);?></td>
				<td><?php echo "$".number_format($totBlack3,2);?></td>
				<td><?php echo "$".number_format($totBlack4,2);?></td>
				<td><?php echo "$".number_format($totBlack5,2);?></td>
				<td><?php echo "$".number_format($totBlack6,2);?></td>
				<td><?php echo "$".number_format($totBlack7,2);?></td>
				<td><?php echo "$".number_format($totBlack8,2);?></td>
				<td><?php echo "$".number_format($totBlack9,2);?></td>
				<td><?php echo "$".number_format($totBlack10,2);?></td>
				<td><?php echo "$".number_format($totBlack11,2);?></td>
				<td><?php echo "$".number_format($totBlack12,2);?></td>
				<td><?php echo "$".number_format($totBlack,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qori = "SELECT * FROM order_detail WHERE Item_Name = 'Original Cheesecake'";
			$Rori = mysqli_query($connect, $Qori) or die(mysqli_error());
			$totOri=0;
			$totOri1=0;
			$totOri2=0;
			$totOri3=0;
			$totOri4=0;
			$totOri5=0;
			$totOri6=0;
			$totOri7=0;
			$totOri8=0;
			$totOri9=0;
			$totOri10=0;
			$totOri11=0;
			$totOri12=0;
			
			if(mysqli_num_rows($Rori)>0)
			{
				while($rowOri=mysqli_fetch_assoc($Rori))
				{
					$totOri+=$rowOri["Total"];
					
					$month = date("m",strtotime($rowOri["Order_Date"])); 
					if($month=='01')
					{
						$totOri1+=$rowOri["Total"];
					}
					else if($month=='02')
					{
						$totOri2+=$rowOri["Total"];
					}
					else if($month=='03')
					{
						$totOri3+=$rowOri["Total"];
					}
					else if($month=='04')
					{
						$totOri4+=$rowOri["Total"];
					}
					else if($month=='05')
					{
						$totOri5+=$rowOri["Total"];
					}
					else if($month=='06')
					{
						$totOri6+=$rowOri["Total"];
					}
					else if($month=='07')
					{
						$totOri7+=$rowOri["Total"];
					}
					else if($month=='08')
					{
						$totOri8+=$rowOri["Total"];
					}
					else if($month=='09')
					{
						$totOri9+=$rowOri["Total"];
					}
					else if($month=='10')
					{
						$totOri10+=$rowOri["Total"];
					}
					else if($month=='11')
					{
						$totOri11+=$rowOri["Total"];
					}
					else if($month=='12')
					{
						$totOri12+=$rowOri["Total"];
					}
				}
			}
			$cakeAll+=$totOri;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">ORIGINAL CHEESECAKE</td>
				<td><?php echo "$".number_format($totOri1,2);?></td>
				<td><?php echo "$".number_format($totOri2,2);?></td>
				<td><?php echo "$".number_format($totOri3,2);?></td>
				<td><?php echo "$".number_format($totOri4,2);?></td>
				<td><?php echo "$".number_format($totOri5,2);?></td>
				<td><?php echo "$".number_format($totOri6,2);?></td>
				<td><?php echo "$".number_format($totOri7,2);?></td>
				<td><?php echo "$".number_format($totOri8,2);?></td>
				<td><?php echo "$".number_format($totOri9,2);?></td>
				<td><?php echo "$".number_format($totOri10,2);?></td>
				<td><?php echo "$".number_format($totOri11,2);?></td>
				<td><?php echo "$".number_format($totOri12,2);?></td>
				<td><?php echo "$".number_format($totOri,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qcho = "SELECT * FROM order_detail WHERE Item_Name = 'Chocolate Mustard'";
			$Rcho = mysqli_query($connect, $Qcho) or die(mysqli_error());
			$totCho=0;
			$totCho1=0;
			$totCho2=0;
			$totCho3=0;
			$totCho4=0;
			$totCho5=0;
			$totCho6=0;
			$totCho7=0;
			$totCho8=0;
			$totCho9=0;
			$totCho10=0;
			$totCho11=0;
			$totCho12=0;
			
			if(mysqli_num_rows($Rcho)>0)
			{
				while($rowCho=mysqli_fetch_assoc($Rcho))
				{
					$totCho+=$rowCho["Total"];
					
					$month = date("m",strtotime($rowCho["Order_Date"])); 
					if($month=='01')
					{
						$totCho1+=$rowCho["Total"];
					}
					else if($month=='02')
					{
						$totCho2+=$rowCho["Total"];
					}
					else if($month=='03')
					{
						$totCho3+=$rowCho["Total"];
					}
					else if($month=='04')
					{
						$totCho4+=$rowCho["Total"];
					}
					else if($month=='05')
					{
						$totCho5+=$rowCho["Total"];
					}
					else if($month=='06')
					{
						$totCho6+=$rowCho["Total"];
					}
					else if($month=='07')
					{
						$totCho7+=$rowCho["Total"];
					}
					else if($month=='08')
					{
						$totCho8+=$rowCho["Total"];
					}
					else if($month=='09')
					{
						$totCho9+=$rowCho["Total"];
					}
					else if($month=='10')
					{
						$totCho10+=$rowCho["Total"];
					}
					else if($month=='11')
					{
						$totCho11+=$rowCho["Total"];
					}
					else if($month=='12')
					{
						$totCho12+=$rowCho["Total"];
					}
				}
			}
			$cakeAll+=$totCho;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">CHOCOLATE MUSTARD</td>
				<td><?php echo "$".number_format($totCho1,2);?></td>
				<td><?php echo "$".number_format($totCho2,2);?></td>
				<td><?php echo "$".number_format($totCho3,2);?></td>
				<td><?php echo "$".number_format($totCho4,2);?></td>
				<td><?php echo "$".number_format($totCho5,2);?></td>
				<td><?php echo "$".number_format($totCho6,2);?></td>
				<td><?php echo "$".number_format($totCho7,2);?></td>
				<td><?php echo "$".number_format($totCho8,2);?></td>
				<td><?php echo "$".number_format($totCho9,2);?></td>
				<td><?php echo "$".number_format($totCho10,2);?></td>
				<td><?php echo "$".number_format($totCho11,2);?></td>
				<td><?php echo "$".number_format($totCho12,2);?></td>
				<td><?php echo "$".number_format($totCho,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qman = "SELECT * FROM order_detail WHERE Item_Name = 'Mango Melaleuca'";
			$Rman = mysqli_query($connect, $Qman) or die(mysqli_error());
			$totMan=0;
			$totMan1=0;
			$totMan2=0;
			$totMan3=0;
			$totMan4=0;
			$totMan5=0;
			$totMan6=0;
			$totMan7=0;
			$totMan8=0;
			$totMan9=0;
			$totMan10=0;
			$totMan11=0;
			$totMan12=0;
			
			if(mysqli_num_rows($Rman)>0)
			{
				while($rowMan=mysqli_fetch_assoc($Rman))
				{
					$totMan+=$rowMan["Total"];
					
					$month = date("m",strtotime($rowMan["Order_Date"])); 
					if($month=='01')
					{
						$totMan1+=$rowMan["Total"];
					}
					else if($month=='02')
					{
						$totMan2+=$rowMan["Total"];
					}
					else if($month=='03')
					{
						$totMan3+=$rowMan["Total"];
					}
					else if($month=='04')
					{
						$totMan4+=$rowMan["Total"];
					}
					else if($month=='05')
					{
						$totMan5+=$rowMan["Total"];
					}
					else if($month=='06')
					{
						$totMan6+=$rowMan["Total"];
					}
					else if($month=='07')
					{
						$totMan7+=$rowMan["Total"];
					}
					else if($month=='08')
					{
						$totMan8+=$rowMan["Total"];
					}
					else if($month=='09')
					{
						$totMan9+=$rowMan["Total"];
					}
					else if($month=='10')
					{
						$totMan10+=$rowMan["Total"];
					}
					else if($month=='11')
					{
						$totMan11+=$rowMan["Total"];
					}
					else if($month=='12')
					{
						$totMan12+=$rowMan["Total"];
					}
				}
			}
			$cakeAll+=$totMan;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">MANGO MELALEUCA</td>
				<td><?php echo "$".number_format($totMan1,2);?></td>
				<td><?php echo "$".number_format($totMan2,2);?></td>
				<td><?php echo "$".number_format($totMan3,2);?></td>
				<td><?php echo "$".number_format($totMan4,2);?></td>
				<td><?php echo "$".number_format($totMan5,2);?></td>
				<td><?php echo "$".number_format($totMan6,2);?></td>
				<td><?php echo "$".number_format($totMan7,2);?></td>
				<td><?php echo "$".number_format($totMan8,2);?></td>
				<td><?php echo "$".number_format($totMan9,2);?></td>
				<td><?php echo "$".number_format($totMan10,2);?></td>
				<td><?php echo "$".number_format($totMan11,2);?></td>
				<td><?php echo "$".number_format($totMan12,2);?></td>
				<td><?php echo "$".number_format($totMan,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qmat = "SELECT * FROM order_detail WHERE Item_Name = 'Matcha Nokcha'";
			$Rmat = mysqli_query($connect, $Qmat) or die(mysqli_error());
			$totMat=0;
			$totMat1=0;
			$totMat2=0;
			$totMat3=0;
			$totMat4=0;
			$totMat5=0;
			$totMat6=0;
			$totMat7=0;
			$totMat8=0;
			$totMat9=0;
			$totMat10=0;
			$totMat11=0;
			$totMat12=0;
			
			if(mysqli_num_rows($Rmat)>0)
			{
				while($rowMat=mysqli_fetch_assoc($Rmat))
				{
					$totMat+=$rowMat["Total"];
					
					$month = date("m",strtotime($rowMat["Order_Date"])); 
					if($month=='01')
					{
						$totMat1+=$rowMat["Total"];
					}
					else if($month=='02')
					{
						$totMat2+=$rowMat["Total"];
					}
					else if($month=='03')
					{
						$totMat3+=$rowMat["Total"];
					}
					else if($month=='04')
					{
						$totMat4+=$rowMat["Total"];
					}
					else if($month=='05')
					{
						$totMat5+=$rowMat["Total"];
					}
					else if($month=='06')
					{
						$totMat6+=$rowMat["Total"];
					}
					else if($month=='07')
					{
						$totMat7+=$rowMat["Total"];
					}
					else if($month=='08')
					{
						$totMat8+=$rowMat["Total"];
					}
					else if($month=='09')
					{
						$totMat9+=$rowMat["Total"];
					}
					else if($month=='10')
					{
						$totMat10+=$rowMat["Total"];
					}
					else if($month=='11')
					{
						$totMat11+=$rowMat["Total"];
					}
					else if($month=='12')
					{
						$totMat12+=$rowMat["Total"];
					}
				}
			}
			$cakeAll+=$totMat;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">MATCHA NOKCHA</td>
				<td><?php echo "$".number_format($totMat1,2);?></td>
				<td><?php echo "$".number_format($totMat2,2);?></td>
				<td><?php echo "$".number_format($totMat3,2);?></td>
				<td><?php echo "$".number_format($totMat4,2);?></td>
				<td><?php echo "$".number_format($totMat5,2);?></td>
				<td><?php echo "$".number_format($totMat6,2);?></td>
				<td><?php echo "$".number_format($totMat7,2);?></td>
				<td><?php echo "$".number_format($totMat8,2);?></td>
				<td><?php echo "$".number_format($totMat9,2);?></td>
				<td><?php echo "$".number_format($totMat10,2);?></td>
				<td><?php echo "$".number_format($totMat11,2);?></td>
				<td><?php echo "$".number_format($totMat12,2);?></td>
				<td><?php echo "$".number_format($totMat,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qore = "SELECT * FROM order_detail WHERE Item_Name = 'Oreo Cake'";
			$Rore = mysqli_query($connect, $Qore) or die(mysqli_error());
			$totOre=0;
			$totOre1=0;
			$totOre2=0;
			$totOre3=0;
			$totOre4=0;
			$totOre5=0;
			$totOre6=0;
			$totOre7=0;
			$totOre8=0;
			$totOre9=0;
			$totOre10=0;
			$totOre11=0;
			$totOre12=0;
			
			if(mysqli_num_rows($Rore)>0)
			{
				while($rowOre=mysqli_fetch_assoc($Rore))
				{
					$totOre+=$rowOre["Total"];
					
					$month = date("m",strtotime($rowOre["Order_Date"])); 
					if($month=='01')
					{
						$totOre1+=$rowOre["Total"];
					}
					else if($month=='02')
					{
						$totOre2+=$rowOre["Total"];
					}
					else if($month=='03')
					{
						$totOre3+=$rowOre["Total"];
					}
					else if($month=='04')
					{
						$totOre4+=$rowOre["Total"];
					}
					else if($month=='05')
					{
						$totOre5+=$rowOre["Total"];
					}
					else if($month=='06')
					{
						$totOre6+=$rowOre["Total"];
					}
					else if($month=='07')
					{
						$totOre7+=$rowOre["Total"];
					}
					else if($month=='08')
					{
						$totOre8+=$rowOre["Total"];
					}
					else if($month=='09')
					{
						$totOre9+=$rowOre["Total"];
					}
					else if($month=='10')
					{
						$totOre10+=$rowOre["Total"];
					}
					else if($month=='11')
					{
						$totOre11+=$rowOre["Total"];
					}
					else if($month=='12')
					{
						$totOre12+=$rowOre["Total"];
					}
				}
			}
			$cakeAll+=$totOre;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">OREO CAKE</td>
				<td><?php echo "$".number_format($totOre1,2);?></td>
				<td><?php echo "$".number_format($totOre2,2);?></td>
				<td><?php echo "$".number_format($totOre3,2);?></td>
				<td><?php echo "$".number_format($totOre4,2);?></td>
				<td><?php echo "$".number_format($totOre5,2);?></td>
				<td><?php echo "$".number_format($totOre6,2);?></td>
				<td><?php echo "$".number_format($totOre7,2);?></td>
				<td><?php echo "$".number_format($totOre8,2);?></td>
				<td><?php echo "$".number_format($totOre9,2);?></td>
				<td><?php echo "$".number_format($totOre10,2);?></td>
				<td><?php echo "$".number_format($totOre11,2);?></td>
				<td><?php echo "$".number_format($totOre12,2);?></td>
				<td><?php echo "$".number_format($totOre,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qstr = "SELECT * FROM order_detail WHERE Item_Name = 'Strawberry Cake'";
			$Rstr = mysqli_query($connect, $Qstr) or die(mysqli_error());
			$totStr=0;
			$totStr1=0;
			$totStr2=0;
			$totStr3=0;
			$totStr4=0;
			$totStr5=0;
			$totStr6=0;
			$totStr7=0;
			$totStr8=0;
			$totStr9=0;
			$totStr10=0;
			$totStr11=0;
			$totStr12=0;
			
			if(mysqli_num_rows($Rstr)>0)
			{
				while($rowStr=mysqli_fetch_assoc($Rstr))
				{
					$totStr+=$rowStr["Total"];
					
					$month = date("m",strtotime($rowStr["Order_Date"])); 
					if($month=='01')
					{
						$totStr1+=$rowStr["Total"];
					}
					else if($month=='02')
					{
						$totStr2+=$rowStr["Total"];
					}
					else if($month=='03')
					{
						$totStr3+=$rowStr["Total"];
					}
					else if($month=='04')
					{
						$totStr4+=$rowStr["Total"];
					}
					else if($month=='05')
					{
						$totStr5+=$rowStr["Total"];
					}
					else if($month=='06')
					{
						$totStr6+=$rowStr["Total"];
					}
					else if($month=='07')
					{
						$totStr7+=$rowStr["Total"];
					}
					else if($month=='08')
					{
						$totStr8+=$rowStr["Total"];
					}
					else if($month=='09')
					{
						$totStr9+=$rowStr["Total"];
					}
					else if($month=='10')
					{
						$totStr10+=$rowStr["Total"];
					}
					else if($month=='11')
					{
						$totStr11+=$rowStr["Total"];
					}
					else if($month=='12')
					{
						$totStr12+=$rowStr["Total"];
					}
				}
			}
			$cakeAll+=$totStr;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">STRAWBERRY CAKE</td>
				<td><?php echo "$".number_format($totStr1,2);?></td>
				<td><?php echo "$".number_format($totStr2,2);?></td>
				<td><?php echo "$".number_format($totStr3,2);?></td>
				<td><?php echo "$".number_format($totStr4,2);?></td>
				<td><?php echo "$".number_format($totStr5,2);?></td>
				<td><?php echo "$".number_format($totStr6,2);?></td>
				<td><?php echo "$".number_format($totStr7,2);?></td>
				<td><?php echo "$".number_format($totStr8,2);?></td>
				<td><?php echo "$".number_format($totStr9,2);?></td>
				<td><?php echo "$".number_format($totStr10,2);?></td>
				<td><?php echo "$".number_format($totStr11,2);?></td>
				<td><?php echo "$".number_format($totStr12,2);?></td>
				<td><?php echo "$".number_format($totStr,2);?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qtir = "SELECT * FROM order_detail WHERE Item_Name = 'Tiramisu'";
			$Rtir = mysqli_query($connect, $Qtir) or die(mysqli_error());
			$totTir=0;
			$totTir1=0;
			$totTir2=0;
			$totTir3=0;
			$totTir4=0;
			$totTir5=0;
			$totTir6=0;
			$totTir7=0;
			$totTir8=0;
			$totTir9=0;
			$totTir10=0;
			$totTir11=0;
			$totTir12=0;
			
			if(mysqli_num_rows($Rtir)>0)
			{
				while($rowTir=mysqli_fetch_assoc($Rtir))
				{
					$totTir+=$rowTir["Total"];
					
					$month = date("m",strtotime($rowTir["Order_Date"])); 
					if($month=='01')
					{
						$totTir1+=$rowTir["Total"];
					}
					else if($month=='02')
					{
						$totTir2+=$rowTir["Total"];
					}
					else if($month=='03')
					{
						$totTir3+=$rowTir["Total"];
					}
					else if($month=='04')
					{
						$totTir4+=$rowTir["Total"];
					}
					else if($month=='05')
					{
						$totTir5+=$rowTir["Total"];
					}
					else if($month=='06')
					{
						$totTir6+=$rowTir["Total"];
					}
					else if($month=='07')
					{
						$totTir7+=$rowTir["Total"];
					}
					else if($month=='08')
					{
						$totTir8+=$rowTir["Total"];
					}
					else if($month=='09')
					{
						$totTir9+=$rowTir["Total"];
					}
					else if($month=='10')
					{
						$totTir10+=$rowTir["Total"];
					}
					else if($month=='11')
					{
						$totTir11+=$rowTir["Total"];
					}
					else if($month=='12')
					{
						$totTir12+=$rowTir["Total"];
					}
				}
			}
			$cakeAll+=$totTir;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">TIRAMISU</td>
				<td><?php echo "$".number_format($totTir1,2);?></td>
				<td><?php echo "$".number_format($totTir2,2);?></td>
				<td><?php echo "$".number_format($totTir3,2);?></td>
				<td><?php echo "$".number_format($totTir4,2);?></td>
				<td><?php echo "$".number_format($totTir5,2);?></td>
				<td><?php echo "$".number_format($totTir6,2);?></td>
				<td><?php echo "$".number_format($totTir7,2);?></td>
				<td><?php echo "$".number_format($totTir8,2);?></td>
				<td><?php echo "$".number_format($totTir9,2);?></td>
				<td><?php echo "$".number_format($totTir10,2);?></td>
				<td><?php echo "$".number_format($totTir11,2);?></td>
				<td><?php echo "$".number_format($totTir12,2);?></td>
				<td><?php echo "$".number_format($totTir,2);?></td>
			</tr>
			
			<?php
			$Bjan=$totBlack1+$totOri1+$totCho1+$totMan1+$totMat1+$totOre1+$totStr1+$totTir1;
			$Bfeb=$totBlack2+$totOri2+$totCho2+$totMan2+$totMat2+$totOre2+$totStr2+$totTir2;
			$Bmar=$totBlack3+$totOri3+$totCho3+$totMan3+$totMat3+$totOre3+$totStr3+$totTir3;
			$Bapr=$totBlack4+$totOri4+$totCho4+$totMan4+$totMat4+$totOre4+$totStr4+$totTir4;
			$Bmay=$totBlack5+$totOri5+$totCho5+$totMan5+$totMat5+$totOre5+$totStr5+$totTir5;
			$Bjun=$totBlack6+$totOri6+$totCho6+$totMan6+$totMat6+$totOre6+$totStr6+$totTir6;
			$Bjul=$totBlack7+$totOri7+$totCho7+$totMan7+$totMat7+$totOre7+$totStr7+$totTir7;
			$Bogo=$totBlack8+$totOri8+$totCho8+$totMan8+$totMat8+$totOre8+$totStr8+$totTir8;
			$Bsep=$totBlack9+$totOri9+$totCho9+$totMan9+$totMat9+$totOre9+$totStr9+$totTir9;
			$Boct=$totBlack10+$totOri10+$totCho10+$totMan10+$totMat10+$totOre10+$totStr10+$totTir10;
			$Bnov=$totBlack11+$totOri11+$totCho11+$totMan11+$totMat11+$totOre11+$totStr11+$totTir11;
			$Bdec=$totBlack12+$totOri12+$totCho12+$totMan12+$totMat12+$totOre12+$totStr12+$totTir12;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">TOTAL</td>
				<td><?php echo "$".number_format($Bjan,2);?></td>
				<td><?php echo "$".number_format($Bfeb,2);?></td>
				<td><?php echo "$".number_format($Bmar,2);?></td>
				<td><?php echo "$".number_format($Bapr,2);?></td>
				<td><?php echo "$".number_format($Bmay,2);?></td>
				<td><?php echo "$".number_format($Bjun,2);?></td>
				<td><?php echo "$".number_format($Bjul,2);?></td>
				<td><?php echo "$".number_format($Bogo,2);?></td>
				<td><?php echo "$".number_format($Bsep,2);?></td>
				<td><?php echo "$".number_format($Boct,2);?></td>
				<td><?php echo "$".number_format($Bnov,2);?></td>
				<td><?php echo "$".number_format($Bdec,2);?></td>
				<td><?php echo "$".number_format($cakeAll,2); ?></td>
			</tr>
		</table>
	</div>
	
	<div id="coffee" class="tabcontent">
		<input type="text" id="myInput3" onkeyup="searchCoff()" placeholder="Search for product names.." title="Type in a name" />
		<br/>
		<h2>COFFEE SALES</h2>
		<br/>
		<table border="1" id="COFFEE">
		
			<?php $coffeeAll=0; ?>
			
			<tr>
				<th style="width:300px;"></th>
				<th style="width:250px;">JAN</th>
				<th style="width:250px;">FEB</th>
				<th style="width:250px;">MARCH</th>
				<th style="width:250px;">APRIL</th>
				<th style="width:250px;">MAY</th>
				<th style="width:250px;">JUNE</th>
				<th style="width:250px;">JULY</th>
				<th style="width:250px;">AUG</th>
				<th style="width:250px;">SEP</th>
				<th style="width:250px;">OCT</th>
				<th style="width:250px;">NOV</th>
				<th style="width:250px;">DEC</th>
				<th style="width:600px;">TOTAL SALES</th>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qvan = "SELECT * FROM order_detail WHERE Item_Name = 'Vanilla Latte'";
			$Rvan = mysqli_query($connect, $Qvan) or die(mysqli_error());
			$totVan=0;
			$totVan1=0;
			$totVan2=0;
			$totVan3=0;
			$totVan4=0;
			$totVan5=0;
			$totVan6=0;
			$totVan7=0;
			$totVan8=0;
			$totVan9=0;
			$totVan10=0;
			$totVan11=0;
			$totVan12=0;
			
			if(mysqli_num_rows($Rvan)>0)
			{
				while($rowVan=mysqli_fetch_assoc($Rvan))
				{
					$totVan+=$rowVan["Total"];
					
					$month = date("m",strtotime($rowVan["Order_Date"])); 
					if($month=='01')
					{
						$totVan1+=$rowVan["Total"];
					}
					else if($month=='02')
					{
						$totVan2+=$rowVan["Total"];
					}
					else if($month=='03')
					{
						$totVan3+=$rowVan["Total"];
					}
					else if($month=='04')
					{
						$totVan4+=$rowVan["Total"];
					}
					else if($month=='05')
					{
						$totVan5+=$rowVan["Total"];
					}
					else if($month=='06')
					{
						$totVan6+=$rowVan["Total"];
					}
					else if($month=='07')
					{
						$totVan7+=$rowVan["Total"];
					}
					else if($month=='08')
					{
						$totVan8+=$rowVan["Total"];
					}
					else if($month=='09')
					{
						$totVan9+=$rowVan["Total"];
					}
					else if($month=='10')
					{
						$totVan10+=$rowVan["Total"];
					}
					else if($month=='11')
					{
						$totVan11+=$rowVan["Total"];
					}
					else if($month=='12')
					{
						$totVan12+=$rowVan["Total"];
					}
				}
			}
			$coffeeAll+=$totVan;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">VANILLA LATTE</td>
				<td><?php echo "$".number_format($totVan1,2);?></td>
				<td><?php echo "$".number_format($totVan2,2);?></td>
				<td><?php echo "$".number_format($totVan3,2);?></td>
				<td><?php echo "$".number_format($totVan4,2);?></td>
				<td><?php echo "$".number_format($totVan5,2);?></td>
				<td><?php echo "$".number_format($totVan6,2);?></td>
				<td><?php echo "$".number_format($totVan7,2);?></td>
				<td><?php echo "$".number_format($totVan8,2);?></td>
				<td><?php echo "$".number_format($totVan9,2);?></td>
				<td><?php echo "$".number_format($totVan10,2);?></td>
				<td><?php echo "$".number_format($totVan11,2);?></td>
				<td><?php echo "$".number_format($totVan12,2);?></td>
				<td><?php echo "$".number_format($totVan,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qlat = "SELECT * FROM order_detail WHERE Item_Name = 'Caramel Latte'";
			$Rlat = mysqli_query($connect, $Qlat) or die(mysqli_error());
			$totLat=0;
			$totLat1=0;
			$totLat2=0;
			$totLat3=0;
			$totLat4=0;
			$totLat5=0;
			$totLat6=0;
			$totLat7=0;
			$totLat8=0;
			$totLat9=0;
			$totLat10=0;
			$totLat11=0;
			$totLat12=0;
			
			if(mysqli_num_rows($Rlat)>0)
			{
				while($rowLat=mysqli_fetch_assoc($Rlat))
				{
					$totLat+=$rowLat["Total"];
					
					$month = date("m",strtotime($rowLat["Order_Date"])); 
					if($month=='01')
					{
						$totLat1+=$rowLat["Total"];
					}
					else if($month=='02')
					{
						$totLat2+=$rowLat["Total"];
					}
					else if($month=='03')
					{
						$totLat3+=$rowLat["Total"];
					}
					else if($month=='04')
					{
						$totLat4+=$rowLat["Total"];
					}
					else if($month=='05')
					{
						$totLat5+=$rowLat["Total"];
					}
					else if($month=='06')
					{
						$totLat6+=$rowLat["Total"];
					}
					else if($month=='07')
					{
						$totLat7+=$rowLat["Total"];
					}
					else if($month=='08')
					{
						$totLat8+=$rowLat["Total"];
					}
					else if($month=='09')
					{
						$totLat9+=$rowLat["Total"];
					}
					else if($month=='10')
					{
						$totLat10+=$rowLat["Total"];
					}
					else if($month=='11')
					{
						$totLat11+=$rowLat["Total"];
					}
					else if($month=='12')
					{
						$totLat12+=$rowLat["Total"];
					}
				}
			}
			$coffeeAll+=$totLat;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">CARAMEL LATTE</td>
				<td><?php echo "$".number_format($totLat1,2);?></td>
				<td><?php echo "$".number_format($totLat2,2);?></td>
				<td><?php echo "$".number_format($totLat3,2);?></td>
				<td><?php echo "$".number_format($totLat4,2);?></td>
				<td><?php echo "$".number_format($totLat5,2);?></td>
				<td><?php echo "$".number_format($totLat6,2);?></td>
				<td><?php echo "$".number_format($totLat7,2);?></td>
				<td><?php echo "$".number_format($totLat8,2);?></td>
				<td><?php echo "$".number_format($totLat9,2);?></td>
				<td><?php echo "$".number_format($totLat10,2);?></td>
				<td><?php echo "$".number_format($totLat11,2);?></td>
				<td><?php echo "$".number_format($totLat12,2);?></td>
				<td><?php echo "$".number_format($totLat,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qmoc = "SELECT * FROM order_detail WHERE Item_Name = 'Peppermint Mocha'";
			$Rmoc = mysqli_query($connect, $Qmoc) or die(mysqli_error());
			$totMoc=0;
			$totMoc1=0;
			$totMoc2=0;
			$totMoc3=0;
			$totMoc4=0;
			$totMoc5=0;
			$totMoc6=0;
			$totMoc7=0;
			$totMoc8=0;
			$totMoc9=0;
			$totMoc10=0;
			$totMoc11=0;
			$totMoc12=0;
			
			if(mysqli_num_rows($Rmoc)>0)
			{
				while($rowMoc=mysqli_fetch_assoc($Rmoc))
				{
					$totMoc+=$rowMoc["Total"];
					$month = date("m",strtotime($rowMoc["Order_Date"])); 
					if($month=='01')
					{
						$totMoc1+=$rowMoc["Total"];
					}
					else if($month=='02')
					{
						$totMoc2+=$rowMoc["Total"];
					}
					else if($month=='03')
					{
						$totMoc3+=$rowMoc["Total"];
					}
					else if($month=='04')
					{
						$totMoc4+=$rowMoc["Total"];
					}
					else if($month=='05')
					{
						$totMoc5+=$rowMoc["Total"];
					}
					else if($month=='06')
					{
						$totMoc6+=$rowMoc["Total"];
					}
					else if($month=='07')
					{
						$totMoc7+=$rowMoc["Total"];
					}
					else if($month=='08')
					{
						$totMoc8+=$rowMoc["Total"];
					}
					else if($month=='09')
					{
						$totMoc9+=$rowMoc["Total"];
					}
					else if($month=='10')
					{
						$totMoc10+=$rowMoc["Total"];
					}
					else if($month=='11')
					{
						$totMoc11+=$rowMoc["Total"];
					}
					else if($month=='12')
					{
						$totMoc12+=$rowMoc["Total"];
					}
				}
			}
			$coffeeAll+=$totMoc;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">PEPPERMINT MOCHA</td>
				<td><?php echo "$".number_format($totMoc1,2);?></td>
				<td><?php echo "$".number_format($totMoc2,2);?></td>
				<td><?php echo "$".number_format($totMoc3,2);?></td>
				<td><?php echo "$".number_format($totMoc4,2);?></td>
				<td><?php echo "$".number_format($totMoc5,2);?></td>
				<td><?php echo "$".number_format($totMoc6,2);?></td>
				<td><?php echo "$".number_format($totMoc7,2);?></td>
				<td><?php echo "$".number_format($totMoc8,2);?></td>
				<td><?php echo "$".number_format($totMoc9,2);?></td>
				<td><?php echo "$".number_format($totMoc10,2);?></td>
				<td><?php echo "$".number_format($totMoc11,2);?></td>
				<td><?php echo "$".number_format($totMoc12,2);?></td>
				<td><?php echo "$".number_format($totMoc,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qdar = "SELECT * FROM order_detail WHERE Item_Name = 'Dark Chocolate Mocha'";
			$Rdar = mysqli_query($connect, $Qdar) or die(mysqli_error());
			$totDar=0;
			$totDar1=0;
			$totDar2=0;
			$totDar3=0;
			$totDar4=0;
			$totDar5=0;
			$totDar6=0;
			$totDar7=0;
			$totDar8=0;
			$totDar9=0;
			$totDar10=0;
			$totDar11=0;
			$totDar12=0;	
			
			if(mysqli_num_rows($Rdar)>0)
			{
				while($rowDar=mysqli_fetch_assoc($Rdar))
				{
					$totDar+=$rowDar["Total"];
					
					$month = date("m",strtotime($rowDar["Order_Date"])); 
					if($month=='01')
					{
						$totDar1+=$rowDar["Total"];
					}
					else if($month=='02')
					{
						$totDar2+=$rowDar["Total"];
					}
					else if($month=='03')
					{
						$totDar3+=$rowDar["Total"];
					}
					else if($month=='04')
					{
						$totDar4+=$rowDar["Total"];
					}
					else if($month=='05')
					{
						$totDar5+=$rowDar["Total"];
					}
					else if($month=='06')
					{
						$totDar6+=$rowDar["Total"];
					}
					else if($month=='07')
					{
						$totDar7+=$rowDar["Total"];
					}
					else if($month=='08')
					{
						$totDar8+=$rowDar["Total"];
					}
					else if($month=='09')
					{
						$totDar9+=$rowDar["Total"];
					}
					else if($month=='10')
					{
						$totDar10+=$rowDar["Total"];
					}
					else if($month=='11')
					{
						$totDar11+=$rowDar["Total"];
					}
					else if($month=='12')
					{
						$totDar12+=$rowDar["Total"];
					}
				}
			}
			$coffeeAll+=$totDar;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">DARK CHOCOLATE MOCHA</td>
				<td><?php echo "$".number_format($totDar1,2);?></td>
				<td><?php echo "$".number_format($totDar2,2);?></td>
				<td><?php echo "$".number_format($totDar3,2);?></td>
				<td><?php echo "$".number_format($totDar4,2);?></td>
				<td><?php echo "$".number_format($totDar5,2);?></td>
				<td><?php echo "$".number_format($totDar6,2);?></td>
				<td><?php echo "$".number_format($totDar7,2);?></td>
				<td><?php echo "$".number_format($totDar8,2);?></td>
				<td><?php echo "$".number_format($totDar9,2);?></td>
				<td><?php echo "$".number_format($totDar10,2);?></td>
				<td><?php echo "$".number_format($totDar11,2);?></td>
				<td><?php echo "$".number_format($totDar12,2);?></td>
				<td><?php echo "$".number_format($totDar,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qtte = "SELECT * FROM order_detail WHERE Item_Name = 'Latte'";
			$Rtte = mysqli_query($connect, $Qtte) or die(mysqli_error());
			$totTte=0;
			$totTte1=0;
			$totTte2=0;
			$totTte3=0;
			$totTte4=0;
			$totTte5=0;
			$totTte6=0;
			$totTte7=0;
			$totTte8=0;
			$totTte9=0;
			$totTte10=0;
			$totTte11=0;
			$totTte12=0;
			
			if(mysqli_num_rows($Rtte)>0)
			{
				while($rowTte=mysqli_fetch_assoc($Rtte))
				{
					$totTte+=$rowTte["Total"];
					
					$month = date("m",strtotime($rowTte["Order_Date"])); 
					if($month=='01')
					{
						$totTte1+=$rowTte["Total"];
					}
					else if($month=='02')
					{
						$totTte2+=$rowTte["Total"];
					}
					else if($month=='03')
					{
						$totTte3+=$rowTte["Total"];
					}
					else if($month=='04')
					{
						$totTte4+=$rowTte["Total"];
					}
					else if($month=='05')
					{
						$totTte5+=$rowTte["Total"];
					}
					else if($month=='06')
					{
						$totTte6+=$rowTte["Total"];
					}
					else if($month=='07')
					{
						$totTte7+=$rowTte["Total"];
					}
					else if($month=='08')
					{
						$totTte8+=$rowTte["Total"];
					}
					else if($month=='09')
					{
						$totTte9+=$rowTte["Total"];
					}
					else if($month=='10')
					{
						$totTte10+=$rowTte["Total"];
					}
					else if($month=='11')
					{
						$totTte11+=$rowTte["Total"];
					}
					else if($month=='12')
					{
						$totTte12+=$rowTte["Total"];
					}
				}
			}
			$coffeeAll+=$totTte;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">LATTE</td>
				<td><?php echo "$".number_format($totTte1,2);?></td>
				<td><?php echo "$".number_format($totTte2,2);?></td>
				<td><?php echo "$".number_format($totTte3,2);?></td>
				<td><?php echo "$".number_format($totTte4,2);?></td>
				<td><?php echo "$".number_format($totTte5,2);?></td>
				<td><?php echo "$".number_format($totTte6,2);?></td>
				<td><?php echo "$".number_format($totTte7,2);?></td>
				<td><?php echo "$".number_format($totTte8,2);?></td>
				<td><?php echo "$".number_format($totTte9,2);?></td>
				<td><?php echo "$".number_format($totTte10,2);?></td>
				<td><?php echo "$".number_format($totTte11,2);?></td>
				<td><?php echo "$".number_format($totTte12,2);?></td>
				<td><?php echo "$".number_format($totTte,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qmac = "SELECT * FROM order_detail WHERE Item_Name = 'Latte Macchiato'";
			$Rmac = mysqli_query($connect, $Qmac) or die(mysqli_error());
			$totMac=0;
			$totMac1=0;
			$totMac2=0;
			$totMac3=0;
			$totMac4=0;
			$totMac5=0;
			$totMac6=0;
			$totMac7=0;
			$totMac8=0;
			$totMac9=0;
			$totMac10=0;
			$totMac11=0;
			$totMac12=0;
			
			if(mysqli_num_rows($Rmac)>0)
			{
				while($rowMac=mysqli_fetch_assoc($Rmac))
				{
					$totMac+=$rowMac["Total"];
					
					$month = date("m",strtotime($rowMac["Order_Date"])); 
					if($month=='01')
					{
						$totMac1+=$rowMac["Total"];
					}
					else if($month=='02')
					{
						$totMac2+=$rowMac["Total"];
					}
					else if($month=='03')
					{
						$totMac3+=$rowMac["Total"];
					}
					else if($month=='04')
					{
						$totMac4+=$rowMac["Total"];
					}
					else if($month=='05')
					{
						$totMac5+=$rowMac["Total"];
					}
					else if($month=='06')
					{
						$totMac6+=$rowMac["Total"];
					}
					else if($month=='07')
					{
						$totMac7+=$rowMac["Total"];
					}
					else if($month=='08')
					{
						$totMac8+=$rowMac["Total"];
					}
					else if($month=='09')
					{
						$totMac9+=$rowMac["Total"];
					}
					else if($month=='10')
					{
						$totMac10+=$rowMac["Total"];
					}
					else if($month=='11')
					{
						$totMac11+=$rowMac["Total"];
					}
					else if($month=='12')
					{
						$totMac12+=$rowMac["Total"];
					}
				}
			}
			$coffeeAll+=$totMac;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">LATTE MACCHIATO</td>
				<td><?php echo "$".number_format($totMac1,2);?></td>
				<td><?php echo "$".number_format($totMac2,2);?></td>
				<td><?php echo "$".number_format($totMac3,2);?></td>
				<td><?php echo "$".number_format($totMac4,2);?></td>
				<td><?php echo "$".number_format($totMac5,2);?></td>
				<td><?php echo "$".number_format($totMac6,2);?></td>
				<td><?php echo "$".number_format($totMac7,2);?></td>
				<td><?php echo "$".number_format($totMac8,2);?></td>
				<td><?php echo "$".number_format($totMac9,2);?></td>
				<td><?php echo "$".number_format($totMac10,2);?></td>
				<td><?php echo "$".number_format($totMac11,2);?></td>
				<td><?php echo "$".number_format($totMac12,2);?></td>
				<td><?php echo "$".number_format($totMac,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qame = "SELECT * FROM order_detail WHERE Item_Name = 'Caffe Americano'";
			$Rame = mysqli_query($connect, $Qame) or die(mysqli_error());
			$totAme=0;
			$totAme1=0;
			$totAme2=0;
			$totAme3=0;
			$totAme4=0;
			$totAme5=0;
			$totAme6=0;
			$totAme7=0;
			$totAme8=0;
			$totAme9=0;
			$totAme10=0;
			$totAme11=0;
			$totAme12=0;
			
			if(mysqli_num_rows($Rame)>0)
			{
				while($rowAme=mysqli_fetch_assoc($Rame))
				{
					$totAme+=$rowAme["Total"];
					
					$month = date("m",strtotime($rowAme["Order_Date"])); 
					if($month=='01')
					{
						$totAme1+=$rowAme["Total"];
					}
					else if($month=='02')
					{
						$totAme2+=$rowAme["Total"];
					}
					else if($month=='03')
					{
						$totAme3+=$rowAme["Total"];
					}
					else if($month=='04')
					{
						$totAme4+=$rowAme["Total"];
					}
					else if($month=='05')
					{
						$totAme5+=$rowAme["Total"];
					}
					else if($month=='06')
					{
						$totAme6+=$rowAme["Total"];
					}
					else if($month=='07')
					{
						$totAme7+=$rowAme["Total"];
					}
					else if($month=='08')
					{
						$totAme8=$rowAme["Total"];
					}
					else if($month=='09')
					{
						$totAme9+=$rowAme["Total"];
					}
					else if($month=='10')
					{
						$totAme10+=$rowAme["Total"];
					}
					else if($month=='11')
					{
						$totAme11+=$rowAme["Total"];
					}
					else if($month=='12')
					{
						$totAme12+=$rowAme["Total"];
					}
				}
			}
			$coffeeAll+=$totAme;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">CAFFE AMERICANO</td>
				<td><?php echo "$".number_format($totAme1,2);?></td>
				<td><?php echo "$".number_format($totAme2,2);?></td>
				<td><?php echo "$".number_format($totAme3,2);?></td>
				<td><?php echo "$".number_format($totAme4,2);?></td>
				<td><?php echo "$".number_format($totAme5,2);?></td>
				<td><?php echo "$".number_format($totAme6,2);?></td>
				<td><?php echo "$".number_format($totAme7,2);?></td>
				<td><?php echo "$".number_format($totAme8,2);?></td>
				<td><?php echo "$".number_format($totAme9,2);?></td>
				<td><?php echo "$".number_format($totAme10,2);?></td>
				<td><?php echo "$".number_format($totAme11,2);?></td>
				<td><?php echo "$".number_format($totAme12,2);?></td>
				<td><?php echo "$".number_format($totAme,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qcap = "SELECT * FROM order_detail WHERE Item_Name = 'Cappuccino'";
			$Rcap = mysqli_query($connect, $Qcap) or die(mysqli_error());
			$totCap=0;
			$totCap1=0;
			$totCap2=0;
			$totCap3=0;
			$totCap4=0;
			$totCap5=0;
			$totCap6=0;
			$totCap7=0;
			$totCap8=0;
			$totCap9=0;
			$totCap10=0;
			$totCap11=0;
			$totCap12=0;
			
			if(mysqli_num_rows($Rcap)>0)
			{
				while($rowCap=mysqli_fetch_assoc($Rcap))
				{
					$totCap+=$rowCap["Total"];
					
					$month = date("m",strtotime($rowCap["Order_Date"])); 
					if($month=='01')
					{
						$totCap1+=$rowCap["Total"];
					}
					else if($month=='02')
					{
						$totCap2+=$rowCap["Total"];
					}
					else if($month=='03')
					{
						$totCap3+=$rowCap["Total"];
					}
					else if($month=='04')
					{
						$totCap4+=$rowCap["Total"];
					}
					else if($month=='05')
					{
						$totCap5+=$rowCap["Total"];
					}
					else if($month=='06')
					{
						$totCap6+=$rowCap["Total"];
					}
					else if($month=='07')
					{
						$totCap7+=$rowCap["Total"];
					}
					else if($month=='08')
					{
						$totCap8+=$rowCap["Total"];
					}
					else if($month=='09')
					{
						$totCap9+=$rowCap["Total"];
					}
					else if($month=='10')
					{
						$totCap10+=$rowCap["Total"];
					}
					else if($month=='11')
					{
						$totCap11+=$rowCap["Total"];
					}
					else if($month=='12')
					{
						$totCap12+=$rowCap["Total"];
					}
				}
			}
			$coffeeAll+=$totCap;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">CAPPUCCINO</td>
				<td><?php echo "$".number_format($totCap1,2);?></td>
				<td><?php echo "$".number_format($totCap2,2);?></td>
				<td><?php echo "$".number_format($totCap3,2);?></td>
				<td><?php echo "$".number_format($totCap4,2);?></td>
				<td><?php echo "$".number_format($totCap5,2);?></td>
				<td><?php echo "$".number_format($totCap6,2);?></td>
				<td><?php echo "$".number_format($totCap7,2);?></td>
				<td><?php echo "$".number_format($totCap8,2);?></td>
				<td><?php echo "$".number_format($totCap9,2);?></td>
				<td><?php echo "$".number_format($totCap10,2);?></td>
				<td><?php echo "$".number_format($totCap11,2);?></td>
				<td><?php echo "$".number_format($totCap12,2);?></td>
				<td><?php echo "$".number_format($totCap,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qcin = "SELECT * FROM order_detail WHERE Item_Name = 'Cinamon Cappuccino'";
			$Rcin = mysqli_query($connect, $Qcin) or die(mysqli_error());
			$totCin=0;
			$totCin1=0;
			$totCin2=0;
			$totCin3=0;
			$totCin4=0;
			$totCin5=0;
			$totCin6=0;
			$totCin7=0;
			$totCin8=0;
			$totCin9=0;
			$totCin10=0;
			$totCin11=0;
			$totCin12=0;
			
			if(mysqli_num_rows($Rcin)>0)
			{
				while($rowCin=mysqli_fetch_assoc($Rcin))
				{
					$totCin+=$rowCin["Total"];
					
					$month = date("m",strtotime($rowCin["Order_Date"])); 
					if($month=='01')
					{
						$totCin1+=$rowCin["Total"];
					}
					else if($month=='02')
					{
						$totCin2+=$rowCin["Total"];
					}
					else if($month=='03')
					{
						$totCin3+=$rowCin["Total"];
					}
					else if($month=='04')
					{
						$totCin4+=$rowCin["Total"];
					}
					else if($month=='05')
					{
						$totCin5+=$rowCin["Total"];
					}
					else if($month=='06')
					{
						$totCin6+=$rowCin["Total"];
					}
					else if($month=='07')
					{
						$totCin7+=$rowCin["Total"];
					}
					else if($month=='08')
					{
						$totCin8+=$rowCin["Total"];
					}
					else if($month=='09')
					{
						$totCin9+=$rowCin["Total"];
					}
					else if($month=='10')
					{
						$totCin10+=$rowCin["Total"];
					}
					else if($month=='11')
					{
						$totCin11+=$rowCin["Total"];
					}
					else if($month=='12')
					{
						$totCin12+=$rowCin["Total"];
					}
				}
			}
			$coffeeAll+=$totCin;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">CINAMON CAPPUCCINO</td>
				<td><?php echo "$".number_format($totCin1,2);?></td>
				<td><?php echo "$".number_format($totCin2,2);?></td>
				<td><?php echo "$".number_format($totCin3,2);?></td>
				<td><?php echo "$".number_format($totCin4,2);?></td>
				<td><?php echo "$".number_format($totCin5,2);?></td>
				<td><?php echo "$".number_format($totCin6,2);?></td>
				<td><?php echo "$".number_format($totCin7,2);?></td>
				<td><?php echo "$".number_format($totCin8,2);?></td>
				<td><?php echo "$".number_format($totCin9,2);?></td>
				<td><?php echo "$".number_format($totCin10,2);?></td>
				<td><?php echo "$".number_format($totCin11,2);?></td>
				<td><?php echo "$".number_format($totCin12,2);?></td>
				<td><?php echo "$".number_format($totCin,2); ?></td>
			</tr>
			
			<?php
			$Cjan=$totVan1+$totLat1+$totMoc1+$totDar1+$totTte1+$totMac1+$totAme1+$totCap1+$totCin1;
			$Cfeb=$totVan2+$totLat2+$totMoc2+$totDar2+$totTte2+$totMac2+$totAme2+$totCap2+$totCin2;
			$Cmar=$totVan3+$totLat3+$totMoc3+$totDar3+$totTte3+$totMac3+$totAme3+$totCap3+$totCin3;
			$Capr=$totVan4+$totLat4+$totMoc4+$totDar4+$totTte4+$totMac4+$totAme4+$totCap4+$totCin4;
			$Cmay=$totVan5+$totLat5+$totMoc5+$totDar5+$totTte5+$totMac5+$totAme5+$totCap5+$totCin5;
			$Cjun=$totVan6+$totLat6+$totMoc6+$totDar6+$totTte6+$totMac6+$totAme6+$totCap6+$totCin6;
			$Cjul=$totVan7+$totLat7+$totMoc7+$totDar7+$totTte7+$totMac7+$totAme7+$totCap7+$totCin7;
			$Cogo=$totVan8+$totLat8+$totMoc8+$totDar8+$totTte8+$totMac8+$totAme8+$totCap8+$totCin8;
			$Csep=$totVan9+$totLat9+$totMoc9+$totDar9+$totTte9+$totMac9+$totAme9+$totCap9+$totCin9;
			$Coct=$totVan10+$totLat10+$totMoc10+$totDar10+$totTte10+$totMac10+$totAme10+$totCap10+$totCin10;
			$Cnov=$totVan11+$totLat11+$totMoc11+$totDar11+$totTte11+$totMac11+$totAme11+$totCap11+$totCin11;
			$Cdec=$totVan12+$totLat12+$totMoc12+$totDar12+$totTte12+$totMac12+$totAme12+$totCap12+$totCin12;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">TOTAL</td>
				<td><?php echo "$".number_format($Cjan,2);?></td>
				<td><?php echo "$".number_format($Cfeb,2);?></td>
				<td><?php echo "$".number_format($Cmar,2);?></td>
				<td><?php echo "$".number_format($Capr,2);?></td>
				<td><?php echo "$".number_format($Cmay,2);?></td>
				<td><?php echo "$".number_format($Cjun,2);?></td>
				<td><?php echo "$".number_format($Cjul,2);?></td>
				<td><?php echo "$".number_format($Cogo,2);?></td>
				<td><?php echo "$".number_format($Csep,2);?></td>
				<td><?php echo "$".number_format($Coct,2);?></td>
				<td><?php echo "$".number_format($Cnov,2);?></td>
				<td><?php echo "$".number_format($Cdec,2);?></td>
				<td><?php echo "$".number_format($coffeeAll,2); ?></td>
			</tr>
		</table>
	</div>
	
	<div id="lightmeal" class="tabcontent">
		<input type="text" id="myInput4" onkeyup="searchLight()" placeholder="Search for product names.." title="Type in a name" />
		<br/>
		<h2>LIGHTMEAL SALES</h2>
		<br/>
		<table border="1" id="LIGHTMEAL">
			
			<?php $lightAll=0; ?>
		
			<tr>
				<th style="width:300px;"></th>
				<th style="width:250px;">JAN</th>
				<th style="width:250px;">FEB</th>
				<th style="width:250px;">MARCH</th>
				<th style="width:250px;">APRIL</th>
				<th style="width:250px;">MAY</th>
				<th style="width:250px;">JUNE</th>
				<th style="width:250px;">JULY</th>
				<th style="width:250px;">AUG</th>
				<th style="width:250px;">SEP</th>
				<th style="width:250px;">OCT</th>
				<th style="width:250px;">NOV</th>
				<th style="width:250px;">DEC</th>
				<th style="width:600px;">TOTAL SALES</th>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qsal = "SELECT * FROM order_detail WHERE Item_Name = 'Salmon Salad'";
			$Rsal = mysqli_query($connect, $Qsal) or die(mysqli_error());
			$totSal=0;
			$totSal1=0;
			$totSal2=0;
			$totSal3=0;
			$totSal4=0;
			$totSal5=0;
			$totSal6=0;
			$totSal7=0;
			$totSal8=0;
			$totSal9=0;
			$totSal10=0;
			$totSal11=0;
			$totSal12=0;
			
			if(mysqli_num_rows($Rsal)>0)
			{
				while($rowSal=mysqli_fetch_assoc($Rsal))
				{
					$totSal+=$rowSal["Total"];
					
					$month = date("m",strtotime($rowSal["Order_Date"])); 
					if($month=='01')
					{
						$totSal1+=$rowSal["Total"];
					}
					else if($month=='02')
					{
						$totSal2+=$rowSal["Total"];
					}
					else if($month=='03')
					{
						$totSal3+=$rowSal["Total"];
					}
					else if($month=='04')
					{
						$totSal4+=$rowSal["Total"];
					}
					else if($month=='05')
					{
						$$totSal5+=$rowSal["Total"];
					}
					else if($month=='06')
					{
						$totSal6+=$rowSal["Total"];
					}
					else if($month=='07')
					{
						$totSal7+=$rowSal["Total"];
					}
					else if($month=='08')
					{
						$totSal8+=$rowSal["Total"];
					}
					else if($month=='09')
					{
						$totSal9+=$rowSal["Total"];
					}
					else if($month=='10')
					{
						$totSal10+=$rowSal["Total"];
					}
					else if($month=='11')
					{
						$totSal11+=$rowSal["Total"];
					}
					else if($month=='12')
					{
						$totSal12+=$rowSal["Total"];
					}
				}
			}
			$lightAll+=$totSal;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">SALMON SALAD</td>
				<td><?php echo "$".number_format($totSal1,2); ?></td>
				<td><?php echo "$".number_format($totSal2,2); ?></td>
				<td><?php echo "$".number_format($totSal3,2); ?></td>
				<td><?php echo "$".number_format($totSal4,2); ?></td>
				<td><?php echo "$".number_format($totSal5,2); ?></td>
				<td><?php echo "$".number_format($totSal6,2); ?></td>
				<td><?php echo "$".number_format($totSal7,2); ?></td>
				<td><?php echo "$".number_format($totSal8,2); ?></td>
				<td><?php echo "$".number_format($totSal9,2); ?></td>
				<td><?php echo "$".number_format($totSal10,2); ?></td>
				<td><?php echo "$".number_format($totSal11,2); ?></td>
				<td><?php echo "$".number_format($totSal12,2); ?></td>
				<td><?php echo "$".number_format($totSal,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qmus = "SELECT * FROM order_detail WHERE Item_Name = 'Mashed Potatoes With Mushrooms'";
			$Rmus = mysqli_query($connect, $Qmus) or die(mysqli_error());
			$totMus=0;
			$totMus1=0;
			$totMus2=0;
			$totMus3=0;
			$totMus4=0;
			$totMus5=0;
			$totMus6=0;
			$totMus7=0;
			$totMus8=0;
			$totMus9=0;
			$totMus10=0;
			$totMus11=0;
			$totMus12=0;
			
			if(mysqli_num_rows($Rmus)>0)
			{
				while($rowMus=mysqli_fetch_assoc($Rmus))
				{
					$totMus+=$rowMus["Total"];
					
					$month = date("m",strtotime($rowMus["Order_Date"])); 
					if($month=='01')
					{
						$totMus1+=$rowMus["Total"];
					}
					else if($month=='02')
					{
						$totMus2+=$rowMus["Total"];
					}
					else if($month=='03')
					{
						$totMus3+=$rowMus["Total"];
					}
					else if($month=='04')
					{
						$totMus4+=$rowMus["Total"];
					}
					else if($month=='05')
					{
						$totMus5+=$rowMus["Total"];
					}
					else if($month=='06')
					{
						$totMus6+=$rowMus["Total"];
					}
					else if($month=='07')
					{
						$totMus7+=$rowMus["Total"];
					}
					else if($month=='08')
					{
						$totMus8+=$rowMus["Total"];
					}
					else if($month=='09')
					{
						$totMus9+=$rowMus["Total"];
					}
					else if($month=='10')
					{
						$totMus10+=$rowMus["Total"];
					}
					else if($month=='11')
					{
						$totMus11+=$rowMus["Total"];
					}
					else if($month=='12')
					{
						$totMus12+=$rowMus["Total"];
					}
				}
			}
			$lightAll+=$totMus;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">MASHED POTATOES WITH MUSHROOMS</td>
				<td><?php echo "$".number_format($totMus1,2); ?></td>
				<td><?php echo "$".number_format($totMus2,2); ?></td>
				<td><?php echo "$".number_format($totMus3,2); ?></td>
				<td><?php echo "$".number_format($totMus4,2); ?></td>
				<td><?php echo "$".number_format($totMus5,2); ?></td>
				<td><?php echo "$".number_format($totMus6,2); ?></td>
				<td><?php echo "$".number_format($totMus7,2); ?></td>
				<td><?php echo "$".number_format($totMus8,2); ?></td>
				<td><?php echo "$".number_format($totMus9,2); ?></td>
				<td><?php echo "$".number_format($totMus10,2); ?></td>
				<td><?php echo "$".number_format($totMus11,2); ?></td>
				<td><?php echo "$".number_format($totMus12,2); ?></td>
				<td><?php echo "$".number_format($totMus,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qegg = "SELECT * FROM order_detail WHERE Item_Name = 'Egg Sandwich'";
			$Regg = mysqli_query($connect, $Qegg) or die(mysqli_error());
			$totEgg=0;
			$totEgg1=0;
			$totEgg2=0;
			$totEgg3=0;
			$totEgg4=0;
			$totEgg5=0;
			$totEgg6=0;
			$totEgg7=0;
			$totEgg8=0;
			$totEgg9=0;
			$totEgg10=0;
			$totEgg11=0;
			$totEgg12=0;
			
			if(mysqli_num_rows($Regg)>0)
			{
				while($rowEgg=mysqli_fetch_assoc($Regg))
				{
					$totEgg+=$rowEgg["Total"];
					
					$month = date("m",strtotime($rowEgg["Order_Date"])); 
					if($month=='01')
					{
						$totEgg1+=$rowEgg["Total"];
					}
					else if($month=='02')
					{
						$totEgg2+=$rowEgg["Total"];
					}
					else if($month=='03')
					{
						$totEgg3+=$rowEgg["Total"];
					}
					else if($month=='04')
					{
						$totEgg4+=$rowEgg["Total"];
					}
					else if($month=='05')
					{
						$totEgg5+=$rowEgg["Total"];
					}
					else if($month=='06')
					{
						$totEgg6+=$rowEgg["Total"];
					}
					else if($month=='07')
					{
						$totEgg7+=$rowEgg["Total"];
					}
					else if($month=='08')
					{
						$totEgg8+=$rowEgg["Total"];
					}
					else if($month=='09')
					{
						$totEgg9+=$rowEgg["Total"];
					}
					else if($month=='10')
					{
						$totEgg10+=$rowEgg["Total"];
					}
					else if($month=='11')
					{
						$totEgg11+=$rowEgg["Total"];
					}
					else if($month=='12')
					{
						$totEgg12+=$rowEgg["Total"];
					}
				}
			}
			$lightAll+=$totEgg;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">EGG SANDWICH</td>
				<td><?php echo "$".number_format($totEgg1,2); ?></td>
				<td><?php echo "$".number_format($totEgg2,2); ?></td>
				<td><?php echo "$".number_format($totEgg3,2); ?></td>
				<td><?php echo "$".number_format($totEgg4,2); ?></td>
				<td><?php echo "$".number_format($totEgg5,2); ?></td>
				<td><?php echo "$".number_format($totEgg6,2); ?></td>
				<td><?php echo "$".number_format($totEgg7,2); ?></td>
				<td><?php echo "$".number_format($totEgg8,2); ?></td>
				<td><?php echo "$".number_format($totEgg9,2); ?></td>
				<td><?php echo "$".number_format($totEgg10,2); ?></td>
				<td><?php echo "$".number_format($totEgg11,2); ?></td>
				<td><?php echo "$".number_format($totEgg12,2); ?></td>
				<td><?php echo "$".number_format($totEgg,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qsan = "SELECT * FROM order_detail WHERE Item_Name = 'Strawberry Sandwich'";
			$Rsan = mysqli_query($connect, $Qsan) or die(mysqli_error());
			$totSan=0;
			$totSan1=0;
			$totSan2=0;
			$totSan3=0;
			$totSan4=0;
			$totSan5=0;
			$totSan6=0;
			$totSan7=0;
			$totSan8=0;
			$totSan9=0;
			$totSan10=0;
			$totSan11=0;
			$totSan12=0;
			
			if(mysqli_num_rows($Rsan)>0)
			{
				while($rowSan=mysqli_fetch_assoc($Rsan))
				{
					$totSan+=$rowSan["Total"];
					
					$month = date("m",strtotime($rowSan["Order_Date"])); 
					if($month=='01')
					{
						$totSan1+=$rowSan["Total"];
					}
					else if($month=='02')
					{
						$totSan2+=$rowSan["Total"];
					}
					else if($month=='03')
					{
						$totSan3+=$rowSan["Total"];
					}
					else if($month=='04')
					{
						$totSan4+=$rowSan["Total"];
					}
					else if($month=='05')
					{
						$totSan5+=$rowSan["Total"];
					}
					else if($month=='06')
					{
						$totSan6+=$rowSan["Total"];
					}
					else if($month=='07')
					{
						$totSan7+=$rowSan["Total"];
					}
					else if($month=='08')
					{
						$totSan8+=$rowSan["Total"];
					}
					else if($month=='09')
					{
						$totSan9+=$rowSan["Total"];
					}
					else if($month=='10')
					{
						$totSan10+=$rowSan["Total"];
					}
					else if($month=='11')
					{
						$totSan11+=$rowSan["Total"];
					}
					else if($month=='12')
					{
						$totSan12+=$rowSan["Total"];
					}
				}
			}
			$lightAll+=$totSan;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">STRAWBERRY SANDWICH</td>
				<td><?php echo "$".number_format($totSan1,2); ?></td>
				<td><?php echo "$".number_format($totSan2,2); ?></td>
				<td><?php echo "$".number_format($totSan3,2); ?></td>
				<td><?php echo "$".number_format($totSan4,2); ?></td>
				<td><?php echo "$".number_format($totSan5,2); ?></td>
				<td><?php echo "$".number_format($totSan6,2); ?></td>
				<td><?php echo "$".number_format($totSan7,2); ?></td>
				<td><?php echo "$".number_format($totSan8,2); ?></td>
				<td><?php echo "$".number_format($totSan9,2); ?></td>
				<td><?php echo "$".number_format($totSan10,2); ?></td>
				<td><?php echo "$".number_format($totSan11,2); ?></td>
				<td><?php echo "$".number_format($totSan12,2); ?></td>
				<td><?php echo "$".number_format($totSan,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qham = "SELECT * FROM order_detail WHERE Item_Name = 'Chicken Ham Sandwich'";
			$Rham = mysqli_query($connect, $Qham) or die(mysqli_error());
			$totHam=0;
			$totHam1=0;
			$totHam2=0;
			$totHam3=0;
			$totHam4=0;
			$totHam5=0;
			$totHam6=0;
			$totHam7=0;
			$totHam8=0;
			$totHam9=0;
			$totHam10=0;
			$totHam11=0;
			$totHam12=0;
			
			if(mysqli_num_rows($Rham)>0)
			{
				while($rowHam=mysqli_fetch_assoc($Rham))
				{
					$totHam+=$rowHam["Total"];
					
					$month = date("m",strtotime($rowHam["Order_Date"])); 
					if($month=='01')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='02')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='03')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='04')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='05')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='06')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='07')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='08')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='09')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='10')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='11')
					{
						$totHam1+=$rowHam["Total"];
					}
					else if($month=='12')
					{
						$totHam1+=$rowHam["Total"];
					}
				}
			}
			$lightAll+=$totHam;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">CHICKEN HAM SANDWICH</td>
				<td><?php echo "$".number_format($totHam1,2); ?></td>
				<td><?php echo "$".number_format($totHam2,2); ?></td>
				<td><?php echo "$".number_format($totHam3,2); ?></td>
				<td><?php echo "$".number_format($totHam4,2); ?></td>
				<td><?php echo "$".number_format($totHam5,2); ?></td>
				<td><?php echo "$".number_format($totHam6,2); ?></td>
				<td><?php echo "$".number_format($totHam7,2); ?></td>
				<td><?php echo "$".number_format($totHam8,2); ?></td>
				<td><?php echo "$".number_format($totHam9,2); ?></td>
				<td><?php echo "$".number_format($totHam10,2); ?></td>
				<td><?php echo "$".number_format($totHam11,2); ?></td>
				<td><?php echo "$".number_format($totHam12,2); ?></td>
				<td><?php echo "$".number_format($totHam,2); ?></td>
			</tr>
			
			<?php
			//Q=query ; R=result
			$Qche = "SELECT * FROM order_detail WHERE Item_Name = 'Egg & Cheese Sandwich'";
			$Rche = mysqli_query($connect, $Qche) or die(mysqli_error());
			$totChe=0;
			$totChe1=0;
			$totChe2=0;
			$totChe3=0;
			$totChe4=0;
			$totChe5=0;
			$totChe6=0;
			$totChe7=0;
			$totChe8=0;
			$totChe9=0;
			$totChe10=0;
			$totChe11=0;
			$totChe12=0;
			
			if(mysqli_num_rows($Rche)>0)
			{
				while($rowChe=mysqli_fetch_assoc($Rche))
				{
					$totChe+=$rowChe["Total"];
					
					$month = date("m",strtotime($rowChe["Order_Date"])); 
					if($month=='01')
					{
						$totChe1+=$rowChe["Total"];
					}
					else if($month=='02')
					{
						$totChe2+=$rowChe["Total"];
					}
					else if($month=='03')
					{
						$totChe3+=$rowChe["Total"];
					}
					else if($month=='04')
					{
						$totChe4+=$rowChe["Total"];
					}
					else if($month=='05')
					{
						$totChe5+=$rowChe["Total"];
					}
					else if($month=='06')
					{
						$totChe6+=$rowChe["Total"];
					}
					else if($month=='07')
					{
						$totChe7+=$rowChe["Total"];
					}
					else if($month=='08')
					{
						$totChe8+=$rowChe["Total"];
					}
					else if($month=='09')
					{
						$totChe9+=$rowChe["Total"];
					}
					else if($month=='10')
					{
						$totChe10+=$rowChe["Total"];
					}
					else if($month=='11')
					{
						$totChe11+=$rowChe["Total"];
					}
					else if($month=='12')
					{
						$totChe12+=$rowChe["Total"];
					}
				}
			}
			$lightAll+=$totChe;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">EGG & CHEESE SANDWICH</td>
				<td><?php echo "$".number_format($totChe1,2); ?></td>
				<td><?php echo "$".number_format($totChe2,2); ?></td>
				<td><?php echo "$".number_format($totChe3,2); ?></td>
				<td><?php echo "$".number_format($totChe4,2); ?></td>
				<td><?php echo "$".number_format($totChe5,2); ?></td>
				<td><?php echo "$".number_format($totChe6,2); ?></td>
				<td><?php echo "$".number_format($totChe7,2); ?></td>
				<td><?php echo "$".number_format($totChe8,2); ?></td>
				<td><?php echo "$".number_format($totChe9,2); ?></td>
				<td><?php echo "$".number_format($totChe10,2); ?></td>
				<td><?php echo "$".number_format($totChe11,2); ?></td>
				<td><?php echo "$".number_format($totChe12,2); ?></td>
				<td><?php echo "$".number_format($totChe,2); ?></td>
			</tr>
			
			<?php
			$Djan=$totSal1+$totMus1+$totEgg1+$totSan1+$totHam1+$totChe1;
			$Dfeb=$totSal2+$totMus2+$totEgg2+$totSan2+$totHam2+$totChe2;
			$Dmar=$totSal3+$totMus3+$totEgg3+$totSan3+$totHam3+$totChe3;
			$Dapr=$totSal4+$totMus4+$totEgg4+$totSan4+$totHam4+$totChe4;
			$Dmay=$totSal5+$totMus5+$totEgg5+$totSan5+$totHam5+$totChe5;
			$Djun=$totSal6+$totMus6+$totEgg6+$totSan6+$totHam6+$totChe6;
			$Djul=$totSal7+$totMus7+$totEgg7+$totSan7+$totHam7+$totChe7;
			$Dogo=$totSal8+$totMus8+$totEgg8+$totSan8+$totHam8+$totChe8;
			$Dsep=$totSal9+$totMus9+$totEgg9+$totSan9+$totHam9+$totChe9;
			$Doct=$totSal10+$totMus10+$totEgg10+$totSan10+$totHam10+$totChe10;
			$Dnov=$totSal11+$totMus11+$totEgg11+$totSan11+$totHam11+$totChe11;
			$Ddec=$totSal12+$totMus12+$totEgg12+$totSan12+$totHam12+$totChe12;
			?>
			
			<tr>
				<td style="text-align:left;padding-left:20px;font-size:18px;font-weight:bold;">TOTAL</td>
				<td><?php echo "$".number_format($Djan,2);?></td>
				<td><?php echo "$".number_format($Dfeb,2);?></td>
				<td><?php echo "$".number_format($Dmar,2);?></td>
				<td><?php echo "$".number_format($Dapr,2);?></td>
				<td><?php echo "$".number_format($Dmay,2);?></td>
				<td><?php echo "$".number_format($Djun,2);?></td>
				<td><?php echo "$".number_format($Djul,2);?></td>
				<td><?php echo "$".number_format($Dogo,2);?></td>
				<td><?php echo "$".number_format($Dsep,2);?></td>
				<td><?php echo "$".number_format($Doct,2);?></td>
				<td><?php echo "$".number_format($Dnov,2);?></td>
				<td><?php echo "$".number_format($Ddec,2);?></td>
				<td><?php echo "$".number_format($lightAll,2); ?></td>
			</tr>
		</table>
	</div>
	
	<script>
		function openCity(evt, itemName) 
		{
			var i, tabcontent, tablinks;
			
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) 
			{
				tabcontent[i].style.display = "none";
			}
			
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) 
			{
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			
			document.getElementById(itemName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
	
</body>
</html>