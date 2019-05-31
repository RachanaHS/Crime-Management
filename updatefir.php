<!DOCTYPE html>
<html lang="en">
<head>
<title>Investigation Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
</script>
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
	height:50%;
  }
  .button{
	background-color:#4CAF50;
	padding:15px 32px;
	text-align:center;
	font-size:16px;
	margin-left:600px;
}
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
.topnav {
  overflow: hidden;
  background-color: #333;
}
.Rbtn1Margin{margin-left:1200px;}
</style>
</head>
<body>
<div class="header">
  <h1>FILE FIR</h1>
</div>
<form action="updatefir1.php" method="post">
<div class="row">
 <div class="column">
	
	<div class="container">
	<h>ENTER FIR_No</h>
    <div class="row">
      <div class="col-25">
        <label for="FIR_no">FIR_no:</label>
      </div>
      <div class="col-75">
        <input type="text" id="FIR_no" name="FIR_no" placeholder="Enter..">
      </div>
    </div>
</div>
</div>
</div>
<div class="row">
  <div class="column">
	
	<div class="container">
	<h>ENTER DATE</h>
    <div class="row">
      <div class="col-25">
        <label for="FIR_date">DATE:</label>
      </div>
      <div class="col-75">
        <input type="date" id="FIR_date" name="FIR_date" placeholder="Enter date..">
      </div>
    </div>
</div>
</div>
</div>
<div class="row">
  <div class="column">
	
	<div class="container">
	<h>ENTER TIME</h>
    <div class="row">
      <div class="col-25">
        <label for="time">TIME:</label>
      </div>
      <div class="col-75">
        <input type="time" id="time" name="time" placeholder="Enter time..">
      </div>
    </div>
</div>
</div>
</div>

	<button type="submit" class="button"><b>Submit</b></button>    

<!--<button type="submit" class="button" onclick="myFunction()"><b>Submit</b></button>-->
<br/>
</form>
</body>
</html>