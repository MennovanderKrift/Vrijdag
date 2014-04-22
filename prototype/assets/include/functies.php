<?php
function LatestNieuws(){
    include 'config.php';
    if($query = $database->query("SELECT * FROM nieuws ORDER BY id DESC")){
        while($result = $query->fetch_assoc()){
            printf('<div class="topic">');
            echo "<h2>" . $result['title'] . "</h2>";
            echo $result['bericht'];
            echo "</div>";
        }
        if (!$database->query("SET @a:='this will not work'")) {
            printf("Error: %s\n", $database->error);
        }
        $query->close();
    }
    $database->close();
}

function delete(){
    include 'config.php';
    if($query = $database->query("SELECT * FROM nieuws ORDER BY id DESC")){
        while($result = $query->fetch_assoc()){
            printf('<div class="topic">');
            echo "<a href='delete.php?id={$result["id"]}'> <img src='../../assets/img/kruis.png' alt='Delete' style='float: right;' /> </a>";
            echo "<h2>" . $result['title'] . "</h2>";
            echo $result['bericht'];
            echo "<br>";

            echo "</div>";
        }

        $query->close();
    }
    $database->close();
}

function nowPlaying() {
    include 'config.php';
    if($query = $database->query("SELECT * FROM poulewedstrijden WHERE nowplaying = 1")){
        while($result = $query->fetch_assoc()){
            echo $result['slot_1'] . ' VS ' . $result['slot_2'] . '<br>';
            echo $result['goals_slot_1'] . ' - ' . $result['goals_slot_2'];
        }
    }
}
?>