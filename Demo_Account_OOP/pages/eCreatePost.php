<?php 
    if(isset($_SESSION["id"]) && isset($_POST["txtContent"])){
        $content = $_POST["txtContent"];
        $user_id = $_SESSION["id"];

        $sql = "INSERT INTO post(user_id, content) VALUES ($user_id, '$content')";
        DataProvider::executeQuery($sql);
        
    }
    header("location: index.php?a=7");
?>