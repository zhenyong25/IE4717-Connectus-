

<!DOCTYPE html>

<html>
<head>
    <title>Connectus</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/rewards.css">
    <script type="text/javascript" src="./JS/index.js"></script>
    <style>
        .rewards{
            color:#0094FF ; 
            background-color: white;
        }

        .rewards_vouchers{
            color: white; 
            background-color: #0094FF;
        }
    </style>
</head>

<body>
    <header>
        <div class="nav-content">
            <li><img class ="nav-bar-logo" src="./img/connectus.png" height="100px" width="150px"></li>
            <li><a class="nav-bar-content" href="index.html">Home</a></li> 
            <li><a class="nav-bar-content" href="menu.html">Menu</a></li> 
            <li><a class="nav-bar-content" href="./rewards-page/points.html">Rewards</a></li>
            <li><a class="nav-bar-content" href="locate.html">Locate Us</a></li>
            <li>
                <a href="login.html" id="login">
                    <img class="user-icon" src="./img/user-icon.png" height="20px" width="20px">
                Login</a>
            </li>
        </div>
    </header>

    <!-- Points  -->
    <div class="points">
        <span>706</span>
        <span>Connectus Points</span><br>
        <div class="progress-bar"></div>
        <p>Get XXX more points by 31 Dec 2022 to maintain gold</p>
        <div class="tier_benefits"><a  class="tier_benefits" href="">View Tier Benefits</a></div>
    </div>



    <div class="redeem-types">
        <a href="rewards.html" class="rewards">Redeem Points</a>
        <a href="rewards-voucher.html" class="rewards_vouchers">Redeem Vouchers</a>
    </div>

    <div class="product_code">
        <p class="product-code-header">Enter your product code here</p>
        <form action="./php/voucher_code.php" method="post">
            <input class="voucher_code" type="text" height="50px" width="100px">
            <input class="redeem_voucher_code" type="submit" value="Redeem">
        </form>
    </div>

    <div class="all-vouchers"> 
        <div class="pizza">
            <img src="./img/voucher_regular_pizza.jpg">
            <input class="redeem-button" type="submit" value="Redeem"> 
        </div>
        <div class="pizza">
            <img src="./img/voucher_large_pizza.jpg">
            <input class="redeem-button" type="submit" value="Redeem">
        </div>
        <div class="pizza">
            <img src="./img/voucher_extra_large_pizza.jpg">
            <input class="redeem-button" type="submit" value="Redeem"> 
        </div>
    </div>
</body>

</html>