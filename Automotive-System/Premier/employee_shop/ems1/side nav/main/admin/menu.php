<?php include 'ahomeHead.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel: Employee Management System</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="..//font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..//font-awesome-4.7.0/css/font-awesome.css">

    <?php include 'adminHeader.php'; ?>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="..//images/admin.jpg" width="50" height="50" class="rounded-circle z-depth-0" alt="">
            <span class="menu-collapsed">Admin</span>
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
                    if (array_key_exists('logout', $_POST)) {
                        logout();
                    }

                    function logout()
                    {
                        //clear session variable
                        unset($_SESSION['userId']);
                        $timeDiff = time() - $_SESSION["login_time"];
                        echo "<script>alert ('Logged Out successful');</script>";
                    }
                    ?>

                    <form class="form-inline my-2 my-lg-0" method="POST">
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
    </nav>

    <div class="container">


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
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <i class="fa fa-users fa-fw mr-3" aria-hidden="true"></i>
                        <span class="menu-collapsed">Staff List</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu1' class="collapse sidebar-submenu">

                    <?php

                    while ($data = mysqli_fetch_array($records)) {
                        echo ("                      
                               <a href= '#' class= 'list-group-item list-group-item-action bg-dark text-white'>
                               <span class= 'menu-collapsed' > " . $data['firstName'] . " " . $data['lastName'] . "  </span>
                               </a>");
                    }
                    ?>

                </div>

                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed">Staff Management</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="addEmployeeInfo()">
                        <span class="menu-collapsed">Add Employee</span>
                    </a>


                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="viewEmployeeInformation()">
                        <span class="menu-collapsed">View Staff</span>
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
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="additionalProject()">
                        <span class="menu-collapsed">Add Project</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displayProject()">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        <span class="menu-collapsed"> View Projects </span>
                    </a>
                </div>
                <!---->

                <!---->
                <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-pencil-square-o fa-fw mr-3"></span>
                        <span class="menu-collapsed">Leave</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu4' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displayLeaveStatus()">
                        <span class="menu-collapsed">Check Leave</span>
                    </a>
                </div>
                <!---->


                <!---->
                <a href="#submenu5" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-pencil-square-o fa-fw mr-3"></span>
                        <span class="menu-collapsed">Employee Salary</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu5' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white" onclick="displaySal()">
                        <span class="menu-collapsed">View Salaries</span>
                    </a>
                </div>
                <!---->

                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>OPTIONS</small>
                </li>
                <!-- /END Separator -->
                <a href="#" class="bg-dark list-group-item list-group-item-action" onclick="displayCalender()">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-calendar fa-fw mr-3"></span>
                        <span class="menu-collapsed">Calendar</span>
                    </div>
                </a>

                <!-- Separator without title -->
                <li class="list-group-item sidebar-separator menu-collapsed"></li>
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

            <div id="home"> <?php include 'aloginwel.php'; ?> </div>
            <div id="addEmployee"><?php include 'addemp.php'; ?> </div>
            <div id="viewEmployee"><?php include 'viewemp.php'; ?> </div>
            <div id="addProject"><?php include 'assign.php'; ?> </div>
            <div id="viewProject"><?php include 'assignproject.php'; ?> </div>
            <div id="checkLeave"><?php include 'empleave.php'; ?></div>
            <div id="checkSal"><?php include 'salaryemp.php'; ?></div>
            <div id="calander"><?php include 'calander.php'; ?></div>


            <script type="text/javascript">
                var home = document.getElementById("home");
                var addEmployee = document.getElementById("addEmployee");
                var viewEmployee = document.getElementById("viewEmployee");
                var addProject = document.getElementById("addProject");
                var viewProject = document.getElementById("viewProject");
                var checkLeave = document.getElementById("checkLeave");
                var checkSal = document.getElementById("checkSal");
                var calander = document.getElementById("calander");
                var message = document.getElementById("message");


                //hide elements
                addEmployee.style.display = "none";
                viewEmployee.style.display = "none";
                addProject.style.display = "none";
                viewProject.style.display = "none";
                checkSal.style.display = "none";
                checkLeave.style.display = "none";
                calander.style.display = "none";
                message.style.display = "none";



                function displayHome() {
                    location.reload();

                }


                function addEmployeeInfo() {
                    addEmployee.style.display = "block";
                    home.style.display = "none";
                    viewEmployee.style.display = "none";
                    addProject.style.display = "none";
                    viewProject.style.display = "none";
                    checkSal.style.display = "none";

                    message.style.display = "none";
                    calander.style.display = "none";
                    checkLeave.style.display = "none";
                }

                function viewEmployeeInformation() {
                    viewEmployee.style.display = "block";
                    home.style.display = "none";
                    addProject.style.display = "none";
                    addEmployee.style.display = "none";
                    viewProject.style.display = "none";
                    checkSal.style.display = "none";

                    message.style.display = "none";
                    calander.style.display = "none";
                    checkLeave.style.display = "none";
                }

                function additionalProject() {
                    addProject.style.display = "block";
                    home.style.display = "none";
                    addEmployee.style.display = "none";
                    viewEmployee.style.display = "none";
                    viewProject.style.display = "none";
                    checkSal.style.display = "none";

                    message.style.display = "none";
                    calander.style.display = "none";
                    checkLeave.style.display = "none";
                }

                function displayProject() {
                    viewProject.style.display = "block";
                    home.style.display = "none";
                    addEmployee.style.display = "none";
                    viewEmployee.style.display = "none";
                    addProject.style.display = "none";
                    checkSal.style.display = "none";

                    message.style.display = "none";
                    calander.style.display = "none";
                    checkLeave.style.display = "none";
                }

                function displayLeaveStatus() {
                    checkLeave.style.display = "block";
                    viewProject.style.display = "none";
                    home.style.display = "none";
                    addEmployee.style.display = "none";
                    addProject.style.display = "none";
                    checkSal.style.display = "none";

                    message.style.display = "none";
                    calander.style.display = "none";
                    viewEmployee.style.display = "none";
                }

                function displaySal() {
                    checkSal.style.display = "block";
                    checkLeave.style.display = "none";
                    viewProject.style.display = "none";
                    home.style.display = "none";
                    addEmployee.style.display = "none";
                    addProject.style.display = "none";

                    message.style.display = "none";
                    calander.style.display = "none";
                    viewEmployee.style.display = "none";
                }


                function displayCalender() {
                    calander.style.display = "block";
                    checkSal.style.display = "none";
                    checkLeave.style.display = "none";
                    viewProject.style.display = "none";
                    home.style.display = "none";
                    addEmployee.style.display = "none";
                    addProject.style.display = "none";

                    message.style.display = "none";

                    viewEmployee.style.display = "none";
                }

                function displayMessages() {
                    alert("message click");
                    message.style.display = "block";
                    checkLeave.style.display = "none";
                    calander.style.display = "none";

                    viewProject.style.display = "none";
                    home.style.display = "none";
                    addEmployee.style.display = "none";
                    viewEmployee.style.display = "none";
                    addProject.style.display = "none";
                }

                function displayContactInfo() {

                    checkLeave.style.display = "block";
                    message.style.display = "block";
                    calander.style.display = "block";

                    aboviewProjectut.style.display = "block";
                    home.style.display = "none";
                    addEmployee.style.display = "none";
                    viewEmployee.style.display = "none";
                    addProject.style.display = "none";
                }
            </script>

        </div>
/
 <center>
<ul class="list-group list-group-horizontal" style="display: inline-flex;">
    <li class="list-group-item"><i class="fas fa-user-plus"></i> Add Employees</li>
    <li class="list-group-item"><i class="fas fa-info"></i> Manage Employee Details</li>
    <li class="list-group-item"><i class="fas fa-briefcase"></i> Assign Tasks to Employees</li>
    <li class="list-group-item"><i class="fas fa-calendar-check"></i> Monitor Tasks Activity</li>
    <li class="list-group-item"><i class="fas fa-calendar-plus"></i> Monitor Leave Application</li>
    <li class="list-group-item"> <i class="fas fa-wallet"></i> View Salaries</li>
    <li class="list-group-item"><i class="fas fa-calendar-alt"></i> Calender Events</li>

</ul>
</center>


</div>

     
        <!-- Main Col END -->
    </div><!-- body-row END -->




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/header.js"></script>
</body>

</html>

<?php
// check if user is loged in
if (!isset($_SESSION['userId'])) {

    echo "<script>location.href='../../../../index.php'</script>";
}
?>