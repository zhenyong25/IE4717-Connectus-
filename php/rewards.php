<?php

@$db = new mysqli('localhost','root','','connectus'); 

if(mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

session_start(); 
$user_id = $_SESSION['valid_user'];  
if(empty($user_id))
{
   echo '<script>alert("Please log in before proceed!!!");</script>';
   echo "<script>window.location.href='../login.html' </script>";
}

?>