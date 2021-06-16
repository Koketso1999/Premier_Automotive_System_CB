<?php
    //connect database engineering shop
$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "dbfix";

$connection = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$connection){
	echo "Databese Connection Failed";
}

$dropList = mysqli_query($connection,"SELECT * From `oggetti` WHERE 'status' = 5; "); 

?>
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
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Assign Project</h2>
                    <form action="..//process/assignp.php" method="POST" enctype="multipart/form-data">


                        

                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Employee ID" name="eid" required="required">

                            <select name="" id="">
                                <?php 
                                while($data = mysqli_fetch_array($dropList))
                            {
                            //    echo ("  
                            //    <option value='opt'>$data['firstName'] </option>                    
                            //    ");
                            }	 ?>
                                
                               
                            </select>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Project Name" name="pname" required="required">
                        </div>
                        
                        <div class="row row-space">
                          
                                <div class="input-group">
                                   <h6>Due Date</h6>
                                    <input class="input--style-1" type="date" placeholder="date" name="duedate" required="required">
                                   
                              
                            </div>
                            
                        </div>
                        
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>



