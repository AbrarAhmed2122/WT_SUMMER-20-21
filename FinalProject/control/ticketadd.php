<?php
include('../model/db.php');


 $error="";

if (isset($_POST['submit'])) {
if (empty($_POST['temail']) || empty($_POST['tfrom']) || empty($_POST['tto']) || empty($_POST['type']) || empty($_POST['pay']) || empty($_POST['ddate']) || empty($_POST['num']) || empty($_FILES['timage']['name'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$imageLocation="../files/". $_FILES["timage"]["name"];


$userQuery=$connection->AddProduct($conobj,"ticketsell",$_POST['temail'],$_POST['tfrom'],$_POST['tto'],$_POST['type'],$_POST['pay'],$_POST['ddate'],$_POST['num'],$imageLocation);
if($userQuery==TRUE)
{
    if (move_uploaded_file($_FILES["timage"]["tmp_name"], $imageLocation)) {
       echo "data uploaded.";
    } else {
        echo "Sorry, data was not uploaded.";
    }
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>