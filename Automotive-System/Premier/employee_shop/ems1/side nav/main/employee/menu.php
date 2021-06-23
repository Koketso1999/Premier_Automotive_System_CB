<?php include 'ehomeHead.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Panel: Eployee Management System</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="..//css/header.css">
    <link rel="stylesheet" href="..//font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..//font-awesome-4.7.0/css/font-awesome.css">

    <?php include 'empHeader.php';?>
</head>
<body>
  <!-- <div class="menu"> -->
       <!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark ">
    
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="../process/<?php echo $pic;?>" width="50" height="50" class="rounded-circle z-depth-0" alt="">
        <span class="menu-collapsed"><?php echo  "$firstname $lastname";?></span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" onclick="displayHome()" href="#top">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               
                 <!-- logout user -->
                 <?php
			 //Php code to react to on click activity
        if(array_key_exists('logout', $_POST)) {
            logout();
        }
       
        function logout() {
			//clear session variable
            unset($_SESSION['userId']);

            $timeDiff = time() - $_SESSION["login_time"];
            echo "<script>alert ('you were loged in for $timeDiff seconds');</script>";
            echo "<script>location.href='../../../elogin.php'</script>"; 
			
        }
    ?>
		
		<form class="form-inline my-2 my-lg-0" method= "POST">
             <!-- <a class="nav-link" href="#top" name="logout";>Logout</a> -->
		<button class="nav-link" type="submit" name="logout">Logout</button> 
		  </form>
	  
            </li>
            <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
            <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="#top">Staff</a>
                    <a class="dropdown-item" href="#top">Profile</a>
                    <a class="dropdown-item" href="#top">Projects</a>
                    <a class="dropdown-item" href="#top">Leave</a>
                    <a class="dropdown-item" href="#top">Calander</a>
                    <a class="dropdown-item" href="#top">Messages</a>
                    <a class="dropdown-item" href="#top">Contact</a>
                </div>
            </li><!-- Smaller devices menu END -->
        </ul>
    </div>
</nav><!-- NavBar END -->
  </div>
   
<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->

            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">My Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displayAbout()">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displayPassChange()">
                    <span class="menu-collapsed">Password</span>
                </a>
            </div>

            <!---->
            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-bar-chart fa-fw mr-3"></span>
                    <span class="menu-collapsed">Projetcs</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displayProject()">
                    <span class="menu-collapsed">View Projects</span>
                </a>
            </div>
             <!---->

               <!---->
               <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center" >
                    <span class="fa fa-pencil-square-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Leave</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu4' class="collapse sidebar-submenu" >
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displayLeave()">
                    <span class="menu-collapsed">Apply Leave</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displayLeaveStatus()">
                    <span class="menu-collapsed">Check Leave Status</span>
                </a>
            </div>
             <!---->


            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
           
            <a href="#top" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
    <!-- MAIN -->
    <div class="conn">


        <div id="home"> <?php include 'eloginwel.php'; ?> </div>
        <div id="homePage">  </div>
        <div id="project"> <?php include 'empproject.php'; ?> </div>
        <div id="leave">  <?php include 'applyleave.php';?> </div>
        <div class="d-flex justify-content-end">
         <div id="leaveStatus" style="width: 80%; margin-top:80px;" ><?php include 'leavestatus.php';?></div>
        </div>
       
        
      
        <div id="about"><?php include 'myprofile.php'; ?></div>
        <div id="changePass"><?php include 'changepassemp.php'; ?></div>
        <div id="contact"> Contact Us information here</div>
        <div id="calander"><?php include 'calander.php' ;?></div>
        <div id="message"> Message information here<?php include 'list_pm.php';?></div>

 <script type="text/javascript">
         
           var home = document.getElementById("home");
           var main = document.getElementById("homePage");
           var project = document.getElementById("project");
           var leave = document.getElementById("leave");
           var leaveStatus = document.getElementById("leaveStatus");
           var about = document.getElementById("about");
           var contact = document.getElementById("contact");
           var calander = document.getElementById("calander");
           var message = document.getElementById("message");
           var changePass = document.getElementById("changePass");
           

           //hide elements         
           project.style.display = "none";
           leave.style.display = "none";
           leaveStatus.style.display = "none";
           about.style.display = "none";
           main.style.display = "none";

           contact.style.display = "none";
           calander.style.display = "none";
           message.style.display = "none";
           changePass.style.display = "none";

           function displayHome()
           {
             location.reload();
             
           }

       
           function displayProject()
           {
             project.style.display = "block";
             home.style.display = "none";
             leave.style.display = "none";
             leaveStatus.style.display = "none";
             about.style.display = "none";

             calander.style.display = "none";
             contact.style.display = "none";
             message.style.display = "none";
             changePass.style.display = "none";
             
           }

           function displayLeave()
           {
             leave.style.display = "block";
             home.style.display = "none";
             leaveStatus.style.display = "none";
             project.style.display = "none";
             about.style.display = "none";

             calander.style.display = "none";
             contact.style.display = "none";
             message.style.display = "none";
             changePass.style.display = "none";

           }

           function displayLeaveStatus()
           {
            leaveStatus.style.display = "block";
             home.style.display = "none";
            project.style.display = "none";
            leave.style.display = "none";
             about.style.display = "none";

             calander.style.display = "none";
             contact.style.display = "none";
             message.style.display = "none";
             changePass.style.display = "none";

           }

           function displayAbout()
           {
             about.style.display = "block";
             home.style.display = "none";
             project.style.display = "none";
            leave.style.display = "none";
            leaveStatus.style.display = "none";

            calander.style.display = "none";
             contact.style.display = "none";
             message.style.display = "none";
             changePass.style.display = "none";
           }

           function displayPassChange()
           {
             about.style.display = "none";
             home.style.display = "none";
             project.style.display = "none";
             leave.style.display = "none";
             leaveStatus.style.display = "none";

             calander.style.display = "none";
             contact.style.display = "none";
             message.style.display = "none";
             changePass.style.display = "block";
           }

           function displayCalender()
           {
            calander.style.display = "block";  
             about.style.display = "none";
             home.style.display = "none";
             project.style.display = "none";
             leave.style.display = "none";
             leaveStatus.style.display = "none";
            
             contact.style.display = "none";
             message.style.display = "none";
             changePass.style.display = "none";
           }

           function displayMessages()
           {
               alert("msg clicked");
             message.style.display = "block";
             contact.style.display = "none";
             calander.style.display = "none";
             changePass.style.display = "none";

             about.style.display = "none";
             home.style.display = "none";
             project.style.display = "none";
             leave.style.display = "none";
             leaveStatus.style.display = "none";
           }

           function displayContactInfo()
           {
             contact.style.display = "block";
             message.style.display = "block";
             calander.style.display = "block";
             changePass.style.display = "none";

             about.style.display = "block";
             home.style.display = "none";
             project.style.display = "none";
             leave.style.display = "none";
             leaveStatus.style.display = "none";
           }
    
           </script> 

       
       
           
</div>
    <!-- Main Col END -->
</div><!-- body-row END -->




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="..//js/header.js"></script>
</body>
</html>
<?php
// check if user is loged in
 if(!isset($_SESSION['userId']))
 {
    
     echo "<script>location.href='../../../elogin.php'</script>"; 
    }
?>