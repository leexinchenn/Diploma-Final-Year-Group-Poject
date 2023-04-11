<?php
	include("dataconnection.php");
	session_start();
?>
<html>
<head>
	<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
	<style>
		body{background-color: #FDF5E6;}
		h1{text-align:center;font-size: 5.5vw;margin-top:2%;margin-bottom:2%;}
		
		form{font-size:120%; width:90%; margin-left: auto; margin-right: auto;}
		#name input[type="text"]{border-style: none; height: 25px; margin-left: 103px; border-radius: 5px;}
		#img input[type="text"]{border-style: none; height: 25px; margin-left: 45px; border-radius: 5px;}
		#price input[type="number"]{border-style: none; height: 25px; margin-left:5px; border-radius: 5px;}
		#name input[type="text"]:hover{background-color: #ECECEC;}
		#img input[type="text"]:hover{background-color: #ECECEC;}
		#price input[type="number"]:hover{background-color: #ECECEC;}
		#name input[type="text"]:focus{background-color: #ECECEC;}
		#img input[type="text"]:focus{background-color: #ECECEC;}
		#price input[type="number"]:focus{background-color: #ECECEC;}
		#subbtn input[type="submit"]{margin-top:30px; width: 170px; height:30px; letter-spacing: 1px; border-radius: 5px; border-width:1px; background-color:f2f2f2; font-size:16px; font-family:times new roman;}
		#subbtn input[type="submit"]:hover{font-weight: bold; background-color: #e0dede;}
	</style>
</head>

<body>
	<?php include("A.header.php");?>

  
  
  <!--here-->

<br/>
<p style="float:right; margin-right:25%; color:red;">*NOTED THAT OUR CAFE DELIVERING SYSTEM JUST FOR USER WHO STAY WITHIN 10KM TO OUR CAFE*</p>
<form action="editbbdatabase.php" method="post" enctype="multiport/form-data">
	
	<img src="ex1.png" style="width:50%; float:right;border:3px solid black">
	<div style=" margin-top:10%;">
		<p>1. Insert design picture here</p>
		<input type="file" name="designpic"id="designpic" required />
	</div>
	
	<div style="margin-left:20%;">
		<p>2. Insert new item's picture here</p>
		<input type="file" name="newitempic"id="newitempic" required />
	</div>
	
	<div >
		<input type="text" id="ItemName"name="ItemName" placeholder="3. New Item Name" required />
	</div>
	<br/>
	<div style="margin-left:0%;">
		<input type="text" id="explain1"name="explain1" placeholder="4. Explain New Item" required />
	</div>
	<br/>
	<div style="margin-left:5%;">
		<input type="text" id="explain2" name="explain2"placeholder="5. Explain New Item 2" required />
	</div>
	<br/><br/><br/><br/>
	
	
	<img src="ex2.png" style="width:50%; float:right;border:3px solid black">
	<div>
		<p>2. Insert best seller's picture here</p>
		<input type="file" name="newitempic2" id="newitempic2" required />
	</div>
	<div style="float:right; margin-right:5%;">
		<p>1. Insert design picture here</p>
		<input type="file" name="designpic2" id="designpic2" required />
	</div>
	<br/>
	<div style="margin-left:2%;">
		<input type="text" id="Item2Name" name="Item2Name"placeholder="3. New Item Name" required />
	</div>
	
	<br/>
	<div style="margin-left:2%;">
		<input type="text" id="explain3" name="explain3" placeholder="4. Explain New Item" required />
	</div>
	<br/>
	<div style="margin-left:4%;">
		<input type="text" id="explain4" name="explain4" placeholder="5. Explain New Item "required />
	</div>
	
	
	<br/><br/><br/>
	<img src="ex3.png" style="width:50%; float:right;border:3px solid black">
	<div>
		<p>1. Insert offer picture here</p>
		<input type="file" name="offerpic" id="offerpic" required />
	</div>

	<br/>
	<div style="margin-left:2%;">
		<input type="text" name="promotext1" id="promotext1" placeholder="2. Explain offer" required />
	</div>
	<br/>
	<div style="margin-left:2%;">
		<input type="text" name="promotext2"id="promotext2" placeholder="3. Explain second offer" required />
	</div>
	<input type="submit" name="submit" value="Update" style="float:right; margin-right:40%; margin-top:5%; width:20%; height:8%;" >
	</form>
	
</body>
</html>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function changepassword(){
	document.getElementById("myForm").stylr.display = "block";
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm(){
	document.getElementById("myForm").style.display = "none";
}

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("newPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
