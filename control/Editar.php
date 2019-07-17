<?php
	class Editar{
		private $id;

		public function __construct($dado){
			$this->id = $dado;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($newId){
			$this->id = $newId;
		}

		public function obterVeiculo(){
			require_once '../../model/DAO/VeiculoDAO.php';
			$vDao = new VeiculoDAO();
			$result = $vDao->selectInfoId($this->id);
			$rows_veiculos = $result->fetch(PDO::FETCH_OBJ);
			return $rows_veiculos;
		}
	}
?>