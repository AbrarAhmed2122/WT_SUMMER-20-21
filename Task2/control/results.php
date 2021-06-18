<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validatecomment="";
$validatecheckbox="";
$validateradio="";
$v1=$v2=$v3="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$comment=$_REQUEST["comment"];

if(empty($comment))
{
    $validatecomment= "you must enter comment";
}

if(empty($name) || (strlen($name)<3))
{
    $validatename= "you must enter name";
}
else
{
    $validatename= "your name is ".$name;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*Email required";
}
else{
    $validateemail= "your email is ".$email;
}

if(empty($password))
{
    $validatepassword= "you must enter password";
}
elseif(strlen($password)<8)
{
    $validatepassword = "*Must be 8 letter or more";
}
else
{
    $validatepassword= "your name is ".$password;
}

if(!isset($_REQUEST["vehicle1"])&&!isset($_REQUEST["vehicle2"])&&!isset($_REQUEST["vehicle3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["vehicle1"]))
   {
       $v1= $_REQUEST["vehicle1"];
   }
   if(isset($_REQUEST["vehicle2"]))
   { 
       $v2= $_REQUEST["vehicle2"];
   }
   if(isset($_REQUEST["vehicle3"]))
   {
    $v3= $_REQUEST["vehicle3"];
   }
}
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one radio";
}
}
?>