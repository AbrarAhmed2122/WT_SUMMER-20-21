<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs.js"></script>    
</head>
<body>

<div class="header">
<h1>Online Tickets</h1>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="aboutusJQ.php">About US</a>
  <a href="#">Customer Care</a>
  <a href="registration.php">Registration from</a>
<p> My navigation </p>
</div>
</div>
<br>
<h2>Login:</h2>

<p id="mytext"></p>
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
    <input type="text" id="username" name="username" placeholder="Enter your username"><br>
    <input type="password" id="password" name="password" placeholder="Enter your password"><br><br>
    <input name="submit" type="submit" value="LOGIN">
    <h5><a href="registration.php">Have you not registered yet? click here!</a></h5>
</form>
<br>
<?php echo $error; ?>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br>

<div class="footer">
<h3> my footer </h3>
</div>
</body>
</html>