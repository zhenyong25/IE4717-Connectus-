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
    <title><img src="./img/connectus.png">Connectus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
	<style>table{margin: 0px; border:0px solid #000066; width:80%; margin-left: auto;
  margin-right: auto;}
	td{padding: 20px;}</style>
    <script type="text/javascript" src="./checkform.js"></script>
</head>
 <!-- Navigation Bar -->
    <nav class="nav-bar">
		<!-- <ul class="nav">  -->
            <span>
                <img class ="nav-bar-logo" src="../img/connectus.png" height="100px" width="150px">
            </span>
            <span class="nav-content">
                <li><a class="nav-bar-content" href="../index.html">Home</a></li> 
                <li><a class="nav-bar-content" href="../menu.php">Menu</a></li> 
                <li><a class="nav-bar-content" href="../rewards.html">Rewards</a></li>
                <li><a class="nav-bar-content" href="../locate.html">Locate Us</a></li>
            <span>
		<!-- <ul> -->
    </nav>


    <!-- Login -->
    <div id ='login-button'>
        <img src=""> 
        <span id="login">Login</span>
    </div>

    <!-- Order Now  -->
    <div id ='order-now-button'>
        <img src="">
        <span id="order-now">Order Now</span>
	</div>
</header>
<body>
<h1>Order Successful </h1>
	
</p>
</form>
</body>
</html>
