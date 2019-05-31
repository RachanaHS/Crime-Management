<html>
<head>

<?php 

session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="2";


$con=mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);

$query="DELETE FROM new_complaint where No=(SELECT No ORDER BY No LIMIT 1)";
$result=mysqli_query($con,$query);
if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='police.html'
		</SCRIPT>");
exit();
}
?>


