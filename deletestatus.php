<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="2";


$con=mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
$crime_id = $_SESSION['crime_id'];
$query="DELETE FROM status WHERE num=(SELECT num  WHERE num ORDER BY num DESC LIMIT 1 )"; 
$result=mysqli_query($con,$query);
if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='homepage2.html'
		</SCRIPT>");
exit();
}
?>