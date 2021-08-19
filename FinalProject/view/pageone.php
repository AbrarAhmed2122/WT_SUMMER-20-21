<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="aboutusJQ.php">About Us</a>
  <a href="pagethree.php">Search user</a>
  <a href="../control/logout.php">Logout</a>
<p> My navigation </p>
</div>
</div>
<h2>Welcome Back <?php echo $_SESSION["username"];?>
<?php echo "  "?>
<a href="pagetwo.php">Update Profile</a> </h2>
<br/>

<h5> DO you wish to make a new trip?</h5>
<h5> Click here! <a href="tticket.php"> Ticket counter</a></h5>
</body>
</html>

<?php


?>   


