<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>
</div>
<div class="sticky">
<div class="topnav">
  <a href="homepage">Home</a>
  <a href="aboutusJQ.php">About US</a>
  <a href="tticket.php">Ticket Counter</a>
  <a href="pageone.php">Profile page</a>
  <a href="../control/logout.php">Logout</a>

<p> My navigation </p>
</div>
</div>
<h2>Hello <?php echo $_SESSION["username"];?></h2>

<script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/FinalProject/control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
}
</script>
</head>
<h3><label>Please type the name of the user</label></h3>

  <input type="text" id="uname" >
  <button onclick="showmyuser()">Search info</button>

<p id="mytext"></p>

</body>
</html>
<?php

?>   