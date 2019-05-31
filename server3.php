<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="2";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
	die("not connected".mysqli_connect_error());
}

error_reporting(0);
// REGISTER USER
//if (isset($_POST['update'])) {
	
$a_id=$_POST['a_id'];
$a_name=$_POST['a_name'];
$a_age=$_POST['a_age'];
$a_address=$_POST['a_address'];
$a_sex=$_POST['a_sex'];
$errors = array(); 

  /* form validation: ensure that the form is correctly filled ...
   by adding (array_push()) corresponding error unto $errors array
  if (empty($a_id)) { array_push($errors, "accused id  is required"); }
  if (empty($a_name)) { array_push($errors, "accused name  is required"); }
  if (empty($a_age)) { array_push($errors, "accused age  is required"); }
  if (empty($a_sex)) { array_push($errors, " sex is required"); }
  if (empty($a_address)) { array_push($errors, "address is required"); }*/
   
  
      
 $query="INSERT INTO accused (a_id,a_name,a_age,a_address,a_sex,Id) VALUES('$a_id','$a_name','$a_age','$a_address','$a_sex',(SELECT Id FROM crime ORDER BY Id DESC LIMIT 1))";

 mysqli_query($con,$query);
        //header('location: redirect.php');

  /*if($result){
         echo 'data updated';
       }
  else {
          echo 'data not updated';
       }*/
if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='new_complaint.php'
		</SCRIPT>");
exit();
}    
mysqli_close($con);
?>
<html>
<head>
</head>
<body>
<a href="accused.html">Go back</p>
</body>
</html>
