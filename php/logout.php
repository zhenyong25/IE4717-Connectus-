<?php
session_start(); 

$old_user = $_SESSION['valid_user']; 
unset($_SESSION['valid_user']); 
session_destroy(); 
?>

<!DOCTYPE html>

<html>
<head>
    <title>Connectus</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <script type="text/javascript" src="../JS/index.js"></script>
</head>

<body>
    <header>
        <!-- Navigation Bar -->
        <div class="nav-content">
            <li><img class ="nav-bar-logo" src="../img/connectus.png" height="100px" width="150px" href="index.html"></li>
            <li><a class="nav-bar-content" href="../index.html">Home</a></li> 
            <li><a class="nav-bar-content" href="../menu.php">Menu</a></li> 
            <li><a class="nav-bar-content" href="../rewards.html">Rewards</a></li>
            <li><a class="nav-bar-content" href="../locate.html">Locate Us</a></li>
            <li class="login-block">
                <a href="../login.html" id="login">
                    <img class="user-icon" src="../img/user-icon.png" height="20px" width="20px">
                Login</a>
            </li>
        <div>
    </header>

    <h1>Log Out</h1>

    <?php
    if (!empty($old_user)){
        echo 'Logged out.<br />'; 
    }
    else{
        echo 'You were not logged in, and so have not been logged out.<br />'; 
    }
    ?>
    
    <a href="../php/authmain.php">Back to main page </a>

    <footer>
    <div class="footer">
        <div class="footer-div">
            <img class="footer-logo" src="../img/connectus.png" width="140px" height="100px">
            <div class="footer-info">
                <span class="footer-info-top">Connectus Pizza Singapore</span><br>
                <span class="footer-info-bottom">6362 8890</span>
            </div>
        </div>

        <div class="footer-table">
            <table class="footer-table">
                    <tr>
                        <td style="width:10%" class="table-header">Company</td>
                        <td style="width:10%" class="table-header">Help</td>
                        <td style="width:10%" class="table-header">Social</td>
                    </tr>
                    <tr>
                        <td>Join Us</td>
                        <td>FAQ</td>
                        <td>Facebook</td>
                    </tr>
                    <tr>
                        <td>About Us</td>
                        <td></td>
                        <td>Instagram</td>
                    </tr>
                    <tr>
                        <td>Contact </td>
                        <td></td>
                        <td>Youtube</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>TikTok</td>
                    </tr>
            </table>
        </div>
    </div>
</footer>

</div>
</body>
</html>