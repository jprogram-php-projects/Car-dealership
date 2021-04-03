<?php
	class Connect{
		private static $instance;
		private $conn;

		private function __construct(){
			$server = "127.0.0.1";
			$user = "jprogram";
			$password = "jeff";
			$db = "phprs";
			$port = "3306";

			try{
				$this->conn = new PDO("mysql:host=$server:3307;dbname=$db", $user, $password);
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