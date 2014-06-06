<?php
require_once 'config/connect.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>finale</title>
    <link rel="stylesheet" href="http://bootswatch.com/journal/bootstrap.min.css">
    <link rel="stylesheet" href="applicatie-prototype/assets/css/style.css" />
</head>
<body>
<div class="page-header">
    <h1>Finale poule</h1>
</div>
<div class="container">
    <?php

/*
 * als alle wedstijden zijn gespeeld
 * beste 4 teams van elke poule gaan door
 * die worden ingedeeld en de winnaar gaan door naar de volgende ronde
 *
 */

    if ( isset($_POST['addscore']) && (!empty($_POST['winnaar']) OR !empty($_POST['gelijk'])) && isset($_POST['submit']) ) {

    $score_slot_1 = mysqli_real_escape_string($con, trim($_POST['score1']));
    $score_slot_2 = mysqli_real_escape_string($con, trim($_POST['score2']));
    $winnaar = mysqli_real_escape_string($con, trim($_POST['winnaar']));


    if (empty($_POST['gelijk'])) {
        $gelijk = '0';
    } else {
        $gelijk = '1';
    }

    $wedstrijdnr = stripslashes($_GET['id']);

    $sql = "UPDATE poulewedstrijden SET goals_slot_1='$score_slot_1', goals_slot_2='$score_slot_2', winnaar = '$winnaar', gelijk = '$gelijk' WHERE wedstrijdnr = '$wedstrijdnr'";

    if ( !mysqli_query($con, $sql) ) {
        echo 'score niet toegevoegd aan database';
    }




    // zet kolommen in team gelijk aan de resultaten uit de wedstrijdpoule
    $sql = "UPDATE teams SET gewonnen = (SELECT count(winnaar) FROM poulewedstrijden WHERE winnaar = teams.naam)";
    $query = mysqli_query($con, $sql) or die(mysqli_error($con));




    // zet kolommen in team gelijk aan de resultaten uit de wedstrijdpoule
    $sql = "UPDATE  `teams` SET  `gelijk` = ( SELECT SUM(  `gelijk` )
FROM  `poulewedstrijden`
JOIN  `team-poulewedstrijd` ON  `team-poulewedstrijd`.`poulewedstrijd_id` =  `poulewedstrijden`.`wedstrijdnr`
WHERE  `team-poulewedstrijd`.`team_id` =  `teams`.`id` )";
    $query = mysqli_query($con, $sql);


}
    ?>
</div>



<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>