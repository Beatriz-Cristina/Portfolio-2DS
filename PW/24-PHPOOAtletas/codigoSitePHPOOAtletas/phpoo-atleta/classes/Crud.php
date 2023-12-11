<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;

	abstract public function insert();
	abstract public function update($id_atleta);

	public function find($id_atleta){
		$sql  = "SELECT * FROM $this->table WHERE id_atleta = :id_atleta";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_atleta', $id_atleta, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_atleta){
		$sql  = "DELETE FROM $this->table WHERE id_atleta = :id_atleta";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_atleta', $id_atleta, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}