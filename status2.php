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

//On page 2
$case_id = $_SESSION['case_id'];
$query1="INSERT INTO status(case_id,status,witness,criminal,Date_of_start,Date_of_end,sentence) VALUES('$case_id',(SELECT status FROM outcome WHERE case_id='$case_id'),(SELECT witness FROM charge_sheet WHERE c_id='$case_id'),(SELECT criminal FROM charge_sheet WHERE c_id='$case_id'),(SELECT Date_of_start FROM investigation WHERE i_id='$case_id'),(SELECT Date_of_end FROM investigation WHERE i_id='$case_id'),(SELECT sentence FROM section_of_law WHERE case_id='$case_id') )";
	$result1=mysqli_query($con,$query1);
	$query2="SELECT * FROM status WHERE case_id='$case_id'";
	$result2=mysqli_query($con,$query2);
?>
</head>
<body>
<table align="center" border="$1px" style="width:600px;line-height:40px;">
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