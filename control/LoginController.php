<?php
	require "../model/User.php";
	require "../model/DAO/UserDAO.php";

	class LoginController{
		private $user, $msg, $userDAO;

		public function __construct($dados){
			$this->user = new User();
			$this->userDAO = new UserDAO();

			$this->user->setLogin($dados['login']);
			$this->user->setPassword($dados['senha']);

			$this->checkLogin();
		}

		private function checkLogin(){
			$login = $this->userDAO->selectLogin( $this->user->getLogin() );

			if(isset($login->email)){
				$this->checkPassword();
			}
			
			else{
				$this->msg = " Campo Login Incorreto, preencha corretamente! ";
				$this->showMessage();
			}
		}

		private function checkPassword(){
			$password = $this->userDAO->selectPassword( $this->user->getPassword() );

			if(isset($password->senha)){
				$this->infoRestante();
				$this->createSession();
			}
			
			else{
				$this->msg = " Campo Senha Incorreto, preencha corretamente! ";
				$this->showMessage();
			}
		}

		private function infoRestante(){
			$obj = $this->userDAO->selectUser( $this->user->getLogin(), $this->user->getPassword() );

			$this->user->setName($obj->nome);
			$this->user->setId($obj->id);
		}

		private function createSession(){
			session_start();

			$_SESSION['id'] = $this->user->getId();
			$_SESSION['nome'] = $this->user->getName();
			$_SESSION['login'] = $this->user->getLogin();
			$_SESSION['password'] = $this->user->getPassword();

			header("LOCATION: ../view/pages_adm/page_adm.php");
		}

		private function showMessage(){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../view/index.html'>
					<script type=\"text/javascript\">
						alert(\" $this->msg \");
					</script>
			";
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$login = new LoginController($_POST);
	}
?>