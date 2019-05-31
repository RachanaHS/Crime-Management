<<!DOCTYPE html>
<html lang="en">
<head>
<title>Update complaint</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<script>
function myFunction() {
  alert("You've filled your details,now Click on Request FIR");
}
function myFunction1() {
  alert("FIR filing..Continue filling more details about crime");
}
</script>-->
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
</style>
</head>
<body>
<div class="header">
  <h1>Update Evidence Details...</h1>
</div>
<div class="row">
  <div class="column">
	
	<div class="container">
	<h>DETAILS</h>
  <form action="updateevidence1.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="crime_id">Enter Crime_id</label>
      </div>
      <div class="col-75">
        <input type="text" id="crime_id" name="crime_id" placeholder="Crime Id...">
      </div>
    </div>
</div>
<br/>
<br/>
<br/>
</div>
</div>
<br/>
<button type="submit" class="button"><b>Submit</b></button>
<!--<button><a class="btn btn-primary pull-right btn-sm Rbtn2Margin " type="button"style= "font-size:20px; color:brown;" href="form3.html">Click here to enter accused details</a></button>-->
</form>
</body>
</html>