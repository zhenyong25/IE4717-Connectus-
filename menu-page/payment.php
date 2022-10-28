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
	<form id="order-form" action="./order-successful.php" method="POST">
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

	    <table border="0" style = "width:40%">
      <tr>
        <td>Name</td>
         <td><input type="text" name="name" id="name" maxlength="13" size="15" onchange="validateName()"></td>
      </tr>
	  <tr>
        <td>Email</td>
         <td><input type="text" name="email" id="email" maxlength="50" size="15" onchange="validateEmail()"></td>
      </tr>
      <tr>
        <td>Credit Card Number</td>
        <td> <input type="text" name="credit_card_number" id="credit_card_number" maxlength="30" size="30" onchange="validatecreditcard()"></td>
      </tr>
      <tr>
        <td>CVV</td>
        <td> <input type="text" name="cvv" id="cvv" maxlength="60" size="15" onchange="validatecreditcard()"></td>
      </tr>
    </table>
	
<?php
$db = new mysqli('localhost', 'root', '', 'connectus_1');

// Check connection
if ($db->connect_errno) {
	echo 'Error: Could not connect to database. Please try again later.';
	exit();
}
	// This is to connect to connectus_1 -> sales
    if (isset($_POST['submit'])){
		$peperroni_pizza = 0;
		$mushroom_pizza = 0;
		$french_fries = 0;
		$coleslaw = 0;
		$green_tea = 0;
		$coke = 0;
		for ($i=0; $i < count($_SESSION['cart']); $i++){
		if(($items[$_SESSION['cart'][$i]])==('Pepperoni Pizza')){
			$peperroni_pizza++;
		}
		elseif(($items[$_SESSION['cart'][$i]])==('Mushroom Pizza')){
			$mushroom_pizza++;
		}
		elseif(($items[$_SESSION['cart'][$i]])==('French Fries')){
			$french_fries++;
		}
		elseif(($items[$_SESSION['cart'][$i]])==('Coleslaw')){
			$coleslaw++;
		}
		elseif(($items[$_SESSION['cart'][$i]])==('Green Tea')){
			$green_tea++;
		}
		elseif(($items[$_SESSION['cart'][$i]])==('Cola')){
			$coke++;
		}
		
		if ($i == ((count($_SESSION['cart']))-1)){
			$query = "INSERT INTO sales(id, peperroni_pizza	, mushroom_pizza,french_fries, coleslaw, green_tea, coke, total) VALUES('whatever',?,?,?,?,?,?,?)";
			$stmt = $db->prepare($query);
			$stmt->bind_param("iiiiiii",$peperroni_pizza, $mushroom_pizza,$french_fries,$coleslaw,$green_tea,$coke, $total);
			$stmt->execute();
		}
		}
		
		//send customer particular to database particulars
		$name = $_POST['name'];
		$email=$_POST['email'];
		$credit_card_number = $_POST['credit_card_number'];
		$cvv = $_POST['cvv'];
		$query_2 = "INSERT INTO particulars(id, name, email, credit_card_number, cvv) VALUES('whatever',?,?,?,?)";
		$stmt = $db->prepare($query_2);
		$stmt->bind_param("ssii",$name,$email, $credit_card_number,$cvv);
		$stmt->execute();
		
		
		//$query_3 = "SELECT * FROM sales WHERE id = (SELECT MAX(id) FROM sales)";
		//$id = $db->query($query_3)->insert_id;
		$id = mysqli_insert_id($db);
		$to      = 'f32ee@localhost';
		$subject = 'Sucessful order from Connect us';
		$message = "Good day, Your order is sucessful! Booking reference is {$id}.Your food will arrive in 20-30 minutes. Thank you for the continued support!" ;
		$headers = 'From: f32ee@localhost' . "\r\n" .
		'Reply-To: f32ee@localhost' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers,'-ff32ee@localhost');
		
		unset($_SESSION['cart']);
		header('location: ' . $_SERVER['PHP_SELF']);
		exit();
	}
	  $db->close();
?>
	
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Cancel order</a> or
<!--<a href="./order-successful.php"><button type='submit' name='submit' onclick="myfunction()" id='submit'>Submit Order</button></a> -->

<input type='submit' name='submit'> 
</p>
</form>
</body>
</html>
