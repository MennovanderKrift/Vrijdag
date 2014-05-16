<?php
/**
 * DstylezProductions
 * Date: 4/18/14
 * Time: 3:45 PM
 */
$database = new mysqli('mysql1025.servage.net','rickverheijen','RickVerheijen1','rickverheijen');
/** vergeet niet je wachtwoord te veranderen*/
if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$con = new mysqli('mysql1025.servage.net','rickverheijen','RickVerheijen1','rickverheijen');
if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
