<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>
<form>
<table style="width:100%">
  <tr>
    <td><label for="fname">First Name:</label></td>
    <td> <input type="text" id="fname" name="fname"></td> 
  </tr>

  <tr>
    <td><label for="ename">E-mail:</label></td>
    <td> <input type="email" id="ename" name="ename"></td> 
  </tr>

  <tr>
    <td><label for="pass">Password:</label></td>
    <td><input type="password" id="pass" name="pass"></td>
  </tr>

  <tr>
    <td><label for="review">Comment:</label></td>
    <td><textarea id="review" name="review" rows="4" cols="50">
    </textarea></td>
  </tr>

  <tr>
    <td><label for="rname">Choose Gender:</label></td>
    <td><inpuT type="radio" name="option">Male
    <input type="radio" name="option">Female
    <input type="radio" name="option">Other</td>
  </tr>

  <tr>
    <td> <label for="cname">Please choose a hobby:</label></td>
    <td><inpuT type="checkbox" name="option">Singing
    <input type="checkbox" name="option">Dancing
    <input type="checkbox" name="option">Reading</td>
  </tr>

  <tr>
    <td><label for="myfile">Select a file:</label></td>
    <td><input type="file" id="myfile" name="myfile"></td>
  </tr>

  <tr>
    <td><input type="submit" value="Submit">
        <input type="reset" value="reset"></td>  
  </tr>

</table>
</form>
</body>
</html>
