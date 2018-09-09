<?php

//Включние всех ошибок...
error_reporting(E_ALL);

//Подключение фугкции дебага...
require_once '../engine/libs/functions.php';
use engine\base\Router;

//автозагрузка классов...
spl_autoload_register(function ($class) {
    $path = '../' . str_replace('\\','/',$class.'.php');
    if (file_exists($path)){
        require_once $path;
    }
});

session_start();


$router = new Router();
$router->run();

