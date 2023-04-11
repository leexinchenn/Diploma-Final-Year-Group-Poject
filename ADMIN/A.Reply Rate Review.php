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

form{
width: 300px;
margin-left:35%;
margin-top:10%;
}
</style>
</head>

<body>
	<div class="form-popup" id="myForm">				  
		<form method="post" class="form-container">
			<textarea rows="10" cols="50" style="float:left;margin-top:20px;" placeholder="Reply here..." name="reply" required ></textarea>
			<br/><br/><br/><br/><br/><br/><br/><br/>
			<input type="submit" name="sendbtn" value="SEND" style="float:left;margin-top:30px;"/>
			<span style="float:left;margin-top:30px;margin-left:10px;"><a href="A.View Rate Detail.php"><button type="button" class="btn cancel" onclick="closeForm()">Close</button></a></span>
		</form>
	</div>
</body>
</html>
				
<?php
if(isset($_GET["reply"])) 
{
	$uid = $_GET["id"];
	
?>
	
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
		$reply = "UPDATE rate_review set Reply='$Rreply' where No = $uid";
		
		if(mysqli_query($connect,$reply))
		{
?>
			<script type="text/javascript">
				alert("REPLY SENT");
			</script>
<?php
			header("refresh:0.2; url=A.View Rate Detail.php");
		}
		else
		{
			echo "Error " .mysqli_error($connect);
		}
	}
}

?>