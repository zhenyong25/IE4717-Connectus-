<?php  //payment.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
?>
<html>
<head>
    <title>Connectus</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cart.css">
	<style>table{margin: 0px; border:0px solid #000066; width:80%; margin-left: auto;
  margin-right: auto;}
	td{padding: 20px;}</style>
    <script type="text/javascript" src="./checkform.js"></script>
</head>
<header>
        <!-- Navigation Bar -->
        <div class="nav-content">
            <li><img class ="nav-bar-logo" src="../img/connectus.png" height="100px" width="150px" href="index.html"></li>
            <li><a class="nav-bar-content" href="../index.html">Home</a></li> 
            <li><a class="nav-bar-content" href="../menu.php">Menu</a></li> 
            <li><a class="nav-bar-content" href="../rewards.html">Rewards</a></li>
            <li><a class="nav-bar-content" href="../locate.html">Locate Us</a></li>
            <li class="login-block">
                <a href="login.html" id="login">
                    <img class="user-icon" src="../img/user-icon.png" height="20px" width="20px">
                Login</a>
            </li>
        <div>
</header>
<body>
<h1 class="shopping">Order Successful </h1>

<div class="booking-summary">
    <p class="booking-summary-content">Your booking reference is <strong>LA0417</strong> <br>
     Please wait for around 20-30 minutes <br>
    Enjoy !<p>
</div>

<div class="view-my-order"><a href="../order.html">View My Order</div>
<div class="back-to-home"><a class="back-to-home-content" href="../index.html">Back to Home</a></div>

</body>
</html>
