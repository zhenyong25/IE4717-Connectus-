<?php //catalog.php

$db = new mysqli('localhost', 'root', '', 'connectus_1');

// Check connection
if ($db->connect_errno) {
	echo 'Error: Could not connect to database. Please try again later.';
	exit();
}

	if (isset($_POST['submit'])){
			$new_peperroni_pizza_price = floatval($_POST['peperroni_pizza']);
			$new_mushroom_pizza_price = floatval($_POST['mushroom_pizza']);
			$new_french_fries_price = floatval($_POST['french_fries']);
			$new_coleslaw_price = floatval($_POST['coleslaw']);
			$new_coke_price = floatval($_POST['coke']);
			$new_greentea_price = floatval($_POST['green_tea']);
			
			$update_price = 'UPDATE prices
			SET peperroni_pizza = ' . $new_peperroni_pizza_price . ', mushroom_pizza = ' . $new_mushroom_pizza_price .' ,
			french_fries = ' . $new_french_fries_price .' , coleslaw = ' . $new_coleslaw_price .' ,
			coke = ' . $new_coke_price .' , green_tea = ' . $new_greentea_price .'
			WHERE id = 1';
			$db->query($update_price);
		}


	// Get the latest prices
	$getPrices = 'SELECT * FROM prices';
	$prices = $db->query($getPrices)->fetch_object();
	$peperroni_pizza_price= $prices->peperroni_pizza;
	$mushroom_pizza_price= $prices->mushroom_pizza;
	$french_fries_price= $prices->french_fries;
	$coleslaw_price= $prices->coleslaw;
	$coke_price= $prices->coke;
	$green_tea_price= $prices->green_tea;


?>

<!DOCTYPE html>

<html>
<head>
    <title><img src="./img/connectus.png">Connectus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
	<style>table{margin: auto; border:0px solid #000066; width: 400px;}</style>
    <script type="text/javascript" src="../JS/index.js"></script>
</head>

<body>
<header>
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


</div>
<div id="bottom-column">
<form id="update-prices" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<table border = "0">
	<h2>Pizza</h2>
	<tr>
		<!--<th><strong>Pepperoni pizza</strong></th>-->
		<th width ="100px"><img src="../img/pepperoni pizza.jpg" width="150" height="100" alt="pepperoni pizza"><!--https://unsplash.com/images/food/pizza-->
		<p><strong>Pepperoni Pizza</strong></p>
		<p><input type="text" name="peperroni_pizza" size=2 value="<?= $prices->peperroni_pizza ?>">

		<th width ="100px"><img src="../img/mushroom pizza.jpg" width="150" height="100" alt="mushroom pizza"><!--https://www.freepik.com/free-photos-vectors/pizza-top-view-->
		<p><strong>Mushroom Pizza</strong></p>
		<p><input type="text" name="mushroom_pizza" size=2 value="<?= $mushroom_pizza_price ?>">
		</p>
	</tr>
	</table>
<table border = "0">
	<h2>Side Dishes</h2>
	<tr>
		<th><img src="../img/french_fries.jpg" width="150" height="100" alt="french fries"><!--https://recipes.timesofindia.com/recipes/french-fries/rs54659021.cms-->
		<p><strong>French Fries</strong></p>
		<p><input type="text" name="french_fries" size=2 value="<?= $french_fries_price ?>">
		</p>
		
		<th><img src="../img/coleslaw.jpg" width="150" height="100" alt="coleslaw"><!--https://www.inspiredtaste.net/26522/coleslaw-recipe/-->
		<p><strong>Coleslaw</strong></p>
		<p><input type="text" name="coleslaw" size=2 value="<?= $coleslaw_price ?>">
		</p>
	</tr>
	</table>
	
<table border = "0">
	<h2>Beverages</h2>
	<tr>
		<th><img src="../img/coke_logo.png" width="150" height="100" alt="coke logo"><!--https://recipes.timesofindia.com/recipes/french-fries/rs54659021.cms-->
		<p><strong>Coke</strong></p>
		<p><input type="text" name="coke" size=2 value="<?= $coke_price ?>">
		</p>
		<th><img src="../img/green_tea.jpg" width="150" height="100" alt="greentea"><!--https://www.pokka.co/our-products/product-detail?cat=tea&subcat=green-tea-->
		<p><strong>Green Tea</strong></p>
		<p><input type="text" name="green_tea" size=2 value="<?= $green_tea_price ?>">
		</p>
		
	</tr>
	</table>
	
<table border = "0">
<tr><br><th><button type='submit' name='submit' style="height:50px;width:100px">Update price</button></th></tr>
</table>
</form>
</div>


<footer>
    <div id="footer">
        <div class="footer-div">
            <img class="footer-logo" src="../img/connectus.png" width="100px" height="80px">
            <div class="footer-info">
                <span class="footer-info-top">Connectus Pizza Singapore</span><br>
                <span class="footer-info-bottom">6362 8890</span>
            </div>
        </div>

        <table width=30% class="footer-table">
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
