<div class="jumbotron">
    <h1 class="display-4 alert alert-primary">List of POST</h1>
    <?php
        $post = new post();
        $lstPost = $post->getAll();

        foreach($lstPost as $p) {
            include("./pages/iPost.php");
        }
        

        if(isset($_SESSION['user'])) {
            include("./pages/iCreatePost.php");
        }
    ?>
    
</div>