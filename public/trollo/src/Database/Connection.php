<?php

$hostname = 'localhost';
$username = 'trollo';
$password = 'trollo';
$dbname = 'trollo';
try {
    $db = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8mb4', $username, $password);
    $db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'ça marche';
} catch (PDOException $e) {
    echo 'ERREUR: ' . $e->getMessage();
}
