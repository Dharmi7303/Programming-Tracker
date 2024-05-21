<?php

$server = "localhost:3333";
$user = "root";
$password = "";
$db = "progtrack";

$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password, $options);
} catch(PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}

?>
