<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/tablecss.css">
    
</head>
<body>

<div class="header">
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="login.php">Back to login</a>
<p> My navigation </p>
</div>
</div>
<br>

<h1>Register Form:</h1>
</head>
<body>
 <form action="db1.php" method="POST">
  <table>
   <tr>
    <td><h3>Username</h3> </td>
    <td><input type="text" name="username" placeholder="Enter username" required></td>
   </tr>
   <tr>
    <td><h3>Address</h3> </td>
    <td><input type="text" name="address" placeholder="Current address" required></td>
   </tr>
   <tr>
    <td><h3>Birthday</h3> </td>
    <td><input type="date" name="birthday" placeholder="Enter your username" required></td>
   </tr>
   <tr>
    <td><h3>Email</h3> </td>
    <td><input type="email" name="email" placeholder="Enter your mail" required></td>
   </tr>
   <tr>
    <td><h3>Password</h3></td>
    <td><input type="password" name="password" placeholder="Enter password"required></td>
   </tr>
   <tr>
    <td><h3>Payment</h3></td>
    <td> <input type="checkbox" name="vehicle1" value="cash">Cash on counter 
    <input type="checkbox" name="vehicle1" value="paypal">Paypal 
    <input type="checkbox" name="vehicle1" value="bkash">Bkash </td>
   </tr> 
   <tr>
    <td><h3>Gender :</h3></td>
    <td><input type="radio" name="gender" value="m" required>Male 
    <input type="radio" name="gender" value="f" required>Female 
    <input type="radio" name="gender" value="u" required>Other </td>
   </tr>
   <tr>
    <td><h3>Phone no :</h3></td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="977">977</option>
      <option value="978">978</option>
      <option value="979">979</option>
      <option value="973">973</option>
      <option value="972">972</option>
      <option value="880">880</option>
     </select>
     <input type="phone" name="phone"  placeholder="Contact number" required>
    </td>
   </tr>
   <tr>
    <td><h3>Registration date:</h3></td>
    <td><input type="text" name="registerdate" placeholder="mm/dd/yyyy" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
</div>
</body>
</html>