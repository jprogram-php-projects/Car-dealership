<?php
	require_once '../model/Veiculos.php';
	require_once '../model/DAO/VeiculoDAO.php';

	class RegisterController{
		private $msg, $veiculo;

		public function __construct($dados){
			$this->veiculo = $dados;		
			$this->checkOption($this->veiculo['tipo_veiculo']);
		}

		private function checkOption($op){
			switch ($op) {
				case '1':
					require_once '../model/Carro.php';
					$carro = new Carro();
					$this->criarVeiculo( $carro);
					break;

				case '2':
					require_once '../model/Moto.php';
					$moto = new Moto();	
					$this->criarVeiculo( $moto );
					break;

				case '3':
					require_once '../model/Caminhao.php';
					$caminhao = new Caminhao();	
					$this->criarVeiculo( $caminhao );
					break;

				case '4':
					require_once '../model/Aviao.php';
					$aviao = new Aviao();
					$this->criarVeiculo( $aviao );
					break;

				case '5':
					require_once '../model/Trem.php';
					$trem = new Trem();
					$this->criarVeiculo( $trem );
					break;	

				default:
					$this->msg = "Erro";
					break;
			}
		}

		private function criarVeiculo($veiculo){
			$veiculo->setTipoVeiculo($veiculo->getId());
			$veiculo->setNomeVeiculo($this->veiculo['nome']);
			$veiculo->setFabricacao($this->veiculo['fabricacao']);
			$veiculo->setMarca($this->veiculo['marca']);
			$veiculo->setPreco($this->veiculo['preco']);
			$veiculo->setStatus($this->veiculo['situacao']);

			$this->RegisterVeiculo($veiculo);
		}

		private function RegisterVeiculo($vei){
			$vDao = new VeiculoDAO();
			$vDao->insertVeiculo($vei);
			$this->msg = "Veiculo Cadastrado com Sucesso!";
			$this->showMessage();
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

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$register = new RegisterController($_POST);
	}
?>