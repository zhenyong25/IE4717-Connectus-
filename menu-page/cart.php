<?php  //cart.php
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
    <script type="text/javascript" src="../JS/index.js"></script>
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
		$prices = array(15.00, 20.00, 6.00, 4.00,2.00,2.00);
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
	<form id="order-form" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">>
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
<p><a href="../menu.php">Continue Shopping</a> or
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a> or
<a href="./payment.php">Order Now</a>
</p>
</form>
</body>
</html>