<?php
$db = include '../model/start.php';

//Принимаем из формы create новый тайтл и вставляем в БД.
$title = $_POST['post_title'];
$db->create("posts",['title' => $title]);

//Перенаправляем на главную
header ('Location: /');

 ?>