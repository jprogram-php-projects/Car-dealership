<?php
	require_once "../connection/connect.php";

	class UserDAO{

		public function selectLogin($email){
			$pdo = Connect::getInstance();
			$sql = "SELECT email FROM usuario WHERE email = '$email' LIMIT 1";
			$select = $pdo->query($sql);
			$result = $select->fetch(PDO::FETCH_OBJ);
			return $result;
		}

		public function selectPassword($pass){
			$pdo = Connect::getInstance();
			$sql = "SELECT senha FROM usuario WHERE senha = '$pass' LIMIT 1";
			$select = $pdo->query($sql);
			$result = $select->fetch(PDO::FETCH_OBJ);
			return $result;
		}

		public function selectUser($login, $pass){
			$pdo = Connect::getInstance();
			$sql = "SELECT id, nome FROM usuario WHERE email = '$login' AND senha = '$pass' LIMIT 1";
			$select = $pdo->query($sql);
			$result = $select->fetch(PDO::FETCH_OBJ);
			return $result;
		}
	}
?>