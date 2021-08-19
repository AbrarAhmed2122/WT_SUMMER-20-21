<?php
session_start(); 
include('../control/updatecheck.php');
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/tablecss.css">
</head>
<body>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="aboutusJQ.php">About US</a>
  <a href="#">Shop</a>
  <a href="../control/logout.php">Logout</a>
  <p> My navigation </p>
</div>
</div>

<h2>Hello <?php echo $_SESSION["username"];?></h2>
<h3>Update Your Profile Page.<h3>
<br><br>
<?php
$radio1=$radio2=$radio3="";
$address=$email=$birthday=$phone="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"registration",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $address=$row["address"];
      $email=$row["email"];
      $birthday=$row["birthday"];
      $phone=$row["phone"];
     
      if(  $row["gender"]=="m" )
      { $radio1="checked"; }
      else if($row["gender"]=="f")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
Address : <input type='text' name='address' value="<?php echo $address; ?>" ><br>
email : <input type='text' name='email' value="<?php echo $email; ?>" ><br>
Birthday : <input type='date' name='birthday' value="<?php echo $birthday; ?>" ><br>
Contact no. : <input type='phone' name='phone' value="<?php echo $phone; ?>" ><br>
 Gender:
     <input type='radio' name='gender' value='m'<?php echo $radio1; ?>>Male
     <input type='radio' name='gender' value='f' <?php echo $radio2; ?> >Female
     <input type='radio' name='gender' value='u'<?php  $radio3; ?> > Other
<br>
     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

</body>
</html>