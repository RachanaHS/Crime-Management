<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="2";


$con=mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);


/*if($result='Resolved')
{
	/*SELECT Test1.SurName, Test2.Class, Test2.Medium
	FROM Test1 
	INNER JOIN Test2 ON Test1.RegNo = Test2.RegNo*/
	$case_id=$_POST['case_id'];
	$_SESSION['case_id'] = $case_id;
	$query = "SELECT status FROM outcome where case_id='$case_id'";
	$result = mysqli_query($con,$query);
	$row=mysqli_fetch_array($result,MYSQLI_NUM);
//printf ("%s\n",$row[0]);
if($row[0]=='Ongoing')
{
	echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('Investigation Ongoing..Check again later')
		window.location.href='status.html'
		</SCRIPT>");
	exit();
}
if($row[0]=='Resolved')
{
	echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='status2.php'
		</SCRIPT>");
	exit();
}
?>	