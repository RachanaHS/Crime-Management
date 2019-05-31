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
$v_name=$_POST['v_name'];
$v_age=$_POST['v_age'];
$v_address=$_POST['v_address'];
$v_sex=$_POST['v_sex'];
$crime_id = $_SESSION['crime_id'];
//$errors = array(); 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($a_id)) { array_push($errors, "accused id  is required"); }
  //if (empty($a_name)) { array_push($errors, "accused name  is required"); }
  //if (empty($a_sex)) { array_push($errors, " sex is required"); }
   //if (empty($a_address)) { array_push($errors, "address is required"); }
   
  
$query="UPDATE victim SET v_name='$v_name',v_age='$v_age',v_address='$v_address',v_sex='$v_sex' WHERE Id='$crime_id'";
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
		window.alert('Updated Succesfully')
		window.location.href='police.html'
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