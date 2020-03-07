<?php
    if(isset($_POST["txtUS"]) && isset($_POST["txtPW"])) {
        $us = $_POST["txtUS"];
        $pw = $_POST["txtPW"];
        
        $user = new User();
        if($user->login($us, $pw)) {
            header('location:index.php');
        } else {
            header('location:index.php?a=404');
        }

    }
?>