<?php
$servername="localhost";
$username="root";
$password="";
$dbname="2";

error_reporting(0);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
	die("not connected".mysqli_connect_error());
}

$num=mysqli_real_escape_string($con,$_POST['num']);
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$address=mysqli_real_escape_string($con,$_POST['address']);
if(!$_POST['username'] | !$_POST['password'] | !$_POST['email'] | !$_POST['phone'] | !$_POST['address'])
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('YOU did not complete all of the required fields')
		window.location.href='registration.html'
		</SCRIPT>");
exit();
}

$query="INSERT INTO users (num,username,password,email,phone,address) VALUES('$num','$username','$password','$email','$phone','$address')";
$sql=mysqli_query($con,$query);
$rows=mysqli_num_rows($sql);
if($rows>0)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('Registration UnSuccessful')
		window.location.href='registration.html'
		</SCRIPT>");
exit();
}
else
{
	echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('Registration Succesful')
		window.location.href='login.html'
		</SCRIPT>");
exit();
}

?>