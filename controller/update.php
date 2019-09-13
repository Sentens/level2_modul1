<?php
$db = include '../model/start.php';

//Принимаем из формы create новый тайтл и вставляем в БД.
$title = $_POST['post_title'];
$db->update("posts", ['title' => $title], '1');

//Перенаправляем на главную
header ('Location: /');

 ?>