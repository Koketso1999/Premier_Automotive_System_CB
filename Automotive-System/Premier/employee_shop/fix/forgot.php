<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client; 
$con = mysqli_connect("localhost","root","","dbfix") or die("Unable to connect ");

if(isset($_POST['SUBMIT'])){
   $email= $_POST['email'];
   // echo '<script>alert("hello this is Thabang")</script>';
  $query= "SELECT admin_user FROM impostazioni WHERE admin_user = '$email'";
  $result= mysqli_query($con,$query);


  if(mysqli_num_rows($result) > 0){
    echo '<script>alert("THE USER EXIST and OTP code is being sent to the number")</script>';
    $otp = rand(1000,9999);
    $letter= "Hello from Admin, the following code is your OTP code to be used for password reset  :  " . $otp;
 
$sid    = "AC033cf7c0553c16d862f9feea8f35b94c"; 
$token  = "781a58d66d40002ab3991e58406755a5"; 
$twilio = new Client($sid, $token); 
 
             $message = $twilio->messages 
                  ->create("+26777683784", // to 
                           array(        
                               "body" => $letter,
                               "from" => "+14109833704" 
                           ) 
                  ); 

    $query2= "UPDATE impostazioni SET otp= '$otp' WHERE id = 1" ;
    $result= mysqli_query($con,$query2);

                }
  else{

    echo '<script>alert("THE USER DOES NOT EXIST")</script>';
   }   
    // echo '<script>alert("hello this is Thabang")</script>';
  


   
    //if(mysqli_num_rows($result) > 0){
    //}
}
if(isset($_POST['CHECK'])){
  $otp= $_POST['otp'];
  $DBotp="";

  $query1= "SELECT otp FROM impostazioni WHERE id = 1 ";
  $result1 = mysqli_query($con,$query1);

  while($row = mysqli_fetch_array($result1)){

      $DBotp = $row['otp'];

  }

  if($otp==$DBotp){

    ?>

    <script type="text/javascript">
    window.location="otp.php";
    </script>
<?php

  }else{
    echo '<script>alert("THE OTP CODE DOES NOT MATCH")</script>';

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
<center>
<h1>
  Forgot Password
</h1>
</center>
<div id="emailHelp" class="form-text">Enter the email and wait to receive the OTP</div>

<form action="" method="POST">

<div class="form-group">

<label for="email">Email: </label>
<input type="text" id="email" placeholder="Your Email" name="email" class="form-control">  
</div>
  <br>
<button class="btn btn-primary" type="submit" name="SUBMIT">Submit-EMAIL</button>



</form>

<br>
<div id="otpHelp" class="form-text">Use the OTP sent </div>

<form action="" method="POST">

<div class="form-group">

<label for="OTP">OTP </label>
<input type="text" id="OTP" placeholder="OTP Sent to You" name="otp" class="form-control">  

</div>

<br>
<button class="btn btn-primary" type="submit" name="CHECK">Submit-OTP</button>



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