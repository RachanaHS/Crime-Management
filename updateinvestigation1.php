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
$crime_id=$_POST['crime_id'];
$_SESSION['crime_id'] = $crime_id;
$query1="SELECT * FROM investigation WHERE i_id='$crime_id'";
$result1=mysqli_query($con,$query1);
?>
<style>
body{
background-image:url("5.jpeg");
}
h{
font-size:40px;
font-family:"Times New Roman",Times,serif;
}
.column,.header {
    width: 100%;
	opacity:0.75;
	filter:alpha(opacity=50);
  }
  .button{
	background-color:#4CAF50;
	padding:15px 32px;
	text-align:center;
	font-size:16px;
	margin-left:600px;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
.Rbtn1Margin{margin-left:1200px;}
<!--
* {
  box-sizing: border-box;
}

body {
  margin: center;
}

/* Style the header */
.header {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
	opacity:0.5;
	filter:alpha(opacity=50);
  }
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}-->
.table1 {
background: rgba(255,255,255,0.5);
}
</style>
</head>
<body>
<div class="header">
  <h1>UPDATE INVESTIGATION DETAILS...</h1>
</div>

<div class="row">
  <div class="column">
	
	<div class="container">
	<h>INVESTIGATION DETAILS</h>
  <form action="updateinvestigation2.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="places">Places</label>
      </div>
      <div class="col-75">
        <input type="text" name="i_places" placeholder="Places..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="start">Date_Of_Start</label>
      </div>
      <div class="col-75">
        <input type="date" name="Date_of_start" placeholder="Date_of_Start..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="end">Date_Of_End</label>
      </div>
      <div class="col-75">
        <input type="date" name="Date_of_end" placeholder="Date_Of_End..">
          <!--<option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>-->
      </div>
    </div>
</div>
<br/>
<br/>
<br/>
<button type="submit" class="button" value="Submit"><b>Submit</b></button>

<br/>
<!--<button><a class="btn btn-primary pull-right btn-sm Rbtn2Margin " type="button"style= "font-size:20px; color:brown;" href="form3.html">Click here to enter accused details</a></button>-->
</form>
<table class="table1" align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
	<th colspan="5"><h2>Investigation Details</h2></th>
</tr>
<tr>
<th>Id</th>
<th>Places</th>
<th>Date_Of_Start</th>
<th>Date_Of_End</th>
<th>FIR_no</th>
</tr>

<?php
	while($rows=mysqli_fetch_assoc($result1))
	{
		?>
		<tr>
			<td><?php echo $rows['i_id'];?></td>
			<td><?php echo $rows['i_places'];?></td>
			<td><?php echo $rows['Date_of_start'];?></td>
			<td><?php echo $rows['Date_of_end'];?></td>
			<td><?php echo $rows['FIR_no'];?></td>
		</tr>
		<?php
	}
	?>
	</table>
<!--<button type="submit" class="button" onclick="myFunction()"><b><a href="petitioner.html">Go back</a></b></button> -->

</body>
</html>