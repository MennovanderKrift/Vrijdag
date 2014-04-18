<!DOCTYPE html>
<html>
<head>
    <title>Vrijdag's super gave en ultra deluxe wedstrijd statistieken!</title>
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <script src="tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
</head>

<body>
<div id="container">
    <nav>
        <a href ="index.php"><img src="../../assets/img/vrijdag-logo.png" alt="Vrijdag logo" /></a>
        <ul>
            <li><a href="addnieuws.php">Add Nieuws</a></li>
            <li><a href="nieuws.php">Laatste Nieuws</a></li>
            <li><a href="#">Resultaten</a></li>
            <li><a href="#">Topscorders</a></li>
            <li><a href="#">Register</a></li>
            <!--<li><a href="#">Login</a></li>-->
            <li><a href="#">Score</a></li>
            <li><a href="#">APO</a> </li>
        </ul>
        <div class="clear"></div>
        <hr>
    </nav>

    <div id="nieuws">
        <form method="post" action="toegevoegd.php">
            <h2 style="text-align: left;">Title:</h2> <br><input class="title" type="text" name="title" id="title" placeholder="Verzin een leuke title :)"/><br>
            <h2 style="text-align: left">Bericht:</h2> <br><textarea style="width: 600px; height: 400px" name="bericht" placeholder="Het bericht bijv. Rick heeft een goal gemaakt"></textarea><br>
            <input class="add" type="submit" name="Submit" value="Voeg Bericht toe"/>
        </form>
    </div>
    <div class="clear">
        <span class="copyright">Copyright &copy; Unicorn B.V.</span>
    </div>
</div>

</body>

</html>