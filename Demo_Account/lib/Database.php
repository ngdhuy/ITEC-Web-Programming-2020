<?php
    class DataProvider {
        private $db_host = "localhost";
        private $db_name = "db_acc";
        private $db_user = "root";
        private $db_pass = "root";
        private $db_port = "3306";

        public static function executeQuery($sql) {
            $connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name, $this->db_port) or 
                            die ("Cannot connect to DB");
            mysqli_query($connection, "set name 'utf8'");
            $result = mysqli_query($connection, $sql);
            mysqli_close($connection);
            return $result;
        }
    }
?>