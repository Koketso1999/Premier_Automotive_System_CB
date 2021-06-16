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
	<div class ="table-form-Leave">
		<table class="table">
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Token</th>
				<th align = "center">Name</th>
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
				<th align = "center">Total Days</th>
				<th align = "center">Reason</th>
				<th align = "center">Status</th>
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($resultLeave)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";

					echo "<tr>";
					echo "<th class='rows'>".$employee['id']."</th>";
					echo "<th class='rows'>".$employee['token']."</th>";
					echo "<th class='rows'>".$employee['firstName']." ".$employee['lastName']."</th>";
					
					echo "<th class='rows'>".$employee['start']."</th>";
					echo "<th class='rows'>".$employee['end']."</th>";
					echo "<th class='rows'>".$interval->days."</th>";
					echo "<th class='rows'>".$employee['reason']."</th>";
					echo "<th class='rows'>".$employee['status']."</th>";
					echo "<th class='rows'><a href=\"approve.php?id=$employee[id]&token=$employee[token]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | <a href=\"cancel.php?id=$employee[id]&token=$employee[token]\" onClick=\"return confirm('Are you sure you want to Canel the request?')\">Cancel</a></th>";

				}


			?>

		</table>
		
	</div>

</body>
</html>

