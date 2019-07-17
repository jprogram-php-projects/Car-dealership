<?php
	require_once '../../model/DAO/VeiculoDAO.php';

	class VeiculosController{
		private $msg, $veiculo;

		public function __construct(){	
			$this->listarVeiculos();
		}

		private function listarVeiculos(){	
			$vDao = new VeiculoDAO();
			$result = $vDao->selectTudo();	
			$this->imprimirDados($result);
		}

		private function imprimirDados($result){
			while($rows_veiculos = $result->fetch(PDO::FETCH_OBJ) ){
				echo
					"<br/> Id: " .$rows_veiculos->id.
					"<br/> Tipo Veiculo: " .$rows_veiculos->tipo_veiculo.
					"<br/> Nome: ".$rows_veiculos->nome.
					"<br/> Ano de Fabricacao: ".$rows_veiculos->anoFab.
					"<br/> Marca: ".$rows_veiculos->marca.
					"<br/> Preco: ".$rows_veiculos->preco. 
					"<br/> Status: ".$rows_veiculos->status. "<br/>".
					"<button><a href=Form_Update.php?id=".$rows_veiculos->id.">Editar</a></button>".
					"<button><a href=../../control/Apagar.php?id=".$rows_veiculos->id.">Apagar</a></button>". "<br>"
				;
			}
		}

		private function showMessage(){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../view/pages_adm/page_adm.php'>
					<script type=\"text/javascript\">
						alert(\" $this->msg \");
					</script>
			";
		}

	}
?>