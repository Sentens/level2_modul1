<?php 

class QueryBuilder{

	protected $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function getAll($table){
		$sql = "SELECT * FROM {$table}";
		$statemant = $this->pdo->prepare($sql);
		$statemant->execute();
		$posts = $statemant->fetchAll(PDO::FETCH_ASSOC);
		return $posts;
	}


	public function getOne($table, $id){
		$sql = "SELECT * FROM {$table} WHERE id = :id";
		$statemant = $this->pdo->prepare($sql);
		$statemant->execute(['id' => $id]);
		$post = $statemant->fetch();
		return $post;
	}

	public function create($table, $data){

		$keys = implode(', ', array_keys($data));
		$key_tags = ':'. implode(', :', array_keys($data)).'';

		$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$key_tags})";
		$statemant = $this->pdo->prepare($sql);
		$statemant->execute($data);
		return $posts;
	}


	public function update($table, $data, $id){

		$keys = array_keys($data);
		$str  = '';

		foreach ($keys as $key) {
			$str .= $key.' = :'.$key.', ';
		}

		$str = rtrim($str, ', ');
		$data['id'] = $id;
		$sql = "UPDATE posts SET {$str} WHERE id = :id";
		$statemant = $this->pdo->prepare($sql);
		$statemant->execute($data);
		return $posts;
	}


	public function delete($table, $id){
		$sql = "DELETE FROM {$table} WHERE id = :id";
		$statemant = $this->pdo->prepare($sql);
		$statemant->execute(['id' => $id]);
	}


}


?>