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
	
$v_id=$_POST['v_id'];
$v_name=$_POST['v_name'];
$v_age=$_POST['v_age'];
$v_address=$_POST['v_address'];
$v_sex=$_POST['v_sex'];
$errors = array(); 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($a_id)) { array_push($errors, "accused id  is required"); }
  //if (empty($a_name)) { array_push($errors, "accused name  is required"); }
  //if (empty($a_sex)) { array_push($errors, " sex is required"); }
   //if (empty($a_address)) { array_push($errors, "address is required"); }
   
  
      
 $query="INSERT INTO victim (v_id,v_name,v_age,v_address,v_sex,Id) VALUES('$v_id','$v_name','$v_age','$v_address','$v_sex',(SELECT Id FROM crime ORDER BY Id DESC LIMIT 1))";

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
		window.location.href='accused.html'
		</SCRIPT>");
exit();
}    
mysqli_close($con);
?>
<html>
<head>
</head>
<body>
<a href="victim.html">Go back</p>
</body>
</html>
