
<!DOCTYPE html>
<html>
<head>
	<title>Request List</title>
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

		.section1{
			text-align: center;
			color: #C0E38E;
			background-color: #05A966;
			padding:5px;
		}

		.table1{
			border:2px double #E5EB2E;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			border-collapse: collapse;
			margin-bottom: 50px;
			text-align: center;
		}

		td,th{
			border:1px solid tomato;
			text-align: justify;
			padding: 10px;
		}
		tr:nth-child(odd){
			background-color: #ececec;
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

	<div class="section1">
		<h1>Money Donar List</h1>
	</div>
	
	<table class="table1">
		<tr>
			
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Account_No</th>
			<th>Amount</th>
			<th>Payment_Method)</th>

		</tr>

	<?php
	include('config.php');
	$sql='SELECT * from moneydonation';
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
			{
				echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td><td>".$row["Account_No"]."</td><td>".$row["Amount"]."</td><td>".$row["Payment_Method"]."</td></tr>";
			}
			
			echo "</table>";
	}
	else{
		echo "Null Result";
	}

?>

	</table>

	<a href="dashboard.php" class="back"><i class="fas fa-home"></i>Back to DashBoard</a>
</body>
</html>