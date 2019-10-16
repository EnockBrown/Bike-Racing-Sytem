<?php
	if(ISSET($_POST['add_bike'])){
		$bike_type = $_POST['bike_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `bike` (bike_type, price, photo) VALUES('$bike_type', '$price', '$photo_name')") or die(mysqli_error());
		header("location:bike.php");
	}
?>