<?php
include 'assets/include/functies.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vrijdag's super gave en ultra deluxe wedstrijd statistieken!</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
</head>

<body>
<div id="container">
    <nav>
        <a href ="index.php"><img src="assets/img/vrijdag-logo.png" alt="Vrijdag logo" /></a>
        <ul>
            <li><a href="livestream.php">Livestream</a></li>
            <li><a href="nieuws.php">Laatste Nieuws</a></li>
            <li><a href="resultaten.php">Resultaten</a></li>
            <li><a href="Topscorders.php">Topscorders</a></li>
            <li><a href="Register.php">Register</a></li>
            <!--<li><a href="#">Login</a></li>-->
            <li><a href="Score.php">Score</a></li>
            <li><a href="APO.php">APO</a> </li>
        </ul>
        <div class="clear"></div>
        <hr>
    </nav>

    <div id="nieuws">
    <?php LatestNieuws(); ?>
    </div>
    <div class="clear">
        <span class="copyright">Copyright &copy; Unicorn B.V.</span>
    </div>
</div>

</body>

</html>