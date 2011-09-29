<?php

require_once "db.class.php";

class itemDeConsumo {
	
	private $id;
	private $descricao;
	private $valor;
	
	
	// Funções acessoras
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = (int)$id;
	}
	
	public function getDescricao() {
		return $this->descricao;
	}
	
	public function setDescricao($descricao) {
		$this->descricao = trim($descricao);
	}
	
	public function getValor() {
		return (float)$this->valor;
	}
	
	public function setValor($valor) {
		$this->valor = (float)$valor;
	}
	
	public function criar($id, $descricao, $valor) {
		
		$db = new db();
		$sql = <<<SQL
			INSERT INTO item_de_consumo (id, descricao, valor)
			VALUES ($id, '$descricao', $valor)
SQL;
		$result = $db->query($sql);
		return $result;
	}
	
	// Funções de busca
	public function buscarPorId($id) {
		
		$db = new db();
		$sql = "SELECT * FROM item_de_consumo WHERE ID = $id";
		$item = $db->query($sql)->fetch_object();
		
		$this->setId($item->id);
		$this->setDescricao($item->descricao);
		$this->setValor($item->valor);
	}
}