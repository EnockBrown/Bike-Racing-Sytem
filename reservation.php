<!DOCTYPE html>

<html lang = "en">
	<head>
		<title>MMU Bike System:Admin</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >MMU Bike and Racing System</a>
			</div>

		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
		<li><a href="index.html" class="current">Home</a></li>  
		<li><a href="reservation.php">Go Back</a></li>	
				<div style="text-align:right; width:100%; padding:0;">
                    <form class="form-inline" method="post" action="viewbikes_pdf.php">
						<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
						View All Bikes</button>
                    </form>
                 </div>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Available Bikes Within Us</div>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Bike Type</th>
							<th>Price</th>
							<th>Photo</th>
							<th>Reserve</th>
						</tr>
					</thead>
					<tbody>
					
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `bike` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>	
						<tr>
							<td><?php echo $fetch['bike_type']?>
							<td><a style = "color:#00ff00;"><?php echo "Price: Ksh. ".$fetch['price'].".00"?></a></td>
							<td><center><img src = "photo/<?php echo $fetch['photo']?>" height = "100" width = "150"/></center></td>
							<td>
							<a  href = "add_reserve.php?bike_id=<?php echo $fetch['bike_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
<div style="text-align:center;">
    Copyright © 2018 <a style="color:red;"href="index.php">MMU Bike System</a>  
</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.dataTables.js"></script>
<script src = "js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>