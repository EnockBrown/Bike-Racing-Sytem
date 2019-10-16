<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>MMU Bike System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style1.css " />
		
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >MMU Bike System</a>
			</div>
		</div>
	</nav>	
	<ul class="nav nav-tabs">
                    <li><a href="index.html" class="current">Home</a></li>
                    <li><a href="reservation.php">GO Back</a></li>
		
	</ul>
	<div  class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong style="text-align:center;COLOR:#696969;"><h3><marquee style="background-color:#F0F8FF;"width="80%" vspace="0%" height="100%"behavior="alternate"><b>MAKE RESERVATION</b></marquee></h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `bike` WHERE `bike_id` = '$_REQUEST[bike_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:230px; width:330px;">
					<div >
						<img src = "photo/<?php echo $fetch['photo']?>" height = "150px" width = "250px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h5><?php echo $fetch['bike_type']?></h5>
						<h5 style = "color:#00ff00;"><?php echo "Ksh. ".$fetch['price'].".00";?></h5>
					</div>
				</div>
				
				<div class = "well-col-md-4" >
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicsson-save"></i> Submit</button>
						</div>
					</form>
				</div>
				
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
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