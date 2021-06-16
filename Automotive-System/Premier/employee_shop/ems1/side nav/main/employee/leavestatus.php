<body>
    <h1 style="font-family: 'Montserrat', sans-serif; font-size: 25px;Text-Align: Center;">LEAVE HISTORY</h1>
	<table class="table">
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
				<th align = "center">Total Days</th>
				<th align = "center">Reason</th>
				<th align = "center">Status</th>
			</tr>


			<?php
					 include '../process/dbh.php';
					 $resultLeave = mysqli_query($conn, $sqlLeave);
					 $employeeLeave = mysqli_fetch_array($resultLeave);
					 $empNameLeave = ($employeeLeave['firstName']);

				$sqlStatus = "Select employee.id, employee.firstName, employee.lastName, employeeleave.start, employeeleave.end, employeeleave.reason, employeeleave.status From employee, employeeleave Where employee.id = $id and employeeleave.id = $id order by employeeleave.token";
				$resultStatus = mysqli_query($conn, $sqlStatus);
				while ($employeeLeave = mysqli_fetch_assoc($resultStatus)) {
					$date1 = new DateTime($employeeLeave['start']);
					$date2 = new DateTime($employeeLeave['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					echo "<th class='rows'>".$employeeLeave['id']."</th>";
					echo "<th class='rows'>".$employeeLeave['firstName']." ".$employeeLeave['lastName']."</th>";
					
					echo "<th class='rows'>".$employeeLeave['start']."</th>";
					echo "<th class='rows'>".$employeeLeave['end']."</th>";
					echo "<th class='rows'>".$interval->days."</th>";
					echo "<th class='rows'>".$employeeLeave['reason']."</th>";
					echo "<th class='rows'>".$employeeLeave['status']."</th>";
					
				}


			?>


		</table>
</body>
