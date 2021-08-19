<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
// login check
 function CheckUser($conn,$table,$username,$password){
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

// ticket sell info 
 function AddProduct($conn,$table,$temail,$tfrom,$tto,$type,$pay,$ddate,$num,$timage){
$result = $conn->query("INSERT INTO $table VALUES('','$temail','$tfrom','$tto','$type','$pay','$ddate','$num','$timage')");
 return $result;
 }

 function ShowAll($conn,$table){
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
//search user
 function GetUserByUname($conn,$table, $uname){
$result = $conn->query("SELECT * FROM  $table WHERE username='$uname'");
 return $result;
 }
//update user
 function UpdateUser($conn,$table,$username,$address,$email,$birthday, $phone){
     $sql = "UPDATE $table SET address='$address', email='$email', birthday='$birthday', phone='$phone' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
        
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>