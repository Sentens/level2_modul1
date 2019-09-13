<?php 
$db = include '../model/start.php';
$post = $db->getOne("posts", '1');
include '../view/edit.view.php';
 ?>