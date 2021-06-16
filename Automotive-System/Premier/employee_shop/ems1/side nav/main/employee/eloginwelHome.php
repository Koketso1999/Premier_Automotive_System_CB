 <?php
	 // Php code to react to on click activity
        if(array_key_exists('logout', $_POST)) {
            logout();
        }
       
        function logout() {
			//clear session variable
            unset($_SESSION['userId']);
			echo "<script>location.href='elogin.html'</script>";
			
        }
    ?>

		
		 <div class="table-form">
			    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px;Text-Align: Center; Margin-Top:70px;">Empolyee Leaderboard </h2>
    	<table class="table">

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Points</th>				
			</tr>
			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<th class='rows'>".$seq."</th>";
					echo "<th class='rows'>".$employee['id']."</th>";
					
					echo "<th class='rows'>".$employee['firstName']." ".$employee['lastName']."</th>";
					
					echo "<th class='rows'>".$employee['points']."</th>";
					echo "<tr>";
					$seq+=1;
				}


			?>
					 
		
		</table class="table">
	<div class="table-divider"></div>
    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px;Text-Align: Center; Margin-Top:70px;">Due Projects</h2>
    	

    	<table class="table">

			<tr>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				
			</tr>

			

			<?php
				while ($employee1 = mysqli_fetch_assoc($result1)) {
					echo "<tr>";
					
					echo "<th class='rows'>".$employee1['pname']."</th>";
					
					echo "<th class='rows'>".$employee1['duedate']."</th>";

				}


			?>

		</table>
		<div class="table-divider"></div>

		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px;Text-Align: Center;Margin-Top:70px;">Salary Status</h2>
    	

    	<table class="table">

			<tr>
				
				<th align = "center">Base Salary</th>
				<th align = "center">Bonus</th>
				<th align = "center">Total Salary</th>
				
			</tr>

			

			<?php
				while ($employee = mysqli_fetch_assoc($result3)) {
					
					echo "<tr>";					
					echo "<th class='rows'>".$employee['base']."</th>";
					echo "<th class='rows'>".$employee['bonus']." %</th>";
					echo "<th class='rows'>".$employee['total']."</th>";
					
				}

			?>

		</table>

		<div class="table-divider"></div>

		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px;Text-Align: Center;Margin-Top:70px;">Leave Satus</h2>
    	

    	<table class="table">

			<tr>
				
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
				<th align = "center">Total Days</th>
				<th align = "center">Reason</th>
				<th align = "center">Status</th>
			</tr>			

			<?php
				while ($employee = mysqli_fetch_assoc($result2)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					
					
					echo "<th class='rows'>".$employee['start']."</th>";
					echo "<th class='rows'>".$employee['end']."</th>";
					echo "<th class='rows'>".$interval->days."</th>";
					echo "<th class='rows'>".$employee['reason']."</th>";
					echo "<th class='rows'>".$employee['status']."</th>";
					
				}

			?>

		</table>

		<div class="table-divider"></div>

   
<br>
<br>
<br>
<br>
<br>
			</div>

