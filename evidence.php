<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="2";

error_reporting(0);
$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
	die("not connected".mysqli_connect_error());
}


// REGISTER USER
//if (isset($_POST['update'])) {

//$p_id=mysqli_real_escape_string($con,$_POST['p_id']);	

//$errors = array(); 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($a_id)) { array_push($errors, "accused id  is required"); }
  //if (empty($a_name)) { array_push($errors, "accused name  is required"); }
  //if (empty($a_sex)) { array_push($errors, " sex is required"); }
   //if (empty($a_address)) { array_push($errors, "address is required"); }
$Id=$_POST['Id'];   
$e_place=$_POST['e_place'];
$e_description=$_POST['e_description'];
$query="INSERT INTO evidence(e_place,e_description,i_id) VALUES ('$e_place','$e_description','$Id')";
/*SET @last_id_in_petitioner = LAST_INSERT_ID(),
INSERT INTO fir (FIR_date,time,p_id) VALUES (NULL,NULL,@last_id_in_petitioner)";*/
mysqli_query($con,$query);

/*SELECT 
//SET @last_id_in_petitioner = LAST_INSERT_ID();
$query1="INSERT INTO fir (FIR_date,time,p_id) VALUES ('NULL','NULL',@last_id_in_petitioner)";
mysqli_query($con,$query1);*/
 
 //mysqli_query($con,$query);
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
		window.alert('evidence details filled')
		window.location.href='outcome.html'
		</SCRIPT>");
exit();
}
?>
<html>
<head>
</head>
<body>
</body>
</html>