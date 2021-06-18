<?php include "control/results.php"; ?>
<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
Enter Name: <input type="text" name="fname"> <?php echo $validatename; ?>
<br>
<br>
Enter Email: <input type="email" name="email"> <?php echo $validateemail; ?>
<br><br>

Enter Password: <input type="password" name="password"> <?php echo $validatepassword; ?>
<br><br>

Comment:<br>
<textarea id="comment" name="comment" rows="4" cols="50"></textarea><?php echo $validatecomment; ?>
<br><br>

Select Gender:
<br>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other</label>
  <br>
  <?php echo $validateradio; ?>
<br><br>

Choose Hobby:
<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 I have a bike
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
I have a car
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
 I have a boat
<br>
<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>
<br>
<input type="file" name="filetoupload">
<br>
<br>
<input type="submit" value="SUBMIT">
</form>
</body>
</html>