<?php
//start session
session_start();

//if user is not loged in, deny access
 if(!isset($_SESSION['userId']))
 	{
		
 		echo "<script> alert('Please login to view this feature') </script>";
		
 		echo "<script>location.href='../../../elogin.php'</script>"; 	}
	
	 //logout user after it reaches a timeout
	 //modify code to reset timeout when user is active
	
	// else if(time()-$_SESSION["login_time_stamp"] >60)  
    // {
    //     session_unset();
    //     session_destroy();
	// 	echo "<script> alert('You have been loged out due to inactivity') </script>";
    //     echo "<script>location.href='elogin.html'</script>";
    // }
	
?>
<!-- code to check user activity and log out user -->


<script type= 'text/javascript'>
          function activityWatcher(){

            //The number of seconds that have passed
            //since the user was active.
            var secondsSinceLastActivity = 0;

            //Five minutes. 60 x 5 = 300 seconds.
            var maxInactivity = (60 * 1);

            //Setup the setInterval method to run
            //every second. 1000 milliseconds = 1 second.

        setInterval(function(){
            secondsSinceLastActivity++;
            console.log(secondsSinceLastActivity + ' seconds since the user was last active');
             //if the user has been inactive or idle for longer
            //then the seconds specified in maxInactivity
        if(secondsSinceLastActivity > maxInactivity){
             alert('You has been inactive for more than ' + maxInactivity + ' seconds');
             //Redirect them to your logout.php page.

             //clear session variable
            
             location.href = '../../../elogin.php';
            unset($_SESSION['userId']);
    }
    },1000);

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

//code for home page
	//initialise user id from session id
	$id = $_SESSION['userId'];
	
	//connect to database
	require_once ('..//process/dbh.php');
	// $sql1 = "SELECT * FROM `employee` where id = '$id'";
	//Using seasion variable
	 $sql1 = "SELECT * FROM `employee` where id = $id";
	 $result1 = mysqli_query($conn, $sql1);
	 $employeen = mysqli_fetch_array($result1);
	 $empName = ($employeen['firstName']);

	$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";

	$sql1 = "SELECT `pname`, `duedate` FROM `project` WHERE eid = $id and status = 'Due'";

	$sql2 = "Select * From employee, employeeleave Where employee.id = $id and employeeleave.id = $id order by employeeleave.token";

	$sql3 = "SELECT * FROM `salary` WHERE id = $id";
	//$sql3 = "SELECT * FROM `salary` WHERE id = $_SESSION['userId']";

//echo "$sql";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

//sesion 
	
	$_SESSION['userName'] = $empName;

?>

<?php

//code for my profile page
$sqlProfile = "SELECT * FROM `employee` WHERE 1";


//echo "$sql";
$resultProfile = mysqli_query($conn, $sqlProfile);

  
  $sqlProfile = "SELECT * from `employee` WHERE id=$id";
  $sql2Profile = "SELECT total from `salary` WHERE id = $id";
  $resultProfile = mysqli_query($conn, $sqlProfile);
  $result2Profile = mysqli_query($conn , $sql2Profile);
  $salaryProfile = mysqli_fetch_array($result2Profile);
  $empSProfile = ($salaryProfile['total']);
 
  if($resultProfile){
  while($res = mysqli_fetch_assoc($resultProfile)){
  $firstname = $res['firstName'];
  $lastname = $res['lastName'];
  $email = $res['email'];
  $contact = $res['contact'];
  $address = $res['address'];
  $gender = $res['gender'];
  $birthday = $res['birthday'];
  $nid = $res['nid'];
  $dept = $res['dept'];
  $degree = $res['degree'];
  $pic = $res['pic'];
}
}

?>



<?php 
//apply leave

	//initialise user id from session id
		
	  $sqlLeave = "SELECT * FROM `employee` where id = '$id'";
	  $resultLeave = mysqli_query($conn, $sqlLeave);
	  $employeeLeave = mysqli_fetch_array($resultLeave);
	  $empNameLeave = ($employeeLeave['firstName']);
	 // //echo "$id";
?>

<?php


//$sql = "SELECT * from `employeeleave`";
$sqlStatus = "Select employee.id, employee.firstName, employee.lastName, employeeleave.start, employeeleave.end, employeeleave.reason, employeeleave.status, employeeleave.token From employee, employeeleave Where employee.id = $id order by employeeleave.token";

//echo "$sql";
$resultStatus = mysqli_query($conn, $sqlStatus);

?>

<?php
//code to check number of available days
$sqlAvailableDays = "";

//code to calculate 

//$leaveDay = mysqli_fetch_array($resultLeave);
$sqlCheck =  "SELECT * FROM `leavedays` WHERE 1";

$resultCheck = mysqli_query($conn, $sqlCheck);
if($resultCheck){
    while($check = mysqli_fetch_assoc($resultCheck)){
    $availableDay = ($check['available']);
     
  }
  }
?>

<?php
    $sqlChechPro = "SELECT * from project where eid = $id order by subdate desc";
    $resultCheckPro = mysqli_query($conn,$sqlChechPro);
?>






