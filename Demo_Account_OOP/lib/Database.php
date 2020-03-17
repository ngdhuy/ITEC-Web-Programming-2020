<?php
    class Database {
        private $db_host = "localhost";
        private $db_name = "db_acc_oop";
        private $db_user = "root";
        private $db_pass = "root";
        private $db_port = "3306";

        public function executeQuery($sql) {
            $connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name, $this->db_port) or 
                            die ("Cannot connect to DB");
            mysqli_query($connection, "set name 'utf8'");
            $result = mysqli_query($connection, $sql);
            mysqli_close($connection);
            return $result;
        }
        // public function executeQuery_2($sql, $format, $parmeters) {
        //     $mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name, $this->db_port);

        //     if (mysqli_connect_errno()) {
        //         printf("Connect failed: %s\n", mysqli_connect_error());
        //         exit();
        //     }
            
        //     $stmt = $mysqli->prepare($sql);
            
        //     /* create a prepared statement */
        //     if ($stmt === FALSE) {
        //         die("Cannot connect to DB: ".$mysqli->error);
        //     } else {
        //         // for($i = 0; $i < count($parmeters); $i++) {
        //         //     echo "<div>".substr($format,$i,1)." - ".$parmeters[$i]."</div>";
        //         //     echo $sql;
        //         //     $stmt->bind_param(substr($format,$i,1), $parmeters[$i]);
        //         // }
        //         echo $sql." - ".$format;
        //         var_dump(...$parmeters);
                
        //         $stmt->bind_param($format, ...$parmeters);
        //         $stmt->bind_param()
                
        //         /* execute query */
        //         $stmt->execute();
        //         $result = $stmt->get_result();

        //         /* close statement */
        //         $stmt->close();
        //     }

        //     /* close connection */
        //     $mysqli->close();
            
        //     return $result;
        // }

    }
?>