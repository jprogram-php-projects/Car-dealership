<?php
	class VeiculoDAO{

		public function insertVeiculo($veiculo){
			require_once "../connection/connect.php";

			try{			
				$pdo = Connect::getInstance();
				
				$sql = "INSERT INTO veiculos(tipo_veiculo, nome, anoFab, marca, preco, status) VALUES (?,?,?,?,?,?)";
				
				$stmt= $pdo->prepare($sql);
				
				$stmt->execute(
					[	$veiculo->getTipoVeiculo(), 
						$veiculo->getNomeVeiculo(), 
						$veiculo->getFabricacao(),
						$veiculo->getMarca(),
						$veiculo->getPreco(),
						$veiculo->getStatus()
					]
				);						
			}

			catch(PDOException $e){
				echo $sql . "<br>" . $e->getMessage();
			}

			$pdo = null;
		}

		public function selectTudo(){
			require_once "../../connection/connect.php";

			$pdo = Connect::getInstance();
			
			$sql = "SELECT * FROM veiculos";
			
			$select = $pdo->query($sql);

			return $select;
		}

		public function selectInfoId($id){
			require_once "../../connection/connect.php";

			$pdo = Connect::getInstance();
			
			$sql = "SELECT * FROM veiculos WHERE id = '$id' LIMIT 1";
			
			$select = $pdo->query($sql);

			return $select;
		}

		public function updateVeiculo($v, $id){
			require_once "../connection/connect.php";

			$pdo = Connect::getInstance();

			$tipo = $v->tipo_veiculo;
			$nome = $v->nomeVeiculo;
			$anoFab = $v->anoFab;
			$marca = $v->marca;
			$preco = $v->preco;
			$status = $v->status;
			
			$sql = "UPDATE veiculos SET 
				tipo_veiculo = '$tipo', 
				nome         = '$nome',
				anoFab       = '$anoFab',
				marca        = '$marca',
				preco        = '$preco',
				status       = '$status'
				WHERE id     = $id";

			$stmt = $pdo->exec($sql);	
		}

		public function apagarVeiculo($id){
			require_once "../connection/connect.php";

			$pdo = Connect::getInstance();

			$sql = "DELETE FROM veiculos WHERE id = '$id'";;

			$apaga = $pdo->exec($sql);			
		}
	} 
?>