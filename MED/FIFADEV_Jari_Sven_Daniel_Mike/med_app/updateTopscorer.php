<?php

require 'config/connect.php';
require 'functions.php';
var_dump($_POST);

$id = $_POST['spelerid'];
$doelpunten = $_POST['doelpunten'];

// if (mysqli_query($con, "UPDATE spelers SET doelpunten = '$doelpunten' WHERE id = '$id'")) {
// 	$succes = "Succesvol de doelpunten geupdate";
// 	header("location: addscore.php?msg=$succes");
// } else {
// 	$fail = "Er is iets misgegaan bij het updaten van de doelpunten";
// 	header("location: addscore.php?msg=$fail");
// }

if (! mysqli_query($con, "UPDATE spelers SET doelpunten = '$doelpunten' WHERE id = '$id'")) {
	echo 'query niet doorgevoerd...';
} else {
	$msg = "Topscore succesvol geupdate!";
	header("location: addscore.php?msg=$msg");
}



?>