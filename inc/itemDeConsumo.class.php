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
	
	
	// Funções de busca
	public function buscarPorId($id) {
		
		$db = new db();
		$item = $db->query("SELECT * FROM item_de_consumo WHERE ID = $id")->fetch_object();
		
		$this->setId($item->id);
		$this->setDescricao($item->descricao);
		$this->setValor($item->valor);
	}
}