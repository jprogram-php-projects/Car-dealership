<?php
	session_start();

	class Logout{
		public function __construct(){
			if(isset($_SESSION['login'] )){
				$this->destroySession();
				$this->showMessage();
			}
		}

		private function destroySession(){
			unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['login'], $_SESSION['senha']);
		}

		private function showMessage(){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../view/index.html'>
					<script type=\"text/javascript\">
						alert(\"Deslogado com sucesso!!\");
					</script>
			";			
		}
	}

	$leave = new Logout();	
?>