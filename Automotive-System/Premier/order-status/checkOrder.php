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
    echo '<script>alert("THE STATUS CODE DOES NOT EXIST")</script>';
  }

}

?>

<!doctype html>
<html lang="en">
<head>
<title>HELLO WORLD</title>
</head>
<body>

<form method="POST">
<h1>CHECK YOUR ORDER OR REPARATION</h1>

</br>
<input type="text" name="code" placeholder="status code" required="">
</br>
</br>
</br>
<input type="submit" name=check value="CHECK">
</br>
</br>
</br>
</br>
</br>
</br>


<label>NAME:</label>
<input type="text"  placeholder="your name" value="<?php echo $name; ?>"> >
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
</form>

</body>
</html>