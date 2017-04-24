<?php

require_once __DIR__.'/../Manager/CardManager.php';

$title = htmlspecialchars($_POST['title']);
$description = htmlspecialchars($_POST['description']);

if($title && $description) {
    $result = createCard($title, $description);
    header('Location: /');
}
