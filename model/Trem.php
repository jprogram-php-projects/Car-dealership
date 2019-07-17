<?php
	require_once "Veiculos.php";

	class Trem extends Veiculos{
		public $id, $nome;

		public function __construct(){
			$this->id = 5;
			$this->nome = "Trem";
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}
	}
?>