<?php

@$db = new mysqli ('localhost','root','','connectus'); 

if(mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

session_start(); 

if (isset($_POST['email_address']) && isset($_POST['password']))
{
    $email_address = $_POST['email_address']; 
    $password = $_POST['password']; 

    $password = md5($password); 
    $query = "select * from user where user.email_address='$email_address'and user.password='$password'"; 

    $results = $db->query($query); 

    if ($results->num_rows>0){
        $_SESSION['valid_user'] = $email_address; 
    }

    $query_name = "select name from user where user.email_address='$email_address'and user.password='$password'";
    $name = $db->query($query_name);
    $array_name = mysqli_fetch_array($name); 

    $db->close(); 
}
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
                <?php
                echo "<a href='../login.html' id='login'>";
                echo "<img class='user-icon' src='../img/user-icon.png' height='20px' width='20px'>$array_name[0]</a>";
                ?>
            </li>
        <div>
    </header>

<?php
    if (isset($_SESSION['valid_user']))
    {
        echo 'You are logged in as: '.$_SESSION['valid_user'].'<br/>'; 
        echo '<a href="logout.php">Log out</a><br/>';
    }

    else{
        if(isset($email_address))
        {
            echo 'Could not log you in.<br/>';
        }

        else{
            echo 'You are not logged in.<br/>';
        }
    }
?>

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