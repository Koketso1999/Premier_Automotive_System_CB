
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
	<div class="table-form-Employee">
		<table class="table">
			<tr bgcolor="#000">

				<th align = "center">Emp. ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">NID</th>
				<th align = "center">Address</th>
				<th align = "center">Department</th>
				<th align = "center">Degree</th>
				<th align = "center">Point</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($resultV)) {
					echo "<tr>";
					echo "<th class='rows'>".$employee['id']."</th>";
					echo "<th class='rows'><img src='..//process/".$employee['pic']."' height = 60px width = 60px></th>";
					echo "<th class='rows'>".$employee['firstName']." ".$employee['lastName']."</th>";
					
					echo "<th class='rows'>".$employee['email']."</th>";
					echo "<th class='rows'>".$employee['birthday']."</th>";
					echo "<th class='rows'>".$employee['gender']."</th>";
					echo "<th class='rows'>".$employee['contact']."</th>";
					echo "<th class='rows'>".$employee['nid']."</th>";
					echo "<th class='rows'>".$employee['address']."</th>";
					echo "<th class='rows'>".$employee['dept']."</th>";
					echo "<th class='rows'>".$employee['degree']."</th>";
					echo "<th class='rows'>".$employee['points']."</th>";

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
			</div>

</body>
</html>

