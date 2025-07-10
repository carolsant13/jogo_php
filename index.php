<?php

session_start();

define('CONTROL', true);

$route = $_GET ['route'] ?? 'start';

$script = null;

switch($route){
    case 'start':
        $script = 'start.php';
        break;
    case 'game':
        $script = 'game.php';
        break;
    case 'end':
        $script = 'end.php';
        break;
    default:
        $script = '404.php';
        break;
}

//view

require 'inc/header.php';
require 'inc/start.php';
require 'inc/game.php';
require 'inc/footer.php';