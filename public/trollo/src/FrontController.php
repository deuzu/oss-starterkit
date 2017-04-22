<?php

$route = isset($_GET['route']) ? $_GET['route']: 'homepage';
$controllerPath = sprintf('%s/Controller/%sController.php', __DIR__, ucfirst($route));

require_once $controllerPath;
