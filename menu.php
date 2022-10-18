<?php //catalog.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>

<!DOCTYPE html>

<html>
<head>
    <title><img src="./img/connectus.png">Connectus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
	<style>table{margin: auto; border:0px solid #000066; width: 400px;}</style>
    <script type="text/javascript" src="./JS/index.js"></script>
</head>

<body>
<header>

    <!-- Navigation Bar -->
    <nav class="nav-bar">
		<!-- <ul class="nav">  -->
            <span>
                <img class ="nav-bar-logo" src="./img/connectus.png" height="100px" width="150px">
            </span>
            <span class="nav-content">
                <li><a class="nav-bar-content" href="index.html">Home</a></li> 
                <li><a class="nav-bar-content" href="menu.html">Menu</a></li> 
                <li><a class="nav-bar-content" href="rewards.html">Rewards</a></li>
                <li><a class="nav-bar-content" href="locate.html">Locate Us</a></li>
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
		<?php
		$items = array(
			'Pepperoni Pizza',
			'Mushroom_Pizza',
			'French Fries',
			'Coleslaw',
			'Cola',
			'Green Tea'
			);
		$prices = array(15.00, 20.00, 6.00, 4.00,2.00,2.00);
		?>
<div id="bottom-column">

<table border = "0">
	<h2>Pizza</h2>
	<tr>
	<div>
		<!--<th><strong>Pepperoni pizza</strong></th>-->
		<th width ="100px"><img src="./img/pepperoni pizza.jpg" width="150" height="100" alt="pepperoni pizza"><!--https://unsplash.com/images/food/pizza-->
		<p><?php for ($i=0; $i<1; $i++){
	echo "".$items[$i]."";
	echo "</br>";
	echo "$" .number_format($prices[$i], 2). "";
	echo "</br>";
	echo "<a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
	echo "";
} ?></p>
		<a href="./menu-page/customize.php">Add</a></th>
	</div>
		<th width ="100px"><img src="./img/mushroom pizza.jpg" width="150" height="100" alt="mushroom pizza"><!--https://www.freepik.com/free-photos-vectors/pizza-top-view-->
		<p><?php for ($i=1; $i<2; $i++){
	echo "".$items[$i]."";
	echo "</br>";
	echo "$" .number_format($prices[$i], 2). "";
	echo "</br>";
	echo "<a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
	echo "";
} ?></p>
	</tr>
	</table>
<table border = "0">
	<h2>Side Dishes</h2>
	<tr>
		<th><img src="./img/french_fries.jpg" width="150" height="100" alt="french fries"><!--https://recipes.timesofindia.com/recipes/french-fries/rs54659021.cms-->
		<p><?php for ($i=2; $i<3; $i++){
	echo "".$items[$i]."";
	echo "</br>";
	echo "$" .number_format($prices[$i], 2). "";
	echo "</br>";
	echo "<a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
	echo "";
} ?></p>
		<th><img src="./img/coleslaw.jpg" width="150" height="100" alt="coleslaw"><!--https://www.inspiredtaste.net/26522/coleslaw-recipe/-->
				<p><?php for ($i=3; $i<4; $i++){
	echo "".$items[$i]."";
	echo "</br>";
	echo "$" .number_format($prices[$i], 2). "";
	echo "</br>";
	echo "<a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
	echo "";
} ?></p>
	</tr>
	</table>
	
<table border = "0">
	<h2>Beverages</h2>
	<tr>
		<th><img src="./img/coke_logo.png" width="150" height="100" alt="coke logo"><!--https://recipes.timesofindia.com/recipes/french-fries/rs54659021.cms-->
				<p><?php for ($i=4; $i<5; $i++){
	echo "".$items[$i]."";
	echo "</br>";
	echo "$" .number_format($prices[$i], 2). "";
	echo "</br>";
	echo "<a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
	echo "";
} ?></p>
		<th><img src="./img/green_tea.jpg" width="150" height="100" alt="greentea"><!--https://www.pokka.co/our-products/product-detail?cat=tea&subcat=green-tea-->
						<p><?php for ($i=5; $i<6; $i++){
	echo "".$items[$i]."";
	echo "</br>";
	echo "$" .number_format($prices[$i], 2). "";
	echo "</br>";
	echo "<a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
	echo "";
} ?></p>
	</tr>
	</table
	
	<p>Your shopping cart contains <?php
	echo count($_SESSION['cart']); ?> items.</p>
	<p><a href="./menu-page/cart.php">View your cart</a></p>

</div>


<footer>
    <div id="footer">
        <span>
            <img src="./img/connectus.png" width="100px" height="80px">
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