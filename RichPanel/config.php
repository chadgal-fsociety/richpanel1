<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
/* Attempt to connect to MySQL database */

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sub = 'basic';
$active = 1;
$con = new mysqli('localhost', 'root', '','richpanel');
 
// Check connection
if($con->connect_error){
    die('ERROR: Could not connect. '. $con->connect_error);
}
else{
    $stmt = $con->prepare("insert into userdata values(?,?,?,?,?)");

    $stmt->bind_param("ssssi",$name,$email,$password,$sub,$active);
    $stmt->execute();
   
    $stmt->close();
}


?>