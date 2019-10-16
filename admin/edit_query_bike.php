<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_room'])){
		$bike_type = $_POST['bike_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `bike` SET `bike_type` = '$bike_type', `price` = '$price', `photo` = '$photo_name' WHERE `bike_id` = '$_REQUEST[bike_id]'") or die(mysqli_error());
		header("location:bike.php");
	}
?>