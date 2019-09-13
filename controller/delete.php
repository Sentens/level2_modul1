<?php
$db = include '../model/start.php';

//Принимаем из формы create новый тайтл и вставляем в БД.
$id = 19; // принимаем через гет или пост.
$db->delete("posts", $id);

//Перенаправляем на главную
header ('Location: /');

 ?>