<?php

require_once __DIR__.'/../Database/Connection.php';

function findAllCards() {
    $connection = getDatabaseConnection();
    $sql = 'SELECT * FROM card';

    return $connection->query($sql);
}
