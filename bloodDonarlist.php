
<!DOCTYPE html>
<html>
<head>
	<title>Request List</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/76235dc605.js" crossorigin="anonymous"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: cursive;
		}

		a{
			text-decoration: none;
		}
	
		.back{
			background: #05A966;
			text-align: center;
			padding: 15px;
			border-radius: 40px;
			margin-left: 550px;
			font-size: 15px;
			font-weight: bold;
			color: yellow;

		}
		.back:hover{
			background:white;
			color: #05A966;
			border:1px solid #E5EB2E;
		}
		.back i{
			margin-right: 5px;
		}
	</style>
</head>
<body>
	<div class="container mt-5 " id="head">
		<h2 class="text-danger">Blood Donar List</h2>
		<table class="table table-striped table-bordered table-hover mt-3 mb-3">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Blood_Group</th>
					<th>Last_Donate</th>
					
				</tr>
			</thead>
			
		
		
	

	<?php
	include('config.php');
	$sql='SELECT * from blooddonation';
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
			{
				echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["Blood_Group"]."</td><td>".$row["Last_Donate"]."</td>


				</tr>";

			}
			
			echo "</table>";
	}
	else{
		echo "Null Result";
	}

?>



	<a href="dashboard.php" class="back"><i class="fas fa-home"></i>Back to DashBoard</a>
	</table>
</div>
	   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>