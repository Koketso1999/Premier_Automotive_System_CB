<?php
$con = mysqli_connect("localhost","root","","ems") or die("Unable to connect ");

if(isset($_POST['SAVE'])){
    $password=$_POST['password'];
    $confirmPassword= $_POST['password2'];

    

   if($password==$confirmPassword){

    $query2= "UPDATE alogin SET password= '$password' WHERE id = 1" ;
    $result= mysqli_query($con,$query2);
    echo '<script>alert("PASSWORD CHANGED SUCCESSFULLY")</script>';

    ?>

    <script type="text/javascript">
    window.location="index.php";
    </script>
<?php
  
   }else{

    echo '<script>alert("THE PASSWORDS DO NOT MATCH")</script>';
   
   }


}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Forgot Password</title>
</head>

<body>


    <div class="container">

        <h2>
            Enter New Password
        </h2>

        <!-- <div id="emailHelp" class="form-text">Enter your email to receive the OTP</div> -->

        <br>
        
        <form action="" method="POST">

            <div class="form-group">

                <label for="pwd">New Password </label>
                <input type="password" id="pwd" placeholder="New Password" name="password" class="form-control">
            </div>
<br>

             <div class="form-group">

             <label for="pwd">Confirm New Password </label>
                <input type="password" id="pwd" placeholder="Confirm New Password" name="password2" class="form-control">
            </div>
            <br>




            <button class="btn btn-primary" type="submit" name="SAVE">Submit</button>



        </form>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>