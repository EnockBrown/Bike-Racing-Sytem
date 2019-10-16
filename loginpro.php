<?php
	//Login Proccessing
	if(isset($_POST['login'])){
		//Connection
		require("admin/connect.php");
		
		//Pick Details from form
		$username=$_POST['username'];
		$password=$_POST['password'];
		//Sanitize the data
		$username=mysqli_real_escape_string($conn,$username);
		$password=mysqli_real_escape_string($conn,$password);
		$password=sha1($password);
		//Query Statement
		$query="SELECT * FROM users WHERE 
				email='$username'
				AND password='$password'";
		//Execute the Query
		$query=mysqli_query($conn,$query);
		//Check if any records have been found
		$count=mysqli_num_rows($query);
		if($count>0){
		
			//Print login success message
			echo "Login Successful. Welcome $fname.";
			
			//Redirect User to their home page
			header("location: Reservation.php");
		}else{
			echo "Username and/or password mismatch!
				  Please try again. $username $password";
		}
	}else{
		die("Unathorized Access!");
	}
?>