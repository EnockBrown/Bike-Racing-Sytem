
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>MMU Bike System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		
	</head>
<body >
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >MMU Bike System</a>
			</div>
		</div>
	</nav>	
	<ul class="nav nav-tabs">
			<li class = "active"><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "bike.php">Bikes</a></li>		
            <li><a href = "message.php">Messages</a></li>
		
	</ul>
	
				<div class="jumbotron" style="background-color:#F0F8FF;"width="60%" height="100%">
				<?php
					require_once 'connect.php';
					$query = $conn->query("SELECT * FROM `message` ORDER BY `email` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
				

				
					<div class = "well" >

						<div >
							<h3><?php echo "Hello this is  ". $fetch['Name']?></h3>
							<p style = "color:black; "><?php echo $fetch['Message']?></p>
				
							<a href = "reply_message.php?user_id=<?php echo $fetch['id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reply</a>
						</div>
					</div>
				<?php
					}
				?>
               </div>


	
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		    Copyright © 2019 <a style="color:red;"href="index.php">MMU Bike System</a> 
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>