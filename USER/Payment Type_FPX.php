<!DOCTYPE HTML>

<?php include("dataconnection.php"); ?>

<?php
$uid = $_GET["uid"]; 
$discount = $_GET["discount"];
$total = $_GET["total"];
$delivery = $_GET["delivery"];
$totPay = $_GET["totPay"];
?>

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
}

.bdy{
	width:90%;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	margin-bottom:5%;
}

.debit{
text-align:center;
}

label{
font-weight:bold;
line-height:0.1px;
font-size:18px;
}
					
button a:hover{
font-weight:bold;
}

#fpx{
display:block;
margin-left:auto;
margin-right:auto;
outline:3px solid black;
width:95px;
}

.container{
position:relative;
padding-left:40px;
cursor:pointer;
font-size:20px;
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none;
color:#708090;
}

/* Hide the browser's default checkbox */
.container input{
position:absolute;
opacity:0;
cursor:pointer;
height:0;
width:0;
}

/* Create a custom checkbox */
.checkmark {
position:absolute;
top:0px;
left:0;
height:20px;
width:20px;
background-color:#eee;
border-radius:15px;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
background-color:#ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
background-color:#2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
content:"";
position:absolute;
display:none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
display:block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
left:6px;
top:3px;
width:3px;
height:7px;
border:solid white;
border-width:0 3px 3px 0;
-webkit-transform:rotate(45deg);
-ms-transform:rotate(45deg);
transform:rotate(45deg);
}
</style>
<script type="text/javascript"> 	
function validateForm()
{
	var a = document.getElementById("check");
	var b = document.payForm.fpx.value;
	
	if(a.checked != true)
	{
		alert("Please agree with Bleu Fonce's T&C");
		return false;
	}
	else if(b=="")
	{
		alert("Please select a FPX payment option");
		return false;
	}
	else
	{
		alert("PAYMENT SUCCESSFUL!");
	}
}
</script> 
</head>

<body>
	<h1>Checkout Payment</h1>
	<hr/><br/><br/>
	
	<!--get data from database phpmyadmin-->
	<!--to do OTP-->
	<?php
	
	//$result = mysqli_query($connect, "select * from contact");	
	//$count = mysqli_num_rows($result);
	
	//while($row = mysqli_fetch_assoc($result))
	//{
	
	?>		
	<div class="bdy">
	<form name="payForm" action="DeliveryStatus.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $delivery; ?>&totPay=<?php echo $totPay; ?>&PayType=<?php echo "FPX"; ?>&PayStatus=<?php echo "Successful"; ?>" target="_blank" onsubmit="return validateForm()" method="post">
		<img src="http://localhost/fyp/icon/fpxnew.png" id="fpx"/>
		<br/><br/><br/>
	
		<label class="container">
			I agree to Bleu Fonce's Terms & Conditions, Privacy Notice.
			<input type="checkbox" id="check" />
			<span class="checkmark"></span>
		</label>
		<br/><br/><br/>
		
		<!--if payment option is fpx-->
		<div class="debit">
			<label>Select a FPX Payment Option&nbsp;&nbsp;&nbsp;</label>
			<select name="fpx" onchange="window.open(location = this.value)" >
			<!--select name="SelectURL" onchange="window.open(document.nav.SelectURL.options[document.nav.SelectURL.selectedIndex].value)"-->
				<option value=""></option>
				<option value="https://rib.affinonline.com/retail/#!/login">Affin Bank Berhad</option>
				<option value="https://www.allianceonline.com.my/personal/login/login.do">Alliance Bank Malaysia Berhad</option>
				<option value="https://www.cimbclicks.com.my/clicks/#/">CIMB Bank Berhad</option>
				<option value="https://internet.ocbc.com.my/internet-banking/LoginV2/Login?rc=INB">OCBC Bank Berhad</option>
				<option value="https://logon.rhbbank.com.sg/default.htm">RHB Bank Berhad</option>
				<option value="https://s.hongleongconnect.my/rib/app/fo/login?web=1">Hong Leong Bank Berhad</option>
				<option value="https://www.maybank2u.com.my/home/m2u/common/login.do">Maybank2u</option>
				<option value="https://www2.pbebank.com/myIBK/apppbb/servlet/BxxxServlet?RDOName=BxxxAuth&MethodName=login">Public Bank Berhad </option>
			</select>
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<input type="submit" value="Continue" style="width:100px;height:30px;background-color:#191970;color:white;font-size:15px;border-radius:5px;border-style:none;" />
		<br/><br/>
	</form>
	<?php //} ?>
	<div style="margin-left:44%;">
		<img src="http://localhost/fyp/icon/lock.png" width="15px" height="15px" style="float:left;padding-right:5px;" />
		<p style="color:black;font-size:13px;line-height:15px; text-align:left;">SECURE PAYMENT</p>
	</div>
	</div>
</body>
</html>