<?php

$servername="localhost";
$username="root";
$password="";
$dbname="2";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
	die("not connected".mysqli_connect_error());
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if(isset($_POST['submit']))
{
$a_name=$_POST['a_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
}
if(!$_POST['a_name'] | !$_POST['password'] | !$_POST['email'] | !$_POST['phone'])
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('YOU did not complete all of the required fields')
		window.location.href='a_login.html'
		</SCRIPT>");
}
$query="SELECT a_name,password,email,phone FROM a_user WHERE((a_name='$a_name')&&(password='$password')&&(email='$email')&&(phone='$phone'))";
$result=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($result);
if($rowcount)
{
	echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert(' Login Successful')
		window.location.href='admin.html'
		</SCRIPT>");
exit();
}
else
{
	echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert(' Login UnSuccessful')
		window.location.href='a_login.html'
		</SCRIPT>");
exit();		
}
?>










