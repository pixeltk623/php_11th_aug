<?php 

// class Employee {

// 	public $name = "Sharvan";
// 	private $salary = "54545";
// 	protected $position = "Developer";

// 	public function __construct() {
// 		echo "This is magic Function";
// 	}
	
// 	function getEmployeeName(){
// 		echo "My Name is ".$this->name." Kumar";
// 	}

// 	public function getSalary() {
		
// 		echo $this->salary;
// 	}

// }	


// $e1 = new Employee();

// echo "<pre>";

// print_r($e1);

// // echo $e1->name;
// // echo $e1->position;

// print_r($e1->getEmployeeName());

// print_r($e1->getSalary())


// class Employee
// {	
// 	public $name;
// 	protected $email;
// 	private $salary;

// 	function __construct($name, $email, $salary)
// 	{
// 		$this->name = $name;
// 		$this->email = $email;
// 		$this->salary = $salary;
// 	}

// 	public function getSalary() {

// 		return $this->salary;
// 	}



// 	public function getEmail() {

// 		return $this->email;
// 	}



// 	function __destruct() {
// 		$this->name;
// 		$this->email;
// 		$this->salary;
// 	}
// }

// $e1 = new Employee("Sharvan", "s@gmail.com",515465);

// // echo "<pre>";

// // print_r($e1->name);

// // echo $e1->salary;

// // echo "<br>";

// echo $e1->getSalary();
// echo "<br>";

// echo $e1->getEmail();


class User {

	private $severName = "localhost";
	private $userName = "root";
	private $password = "";
	private $dbName = "php_11_aug";
	public $conn;
	public $query;
	public $response;
	public $finalData;
	public $result;

	public function __construct() {
		$this->dbConnection();
	}
	public function dbConnection() {
		$this->conn = mysqli_connect($this->severName, $this->userName, $this->password, $this->dbName);
		return $this->conn;
	}

	public function getAllUserData($table = "") {
		$this->response = array();
		$this->query = "SELECT * FROM $table";
		$this->result = mysqli_query($this->conn, $this->query);
		while($this->response[] = mysqli_fetch_object($this->result)) {}
		$this->finalData = array_filter($this->response);
		return $this->finalData;
	}

	public function __destruct() {
		unset($this->finalData);
		unset($this->response);
		unset($this->query);
		unset($this->result);
		unset($this->conn);
	}
}

$object = new User();

echo "<pre>";

print_r($object->getAllUserData('users'));

?>