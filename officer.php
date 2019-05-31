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

//$p_id=mysqli_real_escape_string($con,$_POST['p_id']);	

//$errors = array(); 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($a_id)) { array_push($errors, "accused id  is required"); }
  //if (empty($a_name)) { array_push($errors, "accused name  is required"); }
  //if (empty($a_sex)) { array_push($errors, " sex is required"); }
   //if (empty($a_address)) { array_push($errors, "address is required"); }
$Id=$_POST['Id']; 
$o_name=$_POST['o_name'];
$o_age=$_POST['o_age'];
$o_sex=$_POST['o_sex'];
$query="INSERT INTO officer1(o_name,o_age,o_sex,i_id) VALUES ('$o_name','$o_age','$o_sex','$Id')";
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
		window.alert('officer details filled')
		window.location.href='charge_sheet.html'
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