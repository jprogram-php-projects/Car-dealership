<?php
	class AdmController{
		public function __construct($opcao){
			$this->verificaOpcoes($opcao);
		}

		public function verificaOpcoes($opcoes){
			switch ($opcoes) {
				case '1':
					header("LOCATION: ../view/pages_adm/Register.php");
					break;

				case '2':
					header("LOCATION: ../view/pages_adm/Lista_Veiculos.php");
					break;	

				
				default:
					echo "string";
					break;
			}
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "GET"){
		$acao = new AdmController($_GET['action']);
	}

?>