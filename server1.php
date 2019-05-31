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
$p_name=$_POST['p_name'];
$p_age=$_POST['p_age'];
$p_address=$_POST['p_address'];
$p_sex=$_POST['p_sex'];

//$errors = array(); 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($a_id)) { array_push($errors, "accused id  is required"); }
  //if (empty($a_name)) { array_push($errors, "accused name  is required"); }
  //if (empty($a_sex)) { array_push($errors, " sex is required"); }
   //if (empty($a_address)) { array_push($errors, "address is required"); }
   
  
$query="INSERT INTO petitioner (p_name,p_age,p_address,p_sex) VALUES ('$p_name','$p_age','$p_address','$p_sex')";
/*SET @last_id_in_petitioner = LAST_INSERT_ID(),
INSERT INTO fir (FIR_date,time,p_id) VALUES (NULL,NULL,@last_id_in_petitioner)";*/
mysqli_query($con,$query);

/*SELECT 
//SET @last_id_in_petitioner = LAST_INSERT_ID();
$query$p_id="INSERT INTO fir (FIR_date,time,p_id) VALUES ('NULL','NULL',@last_id_in_petitioner)";
mysqli_query($con,$query$p_id);*/
 
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
		window.location.href='petitioner.html'
		</SCRIPT>");
exit();
}
?>
<html>
<head>
</head>
<body>
<button type="submit" class="button" onclick="myFunction()"><b><a href="petitioner.html">Go back</a></b></button> 
</body>
</html>