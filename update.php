
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fullscreen Responsive Register Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
	
	<style>
		.button{
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			}
		.button3 {background-color: #f44336;font-size: 14px;padding: 10px 24px;border-radius: 8px;} /* Red */ 
	</style>
    <body>

	<div class="header">
		<div class="container">
			<div class="row">
				<div class="logo span4">
					<h1><a href="">Parents Enquiry Form <span class="red">.</span></a></h1>
				</div>
				<div class="links span8">
					<a class="home" href="index.php" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
					<a class="blog" href="update.php" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="register-container container" style="" >
		<div class="row" >
			<div class="register" style="background-color:white;" >
				  <?php
						require 'connection.php';
						$conn    = Connect();
						$sql = "SELECT * FROM student where name !='' ORDER BY id DESC ";
						$query = mysqli_query($conn, $sql);
					?>
							
		<table class="table table-hover table-responsive" style="border-radius: 8px;">
			<thead style="background-color:#ff4d4d; ">
				<tr>
					<th >Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Comments</th>
					<th>Edit</th>
				</tr>
			</thead>
			
			<?php 
			while($res = mysqli_fetch_array($query)) 
			{
				echo "<tr>";
				echo "<td>" . $res['name'] . "</td>";
				echo "<td>" . $res['email'] . "</td>";
				echo "<td>" . $res['address'] . "</td>";
				echo "<td>" . $res['city'] . "</td>";
				echo "<td>" . $res['state'] . "</td>";
				echo "<td>" . $res['feedback'] . "</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
				echo "</tr>";
			}; 
			?> 
		</table>
		</div>
	</div>
	</div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

