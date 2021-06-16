<body>

<h1 style="font-family: 'Montserrat', sans-serif; font-size: 25px;Text-Align: Center; Margin-Top:70px;">VIEW ASSIGNED PROJECTS HERE</h1>
	<div class="table-form">
		<table class="table">
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Sub Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<th class='rows'>".$employee['pid']."</th>";
					echo "<th class='rows'>".$employee['pname']."</th>";
					echo "<th class='rows'>".$employee['duedate']."</th>";
					echo "<th class='rows'>".$employee['subdate']."</th>";
					echo "<th class='rows'>".$employee['mark']."</th>";
					echo "<th class='rows'>".$employee['status']."</th>";
					
					 echo "<th class='rows'> <a href=\"psubmit.php?pid=$employee[pid]&id=$employee[eid]\">Submit</a>";

				}

			?>

		</table>
			</div>
			
		</body>
