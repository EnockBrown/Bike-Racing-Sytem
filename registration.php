<?php
	
	if($_POST['submit']){
		
		require("admin/connect.php");
		
		$username=$_POST['usernamesignup'];
		$username=mysqli_real_escape_string($conn,$username);
		$email=$_POST['emailsignup'];
		$email=mysqli_real_escape_string($conn,$email);
		$pass1=$_POST['passwordsignup'];
		$pass1=mysqli_real_escape_string($conn,$pass1);	
		$pass2=$_POST['passwordsignup_confirm'];
		$pass2=mysqli_real_escape_string($conn,$pass2);
		
		if($pass1 != $pass2){
			echo "Your passwords are different.
					Kindly try again.";
		}else{			
			//Encrypt password
			$pass1 = sha1($pass1);
			
			$state = "INSERT INTO users (username, email, password)
			VALUES ('$username', '$email', '$pass1')";
			
			$query= mysqli_query($conn,$state);
			
			if($query){
				echo "<br />Data Save Successfuly<br />";
				header("location: success.php");
				
			}else{
				echo mysql_error();
				echo "<br />Something went wrong, please try again.<br />";
				header("location: error.php");
			}
		}
	}else{
		die("Unauthorized Access!");
	}
?>