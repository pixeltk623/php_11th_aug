<?php 
	
	// Base Class
	class ParentClass {
		private $severName = "localhost";
		private $userName = "root";
		private $password = "";
		private $dbName = "php_11_aug";
		public $conn;
		public $name = "SKumar";
		protected $salary = 5546;

		public function __construct() {
			$this->dbConnection();
		}

		public function dbConnection() {
			$this->conn = mysqli_connect($this->severName, $this->userName, $this->password, $this->dbName);
			return $this->conn;
		}

		public function getFullName() {
			echo "Hello Kumar";
		}
	}

	class Child extends ParentClass
	{
		
		public function __construct($address) {
			parent::__construct();
			$this->address = $address;
		}

		public function getUser() {
			echo "Hello User";
		}

		public function getSalary() {
			echo $this->salary;
		}
		

		public function getAllUserData($table = "") {
			$this->response = array();
			$this->query = "SELECT * FROM $table";
			$this->result = mysqli_query($this->conn, $this->query);
			while($this->response[] = mysqli_fetch_object($this->result)) {}
			$this->finalData = array_filter($this->response);
			return $this->finalData;
		}
	}

$object = new Child("Patna");

// $object->getUser();
// $object->getFullName();
// echo $object->getSalary();
// echo "<pre>";

// print_r($object);


echo "<pre>";

print_r($object->getAllUserData('users'));
?>