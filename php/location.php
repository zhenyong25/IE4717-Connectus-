<!DOCTYPE html>

<html>
<head>
    <title>Connectus</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/locate.css">
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
            <li>
                <a href="login.html" id="login">
                    <img class="user-icon" src="./img/user-icon.png" height="20px" width="20px">
                Login</a>
            </li>
        <div>
    </header>

    <!-- side-navigation-bar -->

<div class="flex-container">
    <div class="locations">
        <ul>
            <li><a href="">Jurong East</a></li>
            <li><a href="">Jurong West</a></li>
            <li><a href="">Tampines</a></li>
            <li><a href="">Changi</a></li>
            <li><a href="">Redhill</a></li>
            <li><a href="">Boon Lay</a></li>
            <li><a href="">Joo Koon</a></li>
            <li><a href="">Tanjong Pagar</a></li>
            <li><a href="">Kranji</a></li>
            <li><a href="">Holland Village</a></li>
        </ul>
    </div>
    <div class="search-bar">
        <div class="find-me">Find Pizza Near Me</div>

        <form action="./php/location.php" method="get">
            <input class="search-location" type="text" id="textbox" size="40" placeholder="Search by Postal Code or Street Name" height="100px">
            <input class="submit-search-location" type="submit" name="submit" value="Search" height="100px"> 
        </form>

        <?php

            $location = trim($_GET['location']); 

            @$db = new mysqli ('localhost','root','','connectus')

            if (mysqli_connect_errno()){
                echo 'Error: Could not connect to database. Please try again later.'; 
                exit; 
            }

            $query = "select address from locations where ".$location." = locations.location"; 
            $results = $db->query($query); 

            $location_address = $results-> num_rows; 

            echo "<p>$location_address</p>"

            $result->free(); 
            $db->close()

        ?>

	</div>
	<div class="map">
        <div class="view-map">View Map</div>>
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7136383779975!2d103.68094601329543!3d1.3483098990166276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da0f0a99014463%3A0xb8bb0800c52d8219!2sNanyang%20Technological%20University!5e0!3m2!1sen!2ssg!4v1665564415608!5m2!1sen!2ssg" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

</div>

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
</body>
</html>