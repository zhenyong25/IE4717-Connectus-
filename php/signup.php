<?php

include "dbconnect.php"; 

$email_address=$_POST('email_address')
$password=$_POST('password')
$retype_password=$_POST('retype_password')
$name=$_POST('name')
$contact_number=$_POST('contact_number')

if ($password!= $retype_password){
    echo "Sorry passwords do not match"; 
    exit;  
}

$password = md5($password); 

$sql = "INSERT into users () VALUES ('$email_address','$password','$retype_password')"

$result = $dbcnx-> query($sql); 

?> 