<!DOCTYPE html>
<html lang="en">
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
	<div class ="container-fluids" style=" margin-top: -950px; width:100%; ">


<center>
                <h2 class="card-title text-info">View Projects</h2>
                </center>
<br><br>
<table class="table">
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Submission Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($resultAssign)) {
					echo "<tr>";
					echo "<th class='rows'>".$employee['pid']."</th>";
					echo "<th class='rows'>".$employee['eid']."</th>";
					echo "<th class='rows'>".$employee['pname']."</th>";
					echo "<th class='rows'>".$employee['duedate']."</th>";
					echo "<th class='rows'>".$employee['subdate']."</th>";
					echo "<th class='rows'>".$employee['mark']."</th>";
					echo "<th class='rows'>".$employee['status']."</th>";
					echo "<th class='rows'><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a></th>"; 

				}


			?>

		</table>
			</div>
</body>
</html>
