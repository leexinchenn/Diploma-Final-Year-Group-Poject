<?php
	include("dataconnection.php");
	session_start();
?>
<html>
<head>
	<title>Bleu Foncé</title>
<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<link rel="stylesheet" href="userfooter.css">
<link rel="stylesheet" href="userheader.css">
<link rel="stylesheet" href="userheader2.css">
	<style>
	#none{width: 90%; margin-left: auto; margin-right: auto; margin-top: 2%;}
	#none p{font-family:Garamond, serif; font-size: 2vw; padding-bottom: 2.5%;}
	#none a{color:#878282;}
	#none a:visited{color:#878282;}
	</style>
</head>
<body>
<div class="sidebar">
		<nav>
			<div class="logo"><img src="http://localhost/fyp/header/transparentlogo.png" alt="logo image"></img></div>
			<div class="choose">
				<dl>
					<a href="http://localhost/fyp/INDEX/bulBoard.php"><dt class="aa"><p>HOME</p></dt></a>
					<a href="http://localhost/fyp/INDEX/OurStory.php"><dt class="ab"><p>ABOUT US</p></dt></a>
					<dt class="ac"><a href="http://localhost/fyp/USER/Menu.php"><p>MENU</p></a>
						<div class="drop">
							<a href="http://localhost/fyp/USER/Menu.php">ALL MENU</a>
							<a href="http://localhost/fyp/USER/MenuCoffee.php">COFFEE</a>
							<a href="http://localhost/fyp/USER/MenuBingsu.php">BINGSU</a>
							<a href="http://localhost/fyp/USER/Menudtghtmeal.php">LIGHTMEAL</a>
							<a href="http://localhost/fyp/USER/MenuCake.php">CAKE</a>
							<a href="http://localhost/fyp/USER/MenuJuice.php">JUICE</a>
						</div>
					</dt>
					<dt class="ad"><a href="http://localhost/fyp/USER/DeliveryMenu.php"><p>DELIVERY</p></a>
						<div class="drop">
							<a href="http://localhost/fyp/USER/DeliveryMenu.php">DELIVERY MENU</a>
							<a href="http://localhost/fyp/USER/ViewDeliveryStatus.php">DELIVERY STATUS</a>
						</div>
					</dt>
					<a href="http://localhost/fyp/INDEX/RateBoard.php"><dt class="ae"><p>RATING</p></dt></a>
					<a href="http://localhost/fyp/INDEX/COntactUs.php"><dt class="af"><p>CONTACT US</p></dt></a>
					<dt class="ag"><img src="http://localhost/fyp/header/profile.png" alt="profile image">
						<div class="drop">
							<a href="#" onclick="document.getElementById('id01').style.display='block'">PROFILE</a>
							<a href="http://localhost/fyp/USER/Feedback.php">FEEDBACK</a>
							<a href="http://localhost/fyp/USER/RateReview.php">RATE & REVIEW</a>
							<div class="logout"><a href="http://localhost/fyp/USER/logout.php">LOG OUT</a></div>
						</div>
					</dt>
				</dl>
			</div>
			<div class="img1" >
				<a href="http://localhost/fyp/USER/Cart.php"><img src="http://localhost/fyp/header/cart.png" alt="profile image" title="cart"></img></a>
			</div>
		</nav>
	</div>
	
<div id="id01" class="modal">
	<form class="modal-content animate" action="" method="post">
		<div class="imgcontainer">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>
		<?php
		if($_SESSION["id"]) 
		{
		?> 
		<div class="container">
			<b>Full Name : </b><?php echo $_SESSION["fullname"]; ?><br/><br/>
			<b>Username  : </b><?php echo $_SESSION["username"]; ?><br/><br/>
			<b>Password  : </b><?php echo $_SESSION["password"]; ?><br/><br/>
			<b>Email     : </b><?php echo $_SESSION["email"]; ?><br/><br/>
			<b>Mobile    : </b><?php echo $_SESSION["mobile"]; ?><br/><br/>
		</div>
		<div class="container" style="background-color:#f1f1f1">
		  <a href="http://localhost/fyp/USER/editprofile.php">Edit Profile</a>
		</div>
		<?php
		}
		else
		{
			?>
			<div id="none">
				<p><b>Click <a href="http://localhost/fyp/USER/userLogin.php">here</a> to Login first.</b></p>
			</div>
			<?php
		}
		?>
	</form>
</div>
<div style="clear:both"></div>	

<div class="form-popup" id="myForm">
	  <form action="/action_page.php" class="form-container">
	  
		<label for="cpassword"><b>Current Password</b></label>
		<input type="password" placeholder="Enter Current Password" name="cpass" id="myInput"required>
		<input class="showpass" type="checkbox" onclick="myFunction()"> Show Password
		
		<br/><br/><br/>
		<label for="npassword"><b> New Password</b></label>
		<input type="password" placeholder="Enter New Password" name="npass" id="newPass"required>
		<input class="showpass" type="checkbox" onclick="myFunction2()"> Show Password

		<br/><br/><br/>
		<button type="button" class="subbtn" >Submit</button>
		<button type="button" class="clobtn" onclick="closeForm()">Close</button>
	  </form>
  </div> 
  
  
  <!--here-->

<br/>
	<p style="float:right; margin-right:25%; color:red;">*NOTED THAT OUR CAFE DELIVERING SYSTEM JUST FOR USER WHO STAY WITHIN 10KM TO OUR CAFE*</p>
	
<form action="" method="post" enctype="multiport/form-data">
	<?php
	$data="SELECT * FROM bulletinboard";
	$result=mysqli_query($connect, $data);
	
	if(mysqli_num_rows($result)>0) //if there are data
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
	
	<img src="data:image/png;base64,<?php echo base64_encode($row['DesignPic']);?>" alt="New Item Image" width="15%;" style="margin-left:150px;"/>
	<img src="data:image/png;base64,<?php echo base64_encode($row['NewItemPic']);?>" width="40%" style="float:right; margin-right:15%; margin-top:5%;"/>
	<p style="font-weight:bold; margin-left:90px; font-size:20px;"><?php echo $row['ItemName']?></p>
	<br/><br/>
	<p style="margin-left:95px; font-family:Garamond;"><?php echo $row['explain1']?></p>
	<br/>
	<p style="margin-left:190px; font-family:Garamond;"><?php echo $row['explain2']?></p>
	
	
	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<img src="data:image/png;base64,<?php echo base64_encode($row['NewItemPic2']);?>"width="350px" style="margin-left:10%;"/>
	<div style="float:right; margin-top:10%;">
		<img src="data:image/png;base64,<?php echo base64_encode($row['DesignPic2']);?>" style="float:right; width:30%; margin-right:25%;"/>
		<a style="font-weight:bold; font-size:20px;;"><?php echo $row['Item2Name']?></a>
		<br/><br/><br/>
		<a style="margin-left:10px; font-family:Garamond;"><?php echo $row['explain3']?></a>
		<br/><br/>
		<a style="margin-left:50px; font-family:Garamond;"> <?php echo $row['explain4']?></a>
	</div>
	<br/><br/><br/><br/><br/>
	
	
	
	<img src="data:image/png;base64,<?php echo base64_encode($row['OfferPic']);?>" width="20%"/>
	<a style="float:right; margin-right:45%;  font-weight:bold;">
	 </a>
	
	<div style="float:right; margin-right:25%;">
	<a style="font-size:25px; font-weight:bold;">USER PROMOTIONS !!</a>
	<br/><br/>
	<br/><br/>
	<a><b style="color:red"><?php echo $row['PromoText1'];?></b></a><br/><br/>
	<a><b style="color:red"><?php echo $row['PromoText2'];?></b></a>
	</br></br></br></br></br></br>
	</div>
	
	<?php
		}
	}
	
	else
	{
		echo"0 results";
	}
	?>
	
	<div style="clear:both"></div>
	<div id="footer">
		<p>© Bleu Foncé 2020 | All rights reserved</p>
	</div>
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
