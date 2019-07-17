<?php
	require_once "Veiculos.php";

	class Carro extends Veiculos{
		public $id, $nome;

		public function __construct(){
			$this->id = 1;
			$this->nome = "Carro";
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}
	}
?>