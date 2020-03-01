<?php
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        echo "This is detail of product with ID = $id";
    } else {
        header("location: Demo10_f.php");
    }
?>