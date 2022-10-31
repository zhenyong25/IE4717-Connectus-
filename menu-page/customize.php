<?php
$reportType = $_GET['reportType'];

?>

<!DOCTYPE html>

<html>
<head>
    <title>Connectus</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
	<style></style>
    <script type="text/javascript" src="../JS/menu.js"></script>
</head>

<body>
<header>

    <!-- Navigation Bar -->
    <nav class="nav-bar">
		<!-- <ul class="nav">  -->
            <span>
                <img class ="nav-bar-logo" src="../img/connectus.png" height="100px" width="150px">
            </span>
            <span class="nav-content">
                <li><a class="nav-bar-content" href="../index.html">Home</a></li> 
                <li><a class="nav-bar-content" href="../menu.html">Menu</a></li> 
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
</div>

<div id="bottom-column">
	<h2>Customise Pizza</h2>
	<h3>Name of pizza</h2>
	<h3>Select Size and crust</h3>
	<div>
		<p><strong>Size</strong></p>
		<label for="size_option">Please select a size</label>
		<br>
		<select name="size_pizza">
		<option value="small">12-inch(Small)</option>
		<option value="medium">14-inch(Medium)</option>
		<option value="large">16-inch(Large)</option>
		</select>
	</div>
	<div>
		<p><strong>Crust</strong></p>
		<label for="crust_option">Please select a crust</label>
		<br>
		<select name="crust_pizza">
		<option value="doughy">Doughy</option>
		<option value="crispy">Crispy</option>
		<option value="thin">Thin</option>
		</select>
	</div>
		<div>
		<p><strong>Extra Cheese?</strong></p>
		<select name="cheese_pizza">
		<option value="cheese_yes">Yes</option>
		<option value="cheese_no">No</option>
		</select>
	</div>
	<div>
	<p><strong>Quantity</strong>
	<input class="qty" type="number" min="0" value="0" name="quantity_pizza" id="quantity_pizza"></p>
	<p><strong>Total</strong></p>
	</div>
</div>


<footer>
    <div id="footer">
        <span>
            <img src="../img/connectus.png" width="100px" height="80px">
            <span>Connectus Pizza Singapore</span>
            <span>6362 8890</span>
        </span>

        <table class="further-info">
            <tr>
                <td class="header">Company</td>
                <td class="header">Help</td>
                <td class="header">Follow Us</td>
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
                <td>Contact Us</td>
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
</footer>

</div>
</body>
</html>