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
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($resultCheckPro)) {

					echo "<tr>";
					echo "<th class='rows'>".$employee['pid']."</th>";
					echo "<th class='rows'>".$employee['pname']."</th>";
					echo "<th class='rows'>".$employee['duedate']."</th>";
					echo "<th class='rows'>".$employee['subdate']."</th>";
					echo "<th class='rows'>".$employee['mark']."</th>";
					echo "<th class='rows'>".$employee['status']."</th>";
				}

			?>

		</table>
			</div>
			
		</body>
