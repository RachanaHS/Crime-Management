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
$crime_id=$_POST['crime_id'];
$_SESSION['crime_id'] = $crime_id;
$query1="INSERT INTO deleted_records (crime_id,p_name,p_address,v_name,v_address,criminal,c_address,crime_date,case_type,time,place,date_of_start,date_of_end,o_name,status,section,sentence) VALUES ('$crime_id',(SELECT p_name FROM petitioner WHERE p_id='$crime_id'),(SELECT p_address FROM petitioner WHERE p_id='$crime_id'),(SELECT  v_name FROM victim WHERE Id='$crime_id'),(SELECT v_address FROM victim WHERE Id='$crime_id'),(SELECT criminal_nam FROM criminal WHERE c_id='$crime_id'),(SELECT c_address FROM criminal WHERE c_id='$crime_id'),(SELECT date FROM crime WHERE Id='$crime_id'),(SELECT case_type FROM crime WHERE Id='$crime_id'),(SELECT time FROM crime WHERE Id='$crime_id'),(SELECT place FROM crime WHERE Id='$crime_id'),(SELECT Date_of_start FROM investigation WHERE i_id='$crime_id'),(SELECT Date_of_end FROM investigation WHERE i_id='$crime_id'),(SELECT o_name FROM officer1 WHERE i_id='$crime_id'),(SELECT status FROM outcome WHERE c_id='$crime_id'),(SELECT section FROM section_of_law WHERE case_id='$crime_id'),(SELECT sentence FROM section_of_law WHERE case_id='$crime_id'))";
$result1=mysqli_query($con,$query1);
if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='delete3.php'
		</SCRIPT>");
exit();
}
?>
</head>
<body>
</body>
</html>