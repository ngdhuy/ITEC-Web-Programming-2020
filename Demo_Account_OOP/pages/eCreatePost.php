<?php 
    if(isset($_SESSION["user"]) && isset($_POST["txtContent"])){
        $post = new post();
        $user = unserialize($_SESSION['user']);
        $post->user_id = $user->id;
        $post->post_content = $_POST["txtContent"];
        $post->create();
    }
    header("location: index.php?a=7");
?>