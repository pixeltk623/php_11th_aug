<?php
	
	class CrudModel  {
		
		private $serverName = "localhost";
		private $userName = "root";
		private $password = "";
		private $dataBaseName = "php_11_aug";
		public $conn;
		public $query;
		public $result;
		public $response;
		public $finalData;

		public function __construct() {
			$this->dbConnection();
		}

		public function dbConnection() {
			$this->conn = mysqli_connect($this->serverName, $this->userName,$this->password,$this->dataBaseName);

			return $this->conn;
		}

		public function getAllData($table) {

			$this->query = "SELECT * FROM $table";

			$this->result = mysqli_query($this->conn, $this->query);
			$this->response = array();
			while ($this->response[] = mysqli_fetch_object($this->result)) {
			}
			$this->finalData = array_filter($this->response);
			return $this->finalData;

		}
	}

?>