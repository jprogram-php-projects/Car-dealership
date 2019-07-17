<?php
	require_once "Veiculos.php";

	class Caminhao extends Veiculos{
		public $id, $nome;

		public function __construct(){
			$this->id = 3;
			$this->nome = "Caminhao";
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}
	}
?>