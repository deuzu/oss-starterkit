<?php

require_once __DIR__.'/../Database/Connection.php';

function createCard($title, $description)
{
    $databaseConnection = getDatabaseConnection();
    $date = new DateTime();
    $formatedDate = $date->format('Y-m-d H:i:s');
    $sql = "INSERT INTO card (title, description, created_at, user_id) VALUES (:title, :description, :created_at, 1)";

    $stmt = $databaseConnection->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':created_at', $formatedDate);

    return $stmt->execute();
}

function deleteCard($id)
{
    $databaseConnection = getDatabaseConnection();
    $sql = "DELETE FROM card WHERE id=:id";
    $stmt = $databaseConnection->prepare($sql);
    $stmt->bindParam(':id', $id);

    return $stmt->execute();
}
