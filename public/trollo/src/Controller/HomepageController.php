<?php

require __DIR__.'/../Repository/CardRepository.php';

$cards = findAllCards();

require __DIR__.'/../Views/homepage.html.php';
