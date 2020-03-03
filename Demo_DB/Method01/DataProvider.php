<?php
    class DataProvider {
        public static function ExecuteQuery($query) {
            $connect = mysqli_connect("localhost", "root" , "root", "db_demo") or die("Cannot connect to DB");
            mysqli_query($connect, "set name 'utf8'");
            $result = mysqli_query($connect, $query);
            mysqli_close($connect);
            return $result;
        }

        // 1. Kết nối đến CSDL
        // 2. Tạo câu truy vấn (query) --> STRING
        // 3. Thực thi câu truy vấn --> Kết quả
        // 4. Xử lý kết quả sau khi thực thi câu truy vấn (SELECT)
        // 5. Đóng kết nối đến CSDL

        // Create: --> INSERT --> INSERT INTO <TableName>() VALUES (), (), ();
        // Read:   --> SELECT --> SELECT ... FROM ... WHERE ... GROUP BY ... HAVING ... ORDER BY ...;
        // Update: --> UPDATE --> UPDATE <TableName> SET ... = ... WHERE ...;
        // Delete: --> DELETE --> DELETE FROM <TableName> WHERE ...;
    }
?>