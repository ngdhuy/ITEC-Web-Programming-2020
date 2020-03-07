<?php
    if(isset($_POST["txtUS"]) && isset($_POST["txtPW"]) && isset($_POST["txtConPW"]) && isset($_POST["txtFullName"]) && isset($_POST["txtEmail"])) {
        $us = $_POST["txtUS"];
        $pw = $_POST["txtPW"];
        $con_pw = $_POST["txtConPW"];
        $fullname = $_POST["txtFullName"];
        $email = $_POST["txtEmail"];

        if($pw != $con_pw) {
            header("location: index.php?a=404&id=2");
        }

        $user = new User();
        if($user->register($us, $pw, $fullname, $email))
        {
            header("location: index.php?a=6");
        } else {
            header('location:index.php?a=404&id=3');
        }
    } else {
        header("location: index.php?a=404&id=3");
    }
?>