<?php
    if(isset($_POST["txtUS"]) && isset($_POST["txtPW"]) && isset($_POST["txtConPW"]) && isset($_POST["txtEmail"])) {
        $us = $_POST["txtUS"];
        $pw = $_POST["txtPW"];
        $con_pw = $_POST["txtConPW"];
        $email = $_POST["txtEmail"];

        if($pw != $con_pw) {
            header("location: index.php?a=404&id=2");
        }

        $sql = "INSERT INTO user(name, password, email) VALUES ('$us','$pw','$email')";
        DataProvider::executeQuery($sql);

        header("location: index.php?a=6");
    } else {
        header("location: index.php?a=404&id=3");
    }
?>