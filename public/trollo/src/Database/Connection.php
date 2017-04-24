<?php

$hostname = 'localhost';
$username = 'trollo';
$password = 'trollo';

try {
    $db = new PDO('mysql:host=$hostname;dbname=trollo;charset=utf8mb4', $username, $password);
    $db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERREUR: ' . $e->getMessage();
}
