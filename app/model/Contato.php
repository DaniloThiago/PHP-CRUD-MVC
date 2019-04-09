<?php
namespace app\model;
use app\core\Model;

class Contato extends Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function findAll()
	{
		$sql = "SELECT * FROM contato ORDER BY id;";
		$query = $this->connection->query($sql);
		return $query->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function find($id)
	{
		$resultado = array();
		$sql = "SELECT * from contato
		WHERE id = :id";
		$query = $this->connection->prepare($sql);
		$query->bindValue(":id", $id);
		$query->execute();
		
		if($query->rowCount()) {
			$resultado = $query->fetch(\PDO::FETCH_ASSOC);
		} 
		return $resultado;
	}

	public function insert($nome, $tel)
	{
		$sql = "INSERT INTO contato(nome, telefone)
			VALUES (:nome, :tel);";
			$query = $this->connection->prepare($sql);
			$query->bindValue(":nome", $nome);
			$query->bindValue(":tel", $tel);
			$query->execute();
			return $this->connection->lastInsertId();
	}

	public function edit($id, $nome, $tel)
	{
		$sql = "UPDATE contato
		SET nome=:nome, telefone=:tel
		WHERE id=:id;";

		$query = $this->connection->prepare($sql);
		$query->bindValue(":id", $id);
		$query->bindValue(":nome", $nome);
		$query->bindValue(":tel", $tel);
		$query->execute();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM contato
		WHERE id=:id;";
		$query = $this->connection->prepare($sql);
		$query->bindValue(":id", $id);
		$query->execute();
	}
}