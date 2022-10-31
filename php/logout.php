<?php
session_start(); 

$old_user = $_SESSION['valid_user']; 
unset($_SESSION['valid_user']); 
session_destroy(); 
?>

<html>
<body>
<h1>Log Out</h1>

<?php
    if (!empty($old_user)){
        echo 'Logged out.<br />'; 
    }
    else{
        echo 'You were not logged in, and so have not been logged out.<br />'
    }
?>
<a href="./php/authmainphp">Back to main page </a>  
</body> 
</html> 