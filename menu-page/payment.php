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
$db = new mysqli('localhost', 'root', '', 'connectus');

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

<h1 class="shopping">Payment Details</h1>	

<form action="order-successful.php" method="POST">
<table class="payment-table" style = "width:40%">
      <tr>
        <td>Name</td>
         <td><input type="text" class="payment-details" name="name" id="name" maxlength="13" size="15" onchange="validateName()" required></td>
      </tr>
	  <tr>
        <td>Email</td>
         <td><input type="text" class="payment-details" name="email" id="email" maxlength="50" size="15" onchange="validateEmail()" required></td>
      </tr>
      <tr>
        <td>Credit Card Number</td>
        <td> <input type="text" class="payment-details" name="credit_card_number" id="credit_card_number" maxlength="30" size="30" onchange="validatecreditcard()" required></td>
      </tr>
      <tr>
        <td>CVV</td>
        <td> <input type="text" class="payment-details" name="cvv" id="cvv" maxlength="60" size="15" onchange="validatecreditcard()" required></td>
      </tr>
</table>
	
<?php
$db = new mysqli('localhost', 'root', '', 'connectus');

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

<div class="next-step">
	<div class="next-step-content">
		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Cancel Order</a>
	</div> 
	<!--<a href="./order-successful.php"><button type='submit' name='submit' onclick="myfunction()" id='submit'>Submit Order</button></a> -->
	<div class="next-step-content">
		<input class="next-step-content" type='submit' value="Proceed Payment"></p>
	</div> 
</div>
</form>
</body>
</html>
