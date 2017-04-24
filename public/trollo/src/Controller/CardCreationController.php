<?php

require __DIR__.'/../Manager/CardManager.php';

$title = htmlspecialchars($_POST['title'], ENT_NOQUOTES);
$description = htmlspecialchars($_POST['description'], ENT_NOQUOTES);

if(isset($title) && !empty($title) && isset($description) && !empty($description)) {
    $result = createCard($_POST);

    if ($result) {
        // Location
    }
}
