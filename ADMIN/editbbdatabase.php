<?php
	$conn = mysqli_connect("localhost","root","", "bleufonce");
	
	if(!$conn)
	{
		die('Could not Connect MySql Server:' .mysql_error());
	}
	
	$designpic = $_POST['designpic'];
	$designpic2 = $_POST['designpic2'];
	$newitempic = $_POST['newitempic'];
	$newitempic2 = $_POST['newitempic2'];
	$itemname = $_POST['ItemName'];
	$item2name = $_POST['Item2Name'];
	$explain1 = $_POST['explain1'];
	$explain2 = $_POST['explain2'];
	$explain3 = $_POST['explain3'];
	$explain4 = $_POST['explain4'];
	$offerpic = $_POST['offerpic'];
	$promotext1 = $_POST['promotext1'];
	$promotext2 = $_POST['promotext2'];
	
	
	$sql = mysqli_query($conn,"UPDATE bulletinboard SET ItemName='$itemname',Item2Name='$item2name', DesignPic='$designpic', DesignPic2='$designpic2', NewItemPic='newitempic', NewItemPic2='newitempic2',
	explain1='$explain1',explain2='$explain2',explain3='$explain3',explain4='$explain4',OfferPic='$offerpic',PromoText1='$promotext1',PromoText2='$promotext2' 
						 WHERE id=1" );

	
	if($sql)
	{
		echo "<script>
		alert('Update Successful! Please Login to continue shopping.');
		window.location.href='http://localhost/fyp/admin/editbb.php';
		</script>";
	}
	else{
		echo "<script>
		alert('Failed to update. Please try again.');
		window.location.href='http://localhost/fyp/admin/editbb.php';
		</script>";
	}
?>