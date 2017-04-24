<?php

$hostname = 'localhost';
$username = 'trollo';
$password = 'trollo';
$dbname = 'trollo';

$db = new PDO(sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $hostname, $dbname), $username, $password);
