<?php
if(isset($_POST['Submit'])){
    if(empty($_POST['title'])){
        echo "je bent de title vergeten";
    }
    if(empty($_POST['bericht'])){
        echo "Je bent het bericht vergeten";
    } else {
        include '../include/config.php';
        $title = $_POST['title'];
        $bericht = $_POST['bericht'];
        $query = $database->query("INSERT INTO nieuws(id, title, bericht) VALUES (NULL, '$title', '$bericht')") or die ('Unable to execute query. '. mysql_error());
        header('Location: nieuws.php');
    }
}
?>