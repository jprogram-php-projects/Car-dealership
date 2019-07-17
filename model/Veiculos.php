<?php
	class Veiculos{
		public $id, $tipo_veiculo, $nomeVeiculo, $anoFab, $marca, $preco, $status; 

		public function getIdVeiculos(){
			return $this->id;
		}

		public function setIdVeiculos($newId){
			$this->id = $newId;
		}	

		public function getTipoVeiculo(){
			return $this->tipo_veiculo;
		}

		public function setTipoVeiculo($newTipo){
			$this->tipo_veiculo = $newTipo;
		}	

		public function getNomeVeiculo(){
			return $this->nomeVeiculo;
		}

		public function setNomeVeiculo($newNome){
			$this->nomeVeiculo = $newNome;
		}

		public function getFabricacao(){
			return $this->anoFab;
		}

		public function setFabricacao($newFab){
			$this->anoFab = $newFab;
		}

		public function getMarca(){
			return $this->marca;
		}

		public function setMarca($newMarca){
			$this->marca = $newMarca;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function setPreco($newPreco){
			$this->preco = $newPreco;
		}

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($newStatus){
			$this->status = $newStatus;
		}
	}

?>