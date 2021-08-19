<?php
include ('../control/ticketadd.php');
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/tablecss.css">
<script src="../js/ticketjs.js"></script>    
</head>
<body>
<div class="header">

</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="aboutusJQ.php">About US</a>
  <a href="pageone.php">Profile</a>
  <a href="../control/logout.php">Logout</a>

<p> My navigation </p>
</div>
</div>
<br>

<h2>Online Bus Ticket</h2> <br>

<p id="mytext"></p>
<form name="myForm" action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<h3>Email</h3>
<input type="text" id="temail" name="temail" placeholder="Enter your mail">
<h3>FROM:</h3>
    <input type="radio" id="dhaka" name="tfrom" value="dhaka">
    <label for="dhaka">Dhaka</label> 
    <input type="radio" id="cumilla" name="tfrom" value="cumilla">
    <label for="cumilla">Cumilla</label>
    <input type="radio" id="narayangonj" name="tfrom" value="narayangonj">
    <label for="narayangonj">Narayangonj</label> <br><br><br>
<h3>TO:</h3>
    <input type="radio" id="dhaka" name="tto" value="dhaka">
    <label for="dhaka">Dhaka</label>
    <input type="radio" id="cumilla" name="tto" value="cumilla">
    <label for="cumilla">Cumilla</label>
    <input type="radio" id="narayngong" name="tto" value="narayangonj">
    <label for="narayangonj">Narayngonj</label> <br> <br>
<h3>Bus Type: </h3>
    <input type="radio" id="non A/C" name="type" value="non A/C">
    <label for="non A/C">Non A/C</label>
    <input type="radio" id="A/C" name="type" value="A/C">
    <label for="A/C">A/C</label>
    <input type="radio" id="any" name="type" value="any">
    <label for="any">Any</label> <br> <br>
        

<h3>Payment:</h3>
    <input type="radio" id="vehicle1" name="pay" value="Bike">
    <label for="Bike">Cash on counter</label>
    <input type="radio" id="vehicle2" name="pay" value="Car">
    <label for="Car">Bkash</label>
    <input type="radio" id="vehicle3" name="pay" value="Boat">
    <label for="Boat">Paypal</label> <br><br>

<h3>Depart on:</h3>
    <input type="text" id="ddate" name="ddate" placeholder="Departure date" >  <br><br>
<h3>Ticket for:</h3>
    <input type="text" id="num" name="num" placeholder="Total tickets" >  <br><br>
<h3>NID Screenshot:</h3>
    <input type="file" name="timage"  >  <br><br>
        
   <input name="submit" type="submit" value="SUBMIT">

   <a href="pageone.php">Previous page</a>
</form>
</body>
</html>