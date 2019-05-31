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

$query="INSERT INTO new_complaint(p_idn,p_name,p_age,p_address,p_sex,v_idn,v_name,	v_age,v_address,v_sex,a_idn,a_name,a_age,a_address,a_sex,Idn,date,case_type,time,	place,FIR_non) VALUES((SELECT p_id FROM petitioner ORDER BY p_id DESC LIMIT 1),(SELECT p_name FROM petitioner ORDER BY p_id DESC LIMIT 1),(SELECT p_age FROM petitioner ORDER BY p_id DESC LIMIT 1),(SELECT p_address FROM petitioner ORDER BY p_id DESC LIMIT 1),(SELECT p_sex FROM petitioner ORDER BY p_id DESC LIMIT 1),(SELECT v_id FROM victim ORDER BY v_id DESC LIMIT 1),(SELECT v_name FROM victim ORDER BY v_id DESC LIMIT 1),(SELECT v_age FROM victim ORDER BY v_id DESC LIMIT 1),(SELECT v_address FROM victim ORDER BY v_id DESC LIMIT 1),(SELECT v_sex FROM victim ORDER BY v_id DESC LIMIT 1),(SELECT a_id FROM accused ORDER BY a_id DESC LIMIT 1),(SELECT a_name FROM accused ORDER BY a_id DESC LIMIT 1),(SELECT a_age FROM accused ORDER BY a_id DESC LIMIT 1),(SELECT a_address FROM accused ORDER BY a_id DESC LIMIT 1),(SELECT a_sex FROM accused ORDER BY a_id DESC LIMIT 1),(SELECT Id FROM crime ORDER BY Id DESC LIMIT 1),(SELECT date FROM crime ORDER BY Id DESC LIMIT 1),(SELECT case_type FROM crime ORDER BY Id DESC LIMIT 1),(SELECT time FROM crime ORDER BY Id DESC LIMIT 1),(SELECT place FROM crime ORDER BY Id DESC LIMIT 1),(SELECT FIR_no FROM crime ORDER BY Id DESC LIMIT 1))";
$result=mysqli_query($con,$query);
if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('Complaint Filed Succesfully..')
		window.location.href='homepage2.html'
		</SCRIPT>");
exit();
}
?>


