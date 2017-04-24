<?php

require __DIR__.'/../Repository/CardRepository.php';

$cards = findAllCards();

if (!$cards) {
    $cards = [];
}

require __DIR__.'/../Views/homepage.html.php';
