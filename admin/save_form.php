<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form'])){
		$bike_no = $_POST['bike_no'];
		$days = $_POST['days'];
		$extra_days = $_POST['extra_bed'];
		$query = $conn->query("SELECT * FROM `transaction` WHERE `bike_no` = '$bike_no' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('Bike not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `bike` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['price'] * $days;
			$total2 = 50 * $extra_bed;
			$total3 = $total + $total2;
			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `transaction` SET `bike_no` = '$bike_no', `days` = '$days', `extra_days` = '$extra_days', `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total3' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:checkin.php");
		}
	}
?>