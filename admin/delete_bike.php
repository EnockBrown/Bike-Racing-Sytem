<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `bike` WHERE `bike_id` = '$_REQUEST[bike_id]'") or die(mysql_error());
	
	header("location:bike.php");

?>