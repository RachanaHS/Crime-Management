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

$query1="SELECT p_idn,p_name,p_age,p_address,p_sex FROM new_complaint ORDER BY No LIMIT 1";
$result1=mysqli_query($con,$query1);
$query2="SELECT v_idn,v_name,v_age,v_address,v_sex FROM new_complaint ORDER BY No LIMIT 1"; 
$result2=mysqli_query($con,$query2);
$query3="SELECT a_idn,a_name,a_age,a_address,a_sex FROM new_complaint ORDER BY No LIMIT 1"; 
$result3=mysqli_query($con,$query3);
$query4="SELECT * FROM new_complaint ORDER BY No LIMIT 1"; 
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
	<a class="btn btn-primary pull-right btn-sm Rbtn1Margin" style= "font-size:20px; color:hotpink;" href="updatefir.php">Update FIR</a>
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
			<td><?php echo $rows['p_idn'];?></td>
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
			<td><?php echo $rows1['v_idn'];?></td>
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
			<td><?php echo $rows2['a_idn'];?></td>
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
	while($rows2=mysqli_fetch_assoc($result4))
	{
		?>
		<tr>
			<td><?php echo $rows2['Idn'];?></td>
			<td><?php echo $rows2['date'];?></td>
			<td><?php echo $rows2['case_type'];?></td>
			<td><?php echo $rows2['time'];?></td>
			<td><?php echo $rows2['place'];?></td>
			<td><?php echo $rows2['FIR_non'];?></td>
		</tr>
		<?php
	}
	?>
	</table>

</body>
</html>