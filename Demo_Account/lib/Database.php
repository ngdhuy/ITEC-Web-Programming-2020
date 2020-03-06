<?php
    class DataProvider {
        public static function executeQuery($sql) {
            $connection = mysqli_connect("localhost", "root", "root", "db_acc", "3306") or 
                            die ("Cannot connect to DB");
            mysqli_query($connection, "set name 'utf8'");
            $result = mysqli_query($connection, $sql);
            mysqli_close($connection);
            return $result;
        }
    }
?>