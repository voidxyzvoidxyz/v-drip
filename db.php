<?php
/* Database connection settings */
$host = 'localhost';
$user = 'hashichemnad';
$pass = 'a';
$db = 'vdrip';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$connect = mysqli_connect($host, $user, $pass, $db); 

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>
