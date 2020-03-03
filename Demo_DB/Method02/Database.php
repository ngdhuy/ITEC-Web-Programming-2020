<?php
    class Database {
        private $host = "localhost";
        private $user = "root";
        private $pass = "root";
        private $db   = "db_demo";
        private $charset = "utf8";

        private $pdo;
        public $stmt;

        public function __construct() {
            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset"; // dsn = Data Source Name
            $option = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try {
                $this->pdo = new PDO($dsn, $this->user, $this->pass, $option);
            } catch (PDOException $err) {
                echo $err->getMessage();
            }
        }

        public function query($sql) {
            $this->stmt = $this->pdo->query($sql);
        }
    }

?>