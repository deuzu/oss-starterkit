<?php

$hostname = 'localhost';
$username = 'trollo';
$password = 'trollo';
$dbname = 'trollo';
try {
    $db = new PDO(sprintf('mysql:host='%s';dbname='%s';charset=utf8mb4', $hostname, $dbname) $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'ça marche';
} catch (PDOException $e) {
    echo 'ERREUR: ' . $e->getMessage();
}
