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


// REGISTER USER
//if (isset($_POST['update'])) {

//$FIR_no=mysqli_real_escape_string($con,$_POST['FIR_no']);	
$FIR_date=NULL;
$time=NULL;
//$errors = array(); 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($a_id)) { array_push($errors, "accused id  is required"); }
  //if (empty($a_name)) { array_push($errors, "accused name  is required"); }
  //if (empty($a_sex)) { array_push($errors, " sex is required"); }
   //if (empty($a_address)) { array_push($errors, "address is required"); }
   
$query="INSERT INTO fir (FIR_date,time,p_id) VALUES (NULL,NULL,(SELECT p_id FROM petitioner ORDER BY p_id DESC LIMIT 1))";
mysqli_query($con,$query);
if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='investigation1.php'
		</SCRIPT>");
exit();
}     
 /*$query="INSERT INTO fir (FIR_date,time,p_id) VALUES('$FIR_date','$time','SELECT p_id FROM petitioner ORDER BY p_id DESC LIMIT 1')";
//$query1="INSERT INTO fir (Fir_no,FIR_date,time,p_id) VALUES('$FIR_no','$FIR_date','$time','$p_id')";*/

 //mysqli_query($con,$query);
        //header('location: redirect.php');

  /*if($result){
         echo 'data updated';
       }
  else {
          echo 'data not updated';
       }*/
mysqli_close($con);
?>
<html>
<head>
</head>
<body>
<button type="submit" class="button" onclick="myFunction()"><b><a href="fir.php">Click here to request for FIR</b></button> 
</body>
</html>
