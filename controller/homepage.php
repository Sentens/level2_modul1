<?php 
$db = include '../model/start.php';
$posts = $db->getAll("posts");
include '../view/homepage.view.php';

?>