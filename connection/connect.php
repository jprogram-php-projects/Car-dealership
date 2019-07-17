<?php
	class Connect{
		private static $instance;
		private $conn;

		private function __construct(){
			$server = "localhost";
			$user = "root";
			$password = "";
			$db = "concessionaria";

			try{
				$this->conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}

			catch(PDOException $e){
				echo "Connection failed ". $e->getMessage();
			}
		}

		public function getInstance(){
			if(self::$instance == false){
				self::$instance = new Connect();
			}
			return self::$instance->conn;
		}

		private function __wakeup(){}
		
		private function __sleep(){}
	}

?>