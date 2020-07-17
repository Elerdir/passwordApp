<?php

use App\CoreModule\System\Controllers\RouterController;
use DbWork\Db;

session_start();

// Nastavení interního kódování pro funkce pro práci s řetězci
mb_internal_encoding("UTF-8");

require_once('config/Settings.php');

// Regisrace autoloaderu
require('autoloader.php');

// Připojení k databázi
Db::connect(Settings::$db['host'], Settings::$db['user'], Settings::$db['password'], Settings::$db['database']);

// Vytvoření routeru a zpracování parametrů od uživatele z URL
$router = new RouterController();
$router->index(array($_SERVER['REQUEST_URI']));

// Vyrenderování šablony
$router->renderView();