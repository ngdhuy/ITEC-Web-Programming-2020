<?php
    if(isset($_POST["txtUS"]) && isset($_POST["txtPW"])) {
        $us = $_POST["txtUS"];
        $pw = $_POST["txtPW"];
        
        $sql = "SELECT * FROM user WHERE name = '$us' AND password = '$pw'";
        $result = DataProvider::executeQuery($sql);
        $row = mysqli_fetch_array($result);
        
        if($row != null) {
            $_SESSION["isLogin"] = true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            header("location: index.php");
        } else {
            $_SESSION["isLogin"] = false;
            header("location: index.php?a=404");
        }
        
    }
?>