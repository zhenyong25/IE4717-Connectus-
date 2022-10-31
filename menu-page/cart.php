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

if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
$db = new mysqli('localhost', 'root', '', 'connectus_1');

// Check connection
if ($db->connect_errno) {
	echo 'Error: Could not connect to database. Please try again later.';
	exit();
}

// Get the latest prices
$getPrices = 'SELECT * FROM prices';
$prices = $db->query($getPrices)->fetch_object();
$peperroni_pizza_price= $prices->peperroni_pizza;
$mushroom_pizza_price= $prices->mushroom_pizza;
$french_fries_price= $prices->french_fries;
$coleslaw_price= $prices->coleslaw;
$cola_price= $prices->coke;
$green_tea_price= $prices->green_tea;

$db->close();
?>
<html>
<head>
    <title>Connectus</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">

	<style>table{margin: 0px; border:0px solid #000066; width:80%; margin-left: auto;
  margin-right: auto;}
	td{padding: 20px;}</style>
    <script type="text/javascript" src="./JS/index.js"></script>
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

<body>
<h1>Your Shopping Cart </h1>
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
<table border="1">
	<thead>
	<tr>
		<th>Item</th>
		<th>Item Description</th>
		<th>Price</th>
		
	</tr>
	</thead>
	<tbody>
	<form id="order-form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<?php
$total = 0;
for ($i=0; $i < count($_SESSION['cart']); $i++){
	$j = $i + 1;
	echo "<tr>";
	echo "<td align='center'>$j</td>";
	echo "<td align='center'>" .$items[$_SESSION['cart'][$i]]. "</td>";
	echo "<td align='center'>$";
	echo number_format($prices[$_SESSION['cart'][$i]], 2). "</td>";
	echo "</tr>";
	$total = $total + $prices[$_SESSION['cart'][$i]];
}
?>
	</tbody>
	<tfoot>
	<tr>
	
		<th align ='right'></th>
		<th align='right'>Total:</th><br>
		<th align='center'>$<?php echo number_format($total, 2); ?>
		</th>
	</tr>
	</tfoot>
</table>
<br>
<br>
<p style="text-align:center"><a href="../menu.php">Continue Shopping</a> or
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a> or
<a href="./payment.php">Order Now</a>
</p>
</form>

</body>

</html>