<?php 
    class Database {
        private $host = "localhost";
        private $database_name = "restapi";
        private $username = "root";
        private $password = "";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database_name);
            }catch(Exception $e){
                echo "Database could not be connected: " . mysqli_connect_error();
            }
            return $this->conn;
        }

        
    } 
?>