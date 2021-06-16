<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `alogin` WHERE email = '$email' AND password = '$password'";
$sqlId = "SELECT id FROM `alogin` WHERE email = '$email' AND password = '$password' "; 

//echo "$sql";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlId);

$adminId = "";
if(mysqli_num_rows($result) == 1){
	
    $admin = mysqli_fetch_array($id);
	$adminId = ($admin['id']);
	
	session_start();
	$_SESSION['userId'] = $adminId;
	//capture current time when user is loged in
	$_SESSION["login_time"] = time();

	//this is the correct location
	header("Location: ../side nav/main/admin/menu.php");
}

else{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </script>");
}
?>



