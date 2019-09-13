<?php 
class Connection
{
	public static function make($config){
		$pdo = new PDO("mysql:host={$config['connection']};dbname={$config['database']};charset={$config['charset']};", "{$config['username']}", "{$config['password']}");
		return $pdo;
	}
}
 ?>