<?php 

//catalog.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}

$db = new mysqli('localhost', 'root', '', 'connectus');

// Check connection
if ($db->connect_errno) {
	echo 'Error: Could not connect to database. Please try again later.';
	exit();
}

// Get the latest prices
$getPrices = 'SELECT * FROM prices';
$prices = $db->query($getPrices)->fetch_object();

$peperroni_pizza_price = $prices->peperroni_pizza;
$mushroom_pizza_price = $prices->mushroom_pizza;
$french_fries_price = $prices->french_fries;
$coleslaw_price = $prices->coleslaw;
$cola_price = $prices->coke;
$green_tea_price = $prices->green_tea;
?>

<!DOCTYPE html>

<html>
<head>
    <title>Connectus</title>
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
	<style> table{
		margin: auto; border:0px solid #000066; width: 400px;}</style>
    <script type="text/javascript" src="./JS/index.js"></script>
</head>

<body>
	<header>
        <!-- Navigation Bar -->
        <div class="nav-content">
            <li><img class ="nav-bar-logo" src="./img/connectus.png" height="100px" width="150px" href="index.html"></li>
            <li><a class="nav-bar-content" href="index.html">Home</a></li> 
            <li><a class="nav-bar-content" href="menu.php">Menu</a></li> 
            <li><a class="nav-bar-content" href="rewards.html">Rewards</a></li>
            <li><a class="nav-bar-content" href="locate.html">Locate Us</a></li>
            <li class="login-block">
                <a href="login.html" id="login">
                    <img class="user-icon" src="./img/user-icon.png" height="20px" width="20px">
                Login</a>
            </li>
        <div>
    </header>


</div>
		<?php
		$items = array(
			'Pepperoni Pizza',
			'Mushroom Pizza',
			'French Fries',
			'Coleslaw',
			'Cola',
			'Green Tea'
			);
		$prices = array($peperroni_pizza_price, $mushroom_pizza_price, $french_fries_price, $coleslaw_price,$cola_price,$green_tea_price);
		?>
<div id="bottom-column">

<table border = "0">
	<div class="main-menu-header">
		<div class="menu-header">Pizza</div>
		<div class="cart"><a class="view-cart" href="./menu-page/cart.php">View Cart</a></div>
		<div class="cart-items"><?php echo count($_SESSION['cart']); ?></div>
	<div>
	<tr>
	<div>
		<!--<th><strong>Pepperoni pizza</strong></th>-->
		<th width ="100px"><img src="./img/pepperoni pizza.jpg" width="160px" height="160px" alt="pepperoni pizza"><!--https://unsplash.com/images/food/pizza-->
		<div><?php for ($i=0; $i<1; $i++){
	echo "<div class='menu-item'>".$items[$i]."<div>";
	echo "<div class='price'>$" .number_format($prices[$i], 2). "</div>";
	echo "</br>";
	echo "<a class='add_button' href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to Cart</a>";

} ?></div>
	</div>
		<th width ="100px"><img src="./img/mushroom pizza.jpg" width="160px" height="160px" alt="mushroom pizza"><!--https://www.freepik.com/free-photos-vectors/pizza-top-view-->
		<div><?php for ($i=1; $i<2; $i++){
	echo "<div class='menu-item'>".$items[$i]."</div>";
	echo "<div class='price'>$" .number_format($prices[$i], 2). "</div>";
	echo "</br>";
	echo "<a class='add_button' href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to Cart</a>";
} ?></div>
	</tr>
</table>

<table border = "0">
	<div class="menu-header">Side Dishes</div>
	<tr>
		<th><img src="./img/french_fries.jpg" width="160px" height="160px" alt="french fries"><!--https://recipes.timesofindia.com/recipes/french-fries/rs54659021.cms-->
		<div><?php for ($i=2; $i<3; $i++){
	echo "<div class='menu-item'>".$items[$i]."</div>";
	echo "<div class='price'>$" .number_format($prices[$i], 2). "</div>";
	echo "</br>";
	echo "<a class='add_button' href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to Cart</a>";
	echo "";
} ?></div>
		<th><img src="./img/coleslaw.jpg" width="160px" height="160px" alt="coleslaw"><!--https://www.inspiredtaste.net/26522/coleslaw-recipe/-->
				<div><?php for ($i=3; $i<4; $i++){
	echo "<div class='menu-item'>".$items[$i]."</div>";
	echo "<div class='price'>$" .number_format($prices[$i], 2). "</div>";
	echo "</br>";
	echo "<a class='add_button' href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to Cart</a>";
	echo "";
} ?></div>
	</tr>
</table>
	
<table border = "0">
	<div class="menu-header">Beverages</div>
	<tr>
		<th><img src="./img/coke_logo.png" width="160px" height="160px" alt="coke logo"><!--https://recipes.timesofindia.com/recipes/french-fries/rs54659021.cms-->
				<div><?php for ($i=4; $i<5; $i++){
	echo "<div class='menu-item'>".$items[$i]."</div>";
	echo "<div class='price'>$" .number_format($prices[$i], 2). "</div>";
	echo "</br>";
	echo "<a class='add_button' href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
} ?></div>
		<th><img src="./img/green_tea.jpg" width="160px" height="160px" alt="greentea"><!--https://www.pokka.co/our-products/product-detail?cat=tea&subcat=green-tea-->
						<div><?php for ($i=5; $i<6; $i++){
	echo "<div class='menu-item'>".$items[$i]."</div>";
	echo "<div class='price'>$" .number_format($prices[$i], 2). "</div>";
	echo "</br>";
	echo "<a class='add_button' href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to cart</a>";
} ?></div>
	</tr>
</table>
</div>

<div class="menu-header" height="30px"></div>
<footer>
    <div class="footer">
        <div class="footer-div">
            <img class="footer-logo" src="./img/connectus.png" width="140px" height="100px">
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