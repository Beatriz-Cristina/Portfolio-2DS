<?php

require_once 'Crud.php';

class atletas extends Crud{
	
	protected $table = 'atletas';
	private $atleta;
	private $peso;
	private $altura;
	private $IMC;
	private $nacionalidade;
	private $modalidade;

	public function setAtleta($atleta){
		$this->atleta = $atleta;
	}

	public function getAtleta(){
		return $this->atleta;
	}

	public function setPeso($peso){
		$this->peso = $peso;
	}

	public function getPeso(){
		return $this->peso;
	}
	
	public function setAltura($altura){
		$this->altura = $altura;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setIMC($IMC){
		$this->IMC = $IMC;
	}

	public function getIMC(){
		return $this->IMC;
	}
	
	public function setNacionalidade($nacionalidade){
		$this->nacionalidade = $nacionalidade;
	}

	public function getNacionalidade(){
		return $this->nacionalidade;
	}
	
	public function setModalidade($modalidade){
		$this->modalidade = $modalidade;
	}

	public function getModalidade(){
		return $this->modalidade;
	}
	
	public function insert(){

		$sql  = "INSERT INTO $this->table (atleta, peso, altura, IMC , nacionalidade, modalidade) VALUES (:atleta, :peso, :altura, :IMC , :nacionalidade, :modalidade)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':atleta', $this->atleta);
		$stmt->bindParam(':peso', $this->peso);
		$stmt->bindParam(':altura', $this->altura);
		$stmt->bindParam(':IMC', $this->IMC);
		$stmt->bindParam(':nacionalidade', $this->nacionalidade);
		$stmt->bindParam(':modalidade', $this->modalidade);
		return $stmt->execute(); 

	}

	public function update($id_atleta){

		$sql  = "UPDATE $this->table SET atleta = :atleta, peso = :peso, altura = :altura, IMC = :IMC, nacionalidade = :nacionalidade, modalidade  = :modalidade WHERE id_atleta = :id_atleta";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':atleta', $this->atleta);
		$stmt->bindParam(':peso', $this->peso);
		$stmt->bindParam(':id_atleta', $id_atleta);
		$stmt->bindParam(':altura', $this->altura);
		$stmt->bindParam(':IMC', $this->IMC);
		$stmt->bindParam(':nacionalidade', $this->nacionalidade);
		$stmt->bindParam(':modalidade', $this->modalidade);
		return $stmt->execute();

	}

}