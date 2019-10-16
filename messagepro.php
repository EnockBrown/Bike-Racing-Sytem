<?php
	
	if($_POST['submit']){
		
		require("admin/connect.php");
		
		$name=$_POST['name'];
		$name=mysqli_real_escape_string($conn,$name);
		$email=$_POST['email'];
		$email=mysqli_real_escape_string($conn,$email);
	    $message=$_POST['message'];
		$message=mysqli_real_escape_string($conn,$message);
			
		
			
			$state = "INSERT INTO message (Name, Email, Message)
			VALUES ('$name', '$email', '$message')";
			
			$query= mysqli_query($conn,$state);
			
			if($query){
				echo "<br />Data Save Successfuly<br />";
				header("location: success_message.php");
				
			}else{
				echo mysql_error();
				echo "<br />Something went wrong, please try again.<br />";
				header("location: error.php");
			}
		
	}
	else
	{
		die("Unauthorized Access!");
	}
?>