<?php
    class Employee{

        // Connection
        private $conn;

        // Table
        private $db_table = "Employee";

        // Columns
        public $id;
        public $name;
        public $email;
        public $age;
        public $designation;
        public $created;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getEmployees(){
            $sqlQuery = "SELECT id, name, email, age, designation, created FROM " . $this->db_table . "";
            $stmt = mysqli_query($this->conn, $sqlQuery);
            return $stmt;
        }
        public function createEmployee(){
            
            $sqlQuery = "INSERT INTO `".$this->db_table."` (`name`, `email`, `age`, `designation`, `created`) VALUES ('".$this->name."','".$this->email."','".$this->age."','".$this->designation."','".$this->created."')";
            $result = mysqli_query($this->conn, $sqlQuery);

            if($result){
               return true;
            }
            return false;
        }

    }
?>