<?php

$hostname = 'localhost';
$username = 'trollo';
$dbname = 'trollo';
$password = 'trollo';
$databaseConnection = null;

function getDatabaseConnection() {
    if (!$databseConnection) {
        $databaseConnection = new PDO(sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $hostname, $dbname), $username, $password);
    }

    return $databaseConnection;
}
