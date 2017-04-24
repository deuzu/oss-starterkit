<?php

require_once('../Database/Connection.php');

/**
 * Create a trollo card. 
 */
function create($title, $description, $date) {
    $stmt = $db->prepare("INSERT INTO card (title, description, created_at) VALUES (:title, :description, :created_at)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':created_at', $date);
    $stm->execute();
}
