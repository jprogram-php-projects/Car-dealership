<?php
	class User{
		private $id, $name, $login, $password;

		public function getId(){
			return $this->id;
		}

		public function setId($newId){
			$this->id = $newId;
		}

		public function getName(){
			return $this->name;
		}

		public function setName($newName){
			$this->name = $newName;
		}

		public function getLogin(){
			return $this->login;
		}

		public function setLogin($newLogin){
			$this->login = $newLogin;
		}

		public function getPassword(){
			return $this->password;
		}

		public function setPassword($newPassword){
			$this->password = $newPassword;
		}
	}
?>