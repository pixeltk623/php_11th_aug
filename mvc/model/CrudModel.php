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

        public function insertData($data, $table) {

            $dataAll = array(
                'name' => $data['name'],
                'email'=>$data['email'],
                'gender' => $data['gender'],
                'hobby' => implode(",",$data['hobby']),
                'city' => $data['city']
            );
            $values = array_values($dataAll);
            $values = "'".implode("','",$values)."'";
            $colName =  "`". implode("`,`", array_keys($dataAll)) . "`";
            $this->query = "INSERT INTO `crud_ajax`($colName) VALUES ($values)";

            $this->result = mysqli_query($this->conn, $this->query);

            if($this->result) {
                return ['status' => true];
            } else {
                return ['status' => false];
            }
        }

        public function deleteDataById($id, $table){
            $this->query = "DELETE FROM $table WHERE id = ".$id;

            $this->result = mysqli_query($this->conn, $this->query);

            if($this->result) {
                return ['status' => true];
            } else {
                return ['status' => false];
            }

        }

        public function getDataById($id, $table) {

            $this->query = "SELECT * FROM $table WHERE id = ".$id;

            $this->result = mysqli_query($this->conn, $this->query);
            $this->finalData =  mysqli_fetch_object($this->result);
            return $this->finalData;
        }
	}

?>