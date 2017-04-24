<?php


$databaseConnection = null;

function getDatabaseConnection()
{
    $hostname = 'localhost';
    $username = 'trollo';
    $dbname = 'trollo';
    $password = 'trollo';
    global $databaseConnection;

    if (!$databaseConnection) {
        $databaseConnection = new PDO(sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $hostname, $dbname), $username, $password);
    }

    return $databaseConnection;
}
