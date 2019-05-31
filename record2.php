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

$query1="SELECT crime_id,p_name,p_address,v_name,v_address FROM deleted_records WHERE Num='1'";
$result1=mysqli_query($con,$query1);
$query2="SELECT criminal,c_address,crime_date,case_type,time,place FROM deleted_records WHERE Num='1'";
$result2=mysqli_query($con,$query2);
$query3="SELECT date_of_start,date_of_end,o_name FROM deleted_records WHERE Num='1'";
$result3=mysqli_query($con,$query3);
$query4="SELECT status,section,sentence FROM deleted_records WHERE Num='1'";
$result4=mysqli_query($con,$query4);
/*$query2="SELECT num FROM deleted_records ORDER BY num LIMIT $p_id";
$result2=mysqli_query($con,$query2);
$rows$p_id=mysqli_fetch_assoc($result2);*/

?>
<style>
.table1 {
background: rgba(255,255,255,0.5);
}
body{
background-image:url("5.jpeg");
}
column,.header{
    width: 100%;
	opacity:0.5;
	filter:alpha(opacity=50);
  }
 .header {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
 } 
 
.Rbtn1Margin{margin-left:1200px;}
</style>
</head>
<body>
	<div class="header">
		<h1>DELETED RECORDS...</h1>
	</div>
	<div class="topnav">
	<a class="btn btn-primary pull-left btn-sm Rbtn1Margin" style= "font-size:20px; color:hotpink;" href="admin.html">LOGOUT</a>
</div>
<!--<div class="header">
  <h$p_id>New Complaint</h$p_id>
	</div>-->
<table class="table1" align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="3"><h2>Petitioner</h2></th>
	<th colspan="2"><h2>Victim</h2></th>
</tr>
<tr>
<th>Crime_Id</th>
<th>Petitioner</th>
<th>Address</th>
<th>Victim</th>
<th>Address</th>
</tr>

<?php
	while($row1=mysqli_fetch_assoc($result1))
	{
		?>
		<tr>
			<td><?php echo $row1['crime_id'];?></td>
			<td><?php echo $row1['p_name'];?></td>
			<td><?php echo $row1['p_address'];?></td>
			<td><?php echo $row1['v_name'];?></td>
			<td><?php echo $row1['v_address'];?></td>
		</tr>
		<?php
	}
	?>
<table  class="table1" align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="2"><h2>Criminal Details</h2></th>
	<th colspan="4"><h2>Crime Details</h2></th>
</tr>
<tr>
<th>Criminal</th>
<th>Address</th>
<th>Date</th>
<th>Case_type</th>
<th>Time</th>
<th>Place</th>
</tr>

<?php
	while($rows2=mysqli_fetch_assoc($result2))
	{
		?>
		<tr>
			<td><?php echo $rows2['criminal'];?></td>
			<td><?php echo $rows2['c_address'];?></td>
			<td><?php echo $rows2['crime_date'];?></td>
			<td><?php echo $rows2['case_type'];?></td>
			<td><?php echo $rows2['time'];?></td>
			<td><?php echo $rows2['place'];?></td>
		</tr>
		<?php
	}
	?>
<table  class="table1" align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="2"><h2>Investigation Details</h2></th>
	<th colspan="1"><h2>Officer Details</h2></th>
</tr>
<tr>
<th>Date_of_Start</th>
<th>Date_of_End</th>
<th>Officer</th>
</tr>

<?php
	while($rows3=mysqli_fetch_assoc($result3))
	{
		?>
		<tr>
			<td><?php echo $rows3['date_of_start'];?></td>
			<td><?php echo $rows3['date_of_end'];?></td>
			<td><?php echo $rows3['o_name'];?></td>
		</tr>
		<?php
	}
	?>
	</table>
<table class="table1" align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="1"><h2>Status</h2></th>
	<th colspan="2"><h2>Section_Of_Law</h2></th>
</tr>
<tr>
<th>Status</th>
<th>Section</th>
<th>Sentence</th>
</tr>

<?php
	while($rows4=mysqli_fetch_assoc($result4))
	{
		?>
		<tr>
			<td><?php echo $rows4['status'];?></td>
			<td><?php echo $rows4['section'];?></td>
			<td><?php echo $rows4['sentence'];?></td>
		</tr>
		<?php
	}
	?>
	</table>
******************************************************************************
</body>
</html>