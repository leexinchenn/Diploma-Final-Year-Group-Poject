<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["checklogin"]);
unset($_SESSION["name"]);
header("Location:http://localhost/fyp/index.php");
?>