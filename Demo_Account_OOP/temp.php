<?php 
    // $txt = "123";
    // $enc = password_hash($txt, PASSWORD_DEFAULT);
    // $inp = password_hash($txt, PASSWORD_DEFAULT);
    // echo "<div>$enc</div><div>$inp</div>";
    // $result = password_verify("123", $enc);
    // var_dump($result);

    include("./lib/Database.php");
    // include("./model/user.php");

    // $us = new user();
    // $us->login('admin', 'admin');

    $db = new Database();

    $sql = "SELECT * FROM user WHERE username like '%a%' AND email LIKE '%itec%'";
    // $format = "ss";
    // $arrParameter = ["a", "itec"];
    $arrParameter = [];
    $format = "";

    $result = $db->executeQuery_2($sql, $format, $arrParameter);
    $row = $result->fetch_array();
    var_dump($row);
?>