<?php 
    if(isset($_SESSION["user"]) && isset($_POST["txtComment"])){
        $user = unserialize($_SESSION["user"]);
        $comment = new comment();
        $comment->comment_content = $_POST["txtComment"];
        $comment->user_id = $user->id;
        $comment->post_id = $_POST["hdPostID"];
        
        $comment->create();
        
    }
    header("location: index.php?a=7");
?>