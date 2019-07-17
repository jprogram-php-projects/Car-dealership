<?php
	require_once "Veiculos.php";

	class Aviao extends Veiculos{
		public $id, $nome;

		public function __construct(){
			$this->id = 4;
			$this->nome = "Aviao";
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}
	}
?>