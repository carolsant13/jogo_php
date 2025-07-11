<?php

session_start();

define('CONTROL', true);

$route = $_GET['route'] ?? 'start';


require 'inc/header.php';

switch ($route) {
    case 'start':
        require 'inc/start.php';
        break;

    case 'game':
        require 'inc/game.php';
        break;

    default:
        echo "<h1>Página não encontrada</h1>";
        break;
}

require 'inc/footer.php';
