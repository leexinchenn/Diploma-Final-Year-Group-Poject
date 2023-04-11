<?php
	$connect = mysqli_connect("localhost","root","", "bleufonce");
	
	if(!$connect)
	{
		die('Could not Connect MySql Server:' .mysql_error());
	}
?>