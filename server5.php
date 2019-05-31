<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="crime";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
	die("connection failed:".mysqli_connect_error());
}



$v_id=$_POST['v_id'];
//$v_name=$_POST['v_name'];
//$v_age=$_POST['v_age'];
//$v_address=$_POST['v_address'];
//$v_sex=$_POST['v_sex'];
$errors = array(); 

  
$query="DELETE FROM victim where v_id='$v_id'";

$result=mysqli_query($con,$query);
?>
<html>
<head>
</head>
<body>
<a href="police.html">Deleted Succesfully</p>
</body>
</html>
