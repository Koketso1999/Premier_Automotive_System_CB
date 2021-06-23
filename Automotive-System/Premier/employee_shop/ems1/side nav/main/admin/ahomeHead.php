<?php
//start session
session_start();

//if user is not loged in, deny access
if(!isset($_SESSION['userId']))
	{
		echo "<script> alert('Please login to view this feature') </script>";
		
		echo "<script>location.href='../../../../alogin.php'</script>";
	}
?>

<!-- code to check user activity and log out user -->
<script type="text/javascript">
        function activityWatcher(){

//The number of seconds that have passed
//since the user was active.
var secondsSinceLastActivity = 0;

//Five minutes. 60 x 5 = 300 seconds.
var maxInactivity = (60 * 100);

//Setup the setInterval method to run
//every second. 1000 milliseconds = 1 second.
setInterval(function(){
    secondsSinceLastActivity++;
    console.log(secondsSinceLastActivity + ' seconds since the user was last active');
    //if the user has been inactive or idle for longer
    //then the seconds specified in maxInactivity
    if(secondsSinceLastActivity > maxInactivity){
        console.log('User has been inactive for more than ' + maxInactivity + ' seconds');
        //Redirect them to your logout.php page.
		<?php
		//clear session variable
		//unset($_SESSION['userId']);
		?>
		alert("loged out");
        location.href = '../../../alogin.php';
    }
}, 1000);

//The function that will be called whenever a user is active
function activity(){
    //reset the secondsSinceLastActivity variable
    //back to 0
    secondsSinceLastActivity = 0;
	}

	//An array of DOM events that should be interpreted as
	//user activity.
	var activityEvents = [
    'mousedown', 'mousemove', 'keydown',
    'scroll', 'touchstart'
	];

	//add these events to the document.
	//register the activity function as the listener parameter.
	activityEvents.forEach(function(eventName) {
    document.addEventListener(eventName, activity, true);
	});


	}

	activityWatcher();
</script>
		


<?php 
require_once ('..//process/dbh.php');

$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>

<?php
//view employee
require_once ('..//process/dbh.php');
$sqlV = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$resultV = mysqli_query($conn, $sqlV);

?>

<?php
//assign project 
require_once ('..//process/dbh.php');
$sqlAssign = "SELECT * from `project` order by subdate desc";

//echo "$sql";
$resultAssign = mysqli_query($conn, $sqlAssign);

?>

<?php

require_once ('..//process/dbh.php');

//$sql = "SELECT * from `employeeleave`";
$sqlLeave = "Select employee.id, employee.firstName, employee.lastName, employeeleave.start, employeeleave.end, employeeleave.reason, employeeleave.status, employeeleave.token From employee, employeeleave Where employee.id = employeeleave.id order by employeeleave.token";

//echo "$sql";
$resultLeave = mysqli_query($conn, $sqlLeave);

?>

<?php
//drop down menu for employee list
require_once ('..//process/dbh.php');
$records = mysqli_query($conn,"SELECT firstName, lastName From `employee` ");  // Use select query here 


?>

<?php

$sqlSal = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$resultSal = mysqli_query($conn, $sqlSal);

?>

<?php


	  $result1 = mysqli_query($conn,"SELECT count(*) as total FROM project where status = 'Submitted'");
	  $SUBMITTED = mysqli_fetch_assoc($result1);

	  $result2 = mysqli_query($conn,"SELECT count(*) as total FROM project where status = 'Due'");
	  $DUE = mysqli_fetch_assoc($result2);

	  $resultLeave1 = mysqli_query($conn,"SELECT count(*) as total FROM employeeleave where status = 'Approved'");
	  $APPROVED = mysqli_fetch_assoc($resultLeave1);

	  $resultLeave2 = mysqli_query($conn,"SELECT count(*) as total FROM employeeleave where status = 'Pending'");
	  $PENDING = mysqli_fetch_assoc($resultLeave2);




?>


