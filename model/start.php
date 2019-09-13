<?php 
include 'config/config.php';
include '../model/connection.php';
include '../model/QueryBuilder.php';

return new QueryBuilder(Connection::make($config));

?>