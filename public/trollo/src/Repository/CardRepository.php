<?php

require_once('../Database/Connection.php');

function insertCard($title, $description) {
    //
}

function deleteCard($id) {

    $sql = "DELETE FROM card WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Carte supprimée";
    } else {
        echo "Erreur : carte non supprimée : " . $conn->error;
    }
}
