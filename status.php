<html>
<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="2";


$con=mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
if(!$con)
{
	die("not connected".mysqli_connect_error());
}
$case_id=$_POST['case_id'];
$query = "SELECT status FROM outcome where case_id='$case_id'";
$result = mysqli_query($con,$query);
if ($result = 'Ongoing') {
	echo '<b>'.'Investigation is ONGOING...Please check again later'.'</b>';
	exit();
}
else
{
	echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='status1.php'
		</SCRIPT>");
}
/*if($result='Resolved')
{
	/*SELECT Test1.SurName, Test2.Class, Test2.Medium
	FROM Test1 
	INNER JOIN Test2 ON Test1.RegNo = Test2.RegNo*/
	/*$case_id=$_POST['case_id'];
	$query1="INSERT INTO status(case_id,status,witness,criminal,Date_of_start,Date_of_end,sentence) VALUES('$case_id','$result',(SELECT witness FROM charge_sheet WHERE c_id='$case_id'),(SELECT criminal FROM charge_sheet c_id='$case_id'),(SELECT Date_of_start FROM investigation WHERE i_id='$case_id'),(SELECT Date_of_end FROM investigation WHERE i_id='$case_id'),(SELECT sentence FROM section_of_law WHERE case_id='$case_id') )";
	$result1=mysqli_query($con,$query1);
	$query2="SELECT * FROM status WHERE case_id='$case_id'";
	$result2=mysqli_query($con,$query2);

	/*$result1 = $mysqli->query($query1);
    while ($row = $result1->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];
		$field5name = $row["col6"];
		$field5name = $row["col7"];
	}
        echo'<b>'.'Case_id: '.$field1name.'</b>'.'<br/>';
		echo'<b>'.'Status: '.$field2name.'</b>'.'<br />';
        echo'<b>'.'Witness: '.$field3name.'</b>'.'<br />';
		echo'<b>'.'Criminal: '.$field4name.'</b>'.'<br />';
		echo'<b>'.'Date_of_start: '.$field5name.'</b>'.'<br />';
		echo'<b>'.'Date_of_end: '.$field6name.'</b>'.'<br />';
		echo'<b>'.'Sentence: '.$field7name.'</b>'.'<br />';
    }*/

/*freeresultset
$result->free();*/

/*if(TRUE)
{
echo("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='petitioner.html'
		</SCRIPT>");
exit();
}
}
?>
<body>
<table align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="7"><h2>Status</h2></th>
</tr>
<tr>
<th>Case_id</th>
<th>Status</th>
<th>Witness</th>
<th>Criminal</th>
<th>Date_of_start</th>
<th>Date_of_end</th>
<th>Sentence</th>
</tr>
<?php
	while($rows=mysqli_fetch_assoc($result2))
	{
		?>
		<tr>
			<td><?php echo $rows['case_id'];?></td>
			<td><?php echo $rows['status'];?></td>
			<td><?php echo $rows['witness'];?></td>
			<td><?php echo $rows['criminal'];?></td>
			<td><?php echo $rows['Date_of_start'];?></td>
			<td><?php echo $rows['Date_of_end'];?></td>
			<td><?php echo $rows['sentence'];?></td>
		</tr>
		<?php
	}
	?>
	</table>
<!--<button type="submit" class="button" onclick="myFunction()"><b><a href="petitioner.html">Go back</a></b></button> -->
</body>
</html>
*/
?>