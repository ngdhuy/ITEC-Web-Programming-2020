<?php 
    if(isset($_SESSION["id"]) && isset($_POST["txtComment"])){
        $comment = $_POST["txtComment"];
        $user_id = $_SESSION["id"];
        $post_id = $_POST["hdPostID"];

        $sql = "INSERT INTO comment(user_id, post_id, comment) VALUES ($user_id, $post_id , '$comment')";
        DataProvider::executeQuery($sql);
        
    }
    header("location: index.php?a=7");
?>