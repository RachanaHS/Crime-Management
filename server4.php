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



$a_id=$_POST['a_id'];
$a_name=$_POST['a_name'];
$a_age=$_POST['a_age'];
$a_address=$_POST['a_address'];
$a_sex=$_POST['a_sex'];
$errors = array(); 

  
$query="UPDATE accused SET a_name='$a_name',a_age='$a_age',a_address='$a_address',a_sex='$a_sex' where a_id='$a_id'";

$result=mysqli_query($con,$query);
?>
<html>
<head>
</head>
<body>
<a href="police.html">Updated Succesfully</p>
</body>
</html>
