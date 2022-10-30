<?php

@$db = new mysqli ('localhost','root','','connectus'); 

if(mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

$email_address = $_POST('email_address');
$password = $_POST('password');
$retype_password = $_POST('retype_password');
$name = $_POST('name');
$contact_number = $_POST('contact_number');

if ($password != $retype_password){
    echo "Sorry passwords do not match"; 
    exit;  
}

$password = md5($password); 

$sql="INSERT into user(email_address,password,retype_password,name,contact) VALUES ('$email_address','$password,'$retype_password',‘$name’, ‘$contact_number’) 
$result = $db->query($sql); 

if (!$result)
    {echo "Your query failed";}
else
    {echo "Welcome ".$name.". You are now registed";}

$result_products->free();
$db->close();

?> 