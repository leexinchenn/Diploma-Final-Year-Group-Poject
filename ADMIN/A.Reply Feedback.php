<?php include("dataconnection.php"); ?>
<html>
<head>
<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<style>
/* The popup form - hidden by default */
.form-popup {
display: none;
bottom: 0;
z-index: 9;
}

body{
background-color : #484848;
margin: 0;
padding: 0;
}

h1{
color : #000000;
text-align : center;
font-family: "SIMPSON";
}

form{
width: 300px;
margin-left:35%;
margin-top:10%;
}

.table, tr, th, td{
border-collapse:collapse;
border-left:none;
border-right:none;	
border-spacing: 1px;
}

.table tr{
height:40px;
}

.table{
table-layout:fixed; 
width:125%;
background-color:white;
}
</style>
</head>
			
<?php
if(isset($_GET["reply"])) 
{
	$uid = $_GET["id"];
	$udes = $_GET["des"];
	$reply = $_GET["reply"];
?>
<body>	

	<div class="form-popup" id="myForm">
		<form method="post" class="form-container">
			<textarea rows="10" cols="50" style="float:left;margin-top:20px;" placeholder="Reply here..." name="reply" required ></textarea>
			<br/><br/><br/><br/><br/><br/><br/><br/>
			<input type="submit" name="sendbtn" value="SEND" style="float:left;margin-top:30px;"/>
			<span style="float:left;margin-top:30px;margin-left:10px;"><a href="A.View Feedback Detail.php"><button type="button" class="btn cancel" onclick="closeForm()">Close</button></a></span>
		</form>
	</div>
	
	<!--div class="form-popup" id="myForm">
		<form method="post" class="form-container">
			<table class="table">
				<tr>
					<th style="text-align:left;padding-left:10px;">Customer Feedback Description</th>
				</tr>
				
				<tr>
					<td style="word-wrap: break-word;padding-left:10px;"><?php //echo $udes; ?></td>
				</tr>
				<tr>
					<th style="text-align:left;padding-left:10px;">Previous Reply</th>
				</tr>
				<tr>
					<td style="word-wrap: break-word;padding-left:10px;"><?php //echo $reply;?></td>
				</tr>
			</table>
			
			<textarea rows="10" cols="50" style="float:left;margin-top:20px;" placeholder="Reply here..." name="reply" required ></textarea>
			<br/><br/><br/><br/><br/><br/><br/><br/>
			<input type="submit" name="sendbtn" value="SEND" style="float:left;margin-top:30px;"/>
			<span style="float:left;margin-top:30px;margin-left:10px;"><a href="A.View Feedback Detail.php"><button type="button" class="btn cancel" onclick="closeForm()">Close</button></a></span>
		</form>
	</div-->
</body>
</html>
	
<script>
//function openForm() {
  document.getElementById("myForm").style.display = "block";
//}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>		
	
<?php
	if(isset($_POST["sendbtn"]))
	{	
		$Rreply = $_POST["reply"];
		$reply = "UPDATE feedback set Reply='$Rreply' WHERE No = $uid";
		
		if(mysqli_query($connect,$reply))
		{
?>
			<script type="text/javascript">
				alert("REPLY SENT");
			</script>
<?php
			header("refresh:0.2; url=A.View Feedback Detail.php");
		}
		else
		{
			echo "Error " .mysqli_error($connect);
		}
	}
}
?>