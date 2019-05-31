<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="2";


$con=mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
$crime_id = $_SESSION['crime_id'];
$query="DELETE FROM petitioner WHERE p_id='$crime_id'"; 
$result=mysqli_query($con,$query);
if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('Deleted Successfully')
		window.location.href='record2.php'
		</SCRIPT>");
exit();
}
?>