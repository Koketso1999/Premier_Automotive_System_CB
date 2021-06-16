<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {
			'packages': ['corechart']
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

			var data = google.visualization.arrayToDataTable([
				['Task', 'Hours per Day'],
				['Submited', 11],
				['Pending', 2],
				['Commute', 2],
				['Watch TV', 2],
				['Sleep', 7]
			]);

			var options = {
				title: 'Projects Status'
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart'));

			chart.draw(data, options);
		}
	</script>
	<script type="text/javascript">
		google.charts.load("current", {
			packages: ["corechart"]
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Task', 'Hours per Day'],
				['Work', 11],
				['Eat', 2],
				['Commute', 2],
				['Watch TV', 2],
				['Sleep', 7]
			]);

			var options = {
				title: 'Employee Leave Status',
				pieHole: 0.4,
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
		}
	</script>
</head>


<body>

	<center>
		<div class="container-fluid">
			<h1 class="text-info ">
				Premier Automotive Employee Management System
			</h1>
		</div>
	</center>

	<div id="" style="width: 700px; ">

<center><h3 class="lead">Staff List</h4></center>
	<table class="table">

		<tr>
			<th scope="col">Order </th>
			<th scope="col">Employee ID</th>
			<th scope="col">Employee Name</th>
			<th scope="col">Awarded Points</th>

		</tr>

		<?php
		$seq = 1;
		while ($employee = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<th class='rows'>" . $seq . "</th>";
			echo "<th class='rows'>" . $employee['id'] . "</th>";

			echo "<th class='rows'>" . $employee['firstName'] . " " . $employee['lastName'] . "</th>";

			echo "<th class='rows'>" . $employee['points'] . "</th>";

			$seq += 1;
		}


		?>

	</table>
</div>

	<div id="piechart" style="width: 700px; height: 350px;"></div>

	<div id="donutchart" style="width: 700px; height: 300px;"></div>

	</div>
</body>

</html>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>