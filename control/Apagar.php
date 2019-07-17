<?php
	require_once '../model/DAO/VeiculoDAO.php';

	class Apagar{
		private $id;

		public function __construct($dado){
			$this->id = $dado;
			$vDao = new VeiculoDAO();
			$vDao->apagarVeiculo($this->id);
			$this->showMessage();
		}

		private function showMessage(){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../view/pages_adm/page_adm.php'>
					<script type=\"text/javascript\">
						alert(\" Veiculo Apagado com Sucesso \");
					</script>
			";
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "GET"){
		$delete = new Apagar($_GET['id']);
	}
	
?>