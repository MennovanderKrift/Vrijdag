<?php

/*
try {
$con = new PDO('mysql:host=localhost;dbname=fifadev', 'root', '1234');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'error: ' . $e->getMessage();
*/

$con = mysqli_connect('localhost', 'USERNAME', 'PASSWORD', 'fifadev') or die('Error :' . mysqli_error($con));






?>