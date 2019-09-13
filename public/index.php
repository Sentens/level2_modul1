<?php
include '../model/functions.php';
//Подключам список маршрутов
$routes_list = include '../router/routes-list.php';

//Подключаем маршрутизатор
include '../router/router.php';

//Проверяем маршрут
$router = new Router($routes_list);
$router->checkRote($_SERVER['REQUEST_URI']);


?>