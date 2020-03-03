<?php
    include_once "DataProvider.php";

    $query = "INSERT INTO User(UserName, Password, FullName, UserTypeID) VALUES ('ty', 'ty', '<script>alert(\"hello\");</script>', 2)";
    DataProvider::ExecuteQuery($query);

    Header("location: Demo01.php");
?>