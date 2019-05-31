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

$Id=$_POST['Id'];
$query1="SELECT p_id,p_name,p_age,p_address,p_sex FROM petitioner  WHERE p_id='$Id'";
$result1=mysqli_query($con,$query1);
$query2="SELECT v_id,v_name,v_age,v_address,v_sex FROM victim WHERE v_id='$Id'"; 
$result2=mysqli_query($con,$query2);
$query3="SELECT a_id,a_name,a_age,a_address,a_sex FROM accused WHERE a_id='$Id'"; 
$result3=mysqli_query($con,$query3);
$query4="SELECT * FROM crime WHERE Id='$Id'"; 
$result4=mysqli_query($con,$query4);
?>
<style>
.table1 {
background: rgba(255,255,255,0.5);
}
body{
background-image:url("5.jpeg");
}
column,.header{
    width: $100%;
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
	<div class="topnav">
	<a class="btn btn-primary pull-right btn-sm Rbtn1Margin" style= "font-size:20px; color:hotpink;" href="Investigation.html">Enter Details</a>
</div>
<!--<div class="header">
  <h1>New Complaint</h1>
	</div>-->
<table class="table1" align="center" border="1" style="width:600px;line-height:40px;">
<tr>
	<th colspan="5"><h2>Petitioner Details</h2></th>
</tr>
<tr>
<th>P_Id</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Sex</th>
</tr>

<?php
	while($rows=mysqli_fetch_assoc($result1))
	{
		?>
		<tr>
			<td><?php echo $rows['p_id'];?></td>
			<td><?php echo $rows['p_name'];?></td>
			<td><?php echo $rows['p_age'];?></td>
			<td><?php echo $rows['p_address'];?></td>
			<td><?php echo $rows['p_sex'];?></td>
		</tr>
		<?php
	}
	?>

<table  class="table1" align="center" border="$p_idpx" style="width:600px;line-height:40px;">
<tr>
	<th colspan="5"><h2>Victim Details</h2></th>
</tr>
<tr>
<th>V_Id</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Sex</th>
</tr>

<?php
	while($rows1=mysqli_fetch_assoc($result2))
	{
		?>
		<tr>
			<td><?php echo $rows1['v_id'];?></td>
			<td><?php echo $rows1['v_name'];?></td>
			<td><?php echo $rows1['v_age'];?></td>
			<td><?php echo $rows1['v_address'];?></td>
			<td><?php echo $rows1['v_sex'];?></td>
		</tr>
		<?php
	}
	?>
	</table>
<table  class="table1" align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="7"><h2>Accused Details</h2></th>
</tr>
<tr>
<th>A_Id</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Sex</th>
</tr>

<?php
	while($rows2=mysqli_fetch_assoc($result3))
	{
		?>
		<tr>
			<td><?php echo $rows2['a_id'];?></td>
			<td><?php echo $rows2['a_name'];?></td>
			<td><?php echo $rows2['a_age'];?></td>
			<td><?php echo $rows2['a_address'];?></td>
			<td><?php echo $rows2['a_sex'];?></td>
		</tr>
		<?php
	}
	?>
	</table>
<table class="table1" align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="7"><h2>Crime Details</h2></th>
</tr>
<tr>
<th>Id</th>
<th>Date</th>
<th>Case_type</th>
<th>Time</th>
<th>Place</th>
<th>FIR_no</th>
</tr>

<?php
	while($rows3=mysqli_fetch_assoc($result4))
	{
		?>
		<tr>
			<td><?php echo $rows3['Id'];?></td>
			<td><?php echo $rows3['date'];?></td>
			<td><?php echo $rows3['case_type'];?></td>
			<td><?php echo $rows3['time'];?></td>
			<td><?php echo $rows3['place'];?></td>
			<td><?php echo $rows3['FIR_no'];?></td>
		</tr>
		<?php
	}
	?>
	</table>

</body>
</html>