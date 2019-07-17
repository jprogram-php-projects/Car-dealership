<?php
	require_once "Veiculos.php";

	class Moto extends Veiculos{
		public $id, $nome;

		public function __construct(){
			$this->id = 2;
			$this->nome = "Moto";
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}
	}
?>