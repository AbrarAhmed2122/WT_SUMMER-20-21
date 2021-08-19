<?php
include('../model/db.php');
$error="";

if (isset($_POST['update'])) {
if (empty($_POST['address']) || empty($_POST['email']) || empty($_POST['birthday']) || empty($_POST['phone']) ) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"registration",$_SESSION["username"],$_POST['address'],$_POST['email'],$_POST['birthday'],$_POST['phone'] );
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
