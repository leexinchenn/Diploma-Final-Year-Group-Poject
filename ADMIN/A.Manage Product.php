<html>
<head>
<title>Bleu Foncé</title>
	<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<style>
.tooltip {
position: relative;
display: inline-block;
margin-top:-20px;
margin-left:auto;
margin-right:auto;
}

.tooltip .tooltiptext::after {
content: "";
position: absolute;
bottom: 100%;
left: 50%;
top:-20;
margin-left: -5px;
border-width: 5px;
border-style: solid;
border-color: transparent transparent black transparent;
}

.tooltip:hover .tooltiptext{
visibility:visible;
}

.tooltip .tooltiptext{
visibility:hidden;
width:120px;
background-color:black;
color:#fff;
text-align:center;
border-radius:6px;
padding:5px 0;
position:absolute;
z-index:1;
top:100%;
left:75%;
margin-left:-60px;
}
</style>
</head>

<body>
	<?php include("A.header.php");?>
	<div class="tooltip">
		<a href="A.Info Bingsu.php"><img src="bingsu/original.jpg" style="width:200px;height:200px;margin-left:200px;margin-top:100px;margin-bottom:20px;"/></a>
			<span class="tooltiptext">BINGSU</span>
	</div>
	
	<div class="tooltip">
		<a href="A.Info Cake.php"><img src="cake/mago melaleuca cake.jpg" style="width:200px;height:200px;margin-left:200px;margin-top:100px;margin-bottom:20px;"/></a>
			<span class="tooltiptext" >CAKE</span>
	</div>
	
	<div class="tooltip">
		<a href="A.Info Coffee.php"><img src="coffee/cappuccino.jpg" style="width:200px;height:200px;margin-left:200px;margin-top:100px;margin-bottom:20px;"/></a>
			<span class="tooltiptext" >COFFEE</span>
	</div>
	
	<div class="tooltip">
		<a href="A.Info Juice.php"><img src="juice/watermelon.jpg" style="width:200px;height:200px;margin-left:200px;margin-top:100px;margin-bottom:20px;"/></a>
			<span class="tooltiptext" >JUICE</span>
	</div>
	
	<div class="tooltip">
		<a href="A.Info Lightmeal.php"><img src="lightmeal/french-fries.jpg" style="width:200px;height:200px;margin-left:200px;margin-top:100px;margin-bottom:20px;"/></a>
			<span class="tooltiptext" >LIGHTMEAL</span>
	</div>
	
</body>
</html>