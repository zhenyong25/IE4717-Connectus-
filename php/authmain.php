<?php

@$db = new mysqli('localhost','root','','connectus'); 

if(mysqli_connect_errno()) {
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

session_start(); 

if (isset($_POST['email_address']) && isset($_POST['password'])){
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $password = md5($password); 
    $query= "select * from user where email_address='$email_address' and password='$password'"; 
    $result = $db->query($query); 

    if($result->num_rows>0){
        $_SESSION['valid_user'] = $email_address;
    }
    
    $query_name = "select name from user where email_address='$email_address' and password='$password'"; 
    $name_result = $db->query($query_name); 
    $name_array = mysqli_fetch_array($name_result);

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
                <div class="dropdown">
                <?php
                echo "<a href='../login.html' id='login' class='dropbtn'>"; 
                echo "<img class='user-icon' src='../img/user-icon.png' height='20px' width='20px'>
                $name_array[0]</a>";
                ?>
                    <div class="dropdown-content">
                        <a href="#">My Cart</a>
                        <a href="#">My Vouchers</a>
                        <a href="#">My History</a>
                        <?php
                        echo '<a href="logout.php">Log Out</a>';
                        ?>
                    </div>
                </div>
            </li>
        <div>
    </header>


<?php
    if (isset($_SESSION['valid_user'])){


echo '<div>';
echo '<img src="../img/main-pizza.jfif" width="100%" height="10%">';
echo '</div>';

echo '<div id="bottom-column">';
echo '<div id="container">';
echo '<img class="content-img" src="../img/italy.png">';
echo '<p class="content-txt">Modern day Pizzas were invented in a city called Naples located in Italy. These delicious food were initially consumed by the poors in';
echo 'the region of Naples. Long flatbread topped off with inexpensive garnishes such as tomato, cheese, oil, etc. These pizzas was sold by food vendors';
echo 'which was meant to be eaten quickly and without fuss. Today Pizzas are found in all corner of the world.</p>';
echo '<h1 class="content-intro">History</h1>';
echo '</div>';
       
echo '<div id="container">';
echo '<h1 class="content-intro">History of restuarant</h1>';
echo '<p class="content-txt">Connectus is an American multinational restaurant chain and international franchise founded in 1958 in Wichita, Kansas by Dan and Frank Carney. They serve their signature pan pizza and other dishes including pasta, breadsticks and dessert at dine-in, take-out and delivery chain locations. They also serve chicken wings on their WingStreet menu.';
echo 'The chain headquartered in Plano, Texas</p>';
echo '<img class="content-img" src="../img/pizza_restaurant.jfif">';
echo '</div>';

echo '<div id="container">';
echo '<img class="content-img" src="../img/pizza_chef.jpg">';
echo '<p class="content-txt">Our chefs, Chef Leonardo, have been trained in many italian restaurant all around the world. With 40 years of experience, he has been overlooking the process';
echo 'of every single pizza coming out of our kitchen. From handpicking only the very fresh ingridents to temperature of the stove, Chef Leonardo is involved in every';
echo 'step to ensure only the freshest and tasiest pizza comes to your table!</p>';
echo '<h1 class="content-intro">Our Chefs</h1>';
echo '</div>';
echo '</div>';
}


    else{
    if (isset($email_address))
        {
            echo '<p class="login-fail"> Could not log you in.<br>Please make sure you entered the correct email and password</p>'; 
            echo '<a class="login-fail-return" href="../login.html">Back to Login Page</a>'; 
        }
        else
        {
            echo 'You are not logged in.'; 
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
