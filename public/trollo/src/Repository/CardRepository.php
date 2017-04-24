<?php

require_once('../Database/Connection.php');

function insertCard($title, $description) {
    //
}

function deleteCard($id) {

    $sql = "DELETE FROM card WHERE id=$id";
    $conn->query($sql);
    return $conn;

}
