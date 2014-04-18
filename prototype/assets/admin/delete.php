<?php
include "../include/config.php";
$id = $_GET['id'];
$database->query("DELETE FROM nieuws WHERE id = {$id}");
header('Location: nieuws.php');
?>