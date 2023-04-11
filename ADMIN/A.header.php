<html>
<head>
<style>

body { 
margin: 0;
font-family: Arial, Helvetica, sans-serif;
background-color:#FDF5E6;
margin-bottom:10%;
}

h1{
	font-family:times new roman;
}

.adheader{
	width:100%;
	height: 80px;
	background-color:#fff;
	margin-bottom:1%;
	margin-top:0px;
}

.adlogo{
	width:11%; height:100%; float: left;
}

.adlogo img{
	width:65%;
	margin-top:3%; margin-left: 8%;
}

.coo{
	width:78%;
	height:100%;
	float: left;
	text-align:center;
	font-size: 1.4vw;
	font-family:"Courier New";
}

.coo a{
	float:left;
	width:33.33%;
	color:#222;
	text-decoration:none;
	padding-top:3.1%;
	padding-bottom:3%;
}

.coo a:hover{
	height:auto;
	background-color:#F0F0F0;
}

.pepo{
	width:11%;
	height:100%;
	float:right;
	text-align:right;
}

.pepo img{
	padding-right:8%;
	padding-top:8%;
	width:45%;
}

.pepo:hover .{

}

.pepo:hover .dropdown{
	display: block;
}

.dropdown{
	display: none;
	position: absolute;
	background-color:#fff;
	min-width:11%;
	z-index: 1;
}

.dropdown a{
	display: block;
	font-family:"Courier New";
	font-size:1.1vw;
	color:#222;
	text-align:left;
	padding:20px 10px;
	text-decoration:none;
}

.dropdown .logout :hover{
	background-color: #c62828;
	color:white;
}

.dropdown :hover{
	background-color: #f3f3f3;
}



</style>
</head>
<body>
	<div class="adheader">
		<div class="adlogo">
		<img class="logo" src="http://localhost/fyp/header/transparentLogo.png"/>
		</div>
		
		<div class="coo">
			<a href="A.Landing.php" class="H">HOME</a>
			<a href="A.View Transaction History.php" class="T">TRANSACTION HISTORY</a>
			<a href="A.SalesReport.php" class="S">SALES REPORT</a>
		</div>
		
		<div class="pepo"><img src="http://localhost/fyp/header/adminProfile.png" width="50px" />
			<div class="dropdown">
				<a style="cursor:pointer;" href="A.EditProfile.php">CHANGE PASSWORD</a>
				<div class="logout"><a style="cursor:pointer;" href="A.logout.php">LOGOUT</a></div>
			</div>
		</div>
	</div>
</body>
</html>