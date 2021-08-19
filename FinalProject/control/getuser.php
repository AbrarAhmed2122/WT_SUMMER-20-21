<?php
include('../model/db.php');

$user = $_POST['uname'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"registration",$user );

if ($MyQuery->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Username</th>
    <th>Address</th>
    <th>Email</th>
    <th>Birthday</th>
    <th>Phone</th>
    </tr>";

while($row = $MyQuery->fetch_assoc()) {
    echo "<tr><td>".$row["username"]."</td>
    <td>".$row["address"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["birthday"]."</td>
    <td>".$row["phone"]."</td>
    </tr>";
    }
    echo "</table>";
  }
else {
    echo "Unfortunately,There is none listed with this name. ";
  }
}
else{
  echo "Please enter a valid name";
}