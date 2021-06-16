<html>
<head>
<style>
	/* body{
		background-image:url("..//images/back.jpg");
		background-repeat: no-repeat;
		background-size: 100%;
	} */


</style>
</head>
<body>


	<div id="divimg">
		
	</div>
	
	<table class="table">
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				
				
				<th align = "center">Base Salary</th>
				<th align = "center">Bonus</th>
				<th align = "center">TotalSalary</th>
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($resultSal)) {
					echo "<tr>";
					echo "<th class = 'rows'>".$employee['id']."</th>";
					echo "<th class = 'rows'>".$employee['firstName']." ".$employee['lastName']."</th>";
					
					echo "<th class = 'rows'>".$employee['base']."</th>";
					echo "<th class = 'rows'>".$employee['bonus']." %</th>";
					echo "<th class = 'rows'>".$employee['total']."</th>";					

				}


			?>
			
			</table>
</body>
</html>