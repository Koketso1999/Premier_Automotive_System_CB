<?php
$con = mysqli_connect("localhost","root","","dbfix") or die("Unable to connect ");
$name="";
$condition="";
$realCondition="";
$defective="";
$model="";
$price="";
$advance="";
$openedAt="";
$closedAt="";

if(isset($_POST['check'])){
  //  echo '<script>alert("BUTTON WORKS")</script>';
  $code = $_POST['code'];
  $query= "SELECT codice FROM oggetti WHERE codice = '$code'";
  $result= mysqli_query($con,$query);
  

  if(mysqli_num_rows($result) > 0){
    //echo '<script>alert("THE STATUS CODE EXIST")</script>';
    $query1= "SELECT * FROM oggetti WHERE codice = '$code'";
   $result1 = mysqli_query($con,$query1);
  
    while($row = mysqli_fetch_array($result1)){
  
        $name= $row['Nominativo'];
       $condition= $row['status'];
       $defective= $row['Guasto'];
       $model= $row['Modello'];
       $price= $row['Prezzo'];
       $advance= $row['Anticipo'];
        $openedAt= $row['dataApertura'];
       $closedAt= $row['dataChiusura'];

        if($condition=="0"){
            $realCondition="Delivered";
        }else if($condition=="1"){
            $realCondition="In progress";
        }else if($condition=="2"){
            $realCondition="To be delivered";
        }else if($condition=="3"){
            $realCondition="To be approved";
        }else if($condition=="5"){
            $realCondition="Cancelled";
        }


        
    }

  }else{
    //echo '<script>alert("THE STATUS CODE DOES NOT EXIST")</script>';
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/img-quo/FAV2.jpg" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Premier Automotive | Engineering </title>


    <script src="https://kit.fontawesome.com/46320e93ad.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <br><br>
    
<div class="container">


<h1 class="display-4">Order Status</h1>
    </div>

<div class="container">

        <form method="POST">

        <div class="container">

        <div class="input-group ">
            <input type="text" class="form-control" name="code" placeholder="Status Code" aria-label="Status Code" aria-describedby="button-addon2">
            <input class="btn btn-info" type="submit" id="button-addon2" name=check value="CHECK">
        </div>
        
        </div>



                <div hidden>

                      <label for="name" >NAME:</label>
                      <input type="text" id="name" placeholder="your name" value="<?php echo $name; ?>"> >
                      </br>
                      </br>
                      <label>CONDITION:</label>
                      <input type="text"  placeholder="reparation condition" value="<?php echo $realCondition; ?>"> >
                      </br>
                      </br>
                      <label>DEFECTIVE:</label>
                      <input type="text"  placeholder="defective part" value="<?php echo $defective; ?>"> >
                      </br>
                      </br>
                      <label>MODEL:</label>
                      <input type="text"  placeholder="model" value="<?php echo $model; ?>">>
                      </br>
                      </br>
                      <label>PRICE:</label>
                      <input type="text"  placeholder="price" value="<?php echo $price; ?>"> >
                      </br>
                      </br>
                      <label>ADVANCE:</label>
                      <input type="text"  placeholder="advance" value="<?php echo $advance; ?>"> >
                      </br>
                      </br>
                      <label>OPENED AT:</label>
                      <input type="text"  placeholder="opened" value="<?php echo $openedAt; ?>"> >
                      </br>
                      </br>
                      <label>CLOSED AT:</label>
                      <input type="text"  placeholder="closed" value="<?php echo $closedAt; ?>"> >

                </div>
        </form>


</div>



        <div class="container">


<br>
<br>



        <h1 class="badge bg-secondary fs-5"> <i class="fas fa-address-book"></i> Name</h1><span class="fs-5"><?php echo $name; ?></span>  <br>
        <h1 class="badge bg-secondary fs-5"> <i class="fas fa-tasks"></i> Condition</h1><span class="fs-5"><?php echo $realCondition; ?></span>  <br>
        <h1 class="badge bg-secondary fs-5"><i class="fas fa-truck"></i> Model</h1> <span class="fs-5"><?php echo $model; ?></span> <br>
        <h1 class="badge bg-secondary fs-5"><i class="fas fa-tools"></i>  Defective</h1> <span class="fs-5"><?php echo $defective; ?></span> <br>
        <h1 class="badge bg-secondary fs-5"><i class="fas fa-coins"></i> Price</h1> <span class="fs-5"> BWP <?php echo $price; ?></span> <br>
        <h1 class="badge bg-secondary fs-5"><i class="fas fa-coins"></i> Advance</h1> <span class="fs-5"> BWP <?php echo $advance; ?></span> <br>
        <h1 class="badge bg-secondary fs-5"><i class="fas fa-table"></i> Open Date</h1> <span class="fs-5"><?php echo $openedAt; ?></span> <br>
        <h1 class="badge bg-secondary fs-5"><i class="fas fa-table"></i> Close Date</h1> <span class="fs-5"><?php echo $closedAt; ?></span> <br>

        </form>



</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
