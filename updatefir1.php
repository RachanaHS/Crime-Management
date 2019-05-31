<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="2";


$con=mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);

	$FIR_no=$_POST['FIR_no'];
	$FIR_date=$_POST['FIR_date'];
	$time=$_POST['time'];
	$query = "UPDATE fir SET FIR_date='$FIR_date',time='$time' WHERE FIR_no='$FIR_no'";
	mysqli_query($con,$query);
	echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('FIR Filed Succesfully..')
		window.location.href='deletenew.php'
		</SCRIPT>");
exit();
//printf ("%s\n",$row[0]);
?>	