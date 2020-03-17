<div class="card">
    <div class="card-header">
        <?php echo "$p->user_id - $p->user_fullname"; ?>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>
                <?php //echo $content; ?>
                <?php
                    $content = $p->post_content;
                    if(strlen($p->post_content) > 100)
                    {
                        $content = substr($p->post_content,0,10)." ...";
                    }
                    echo $content;
                ?>
            </p>
        </blockquote>
    </div>
    <?php 
        foreach($p->lstComment as $c){
            
            include("./pages/iComment.php");
        }

        if(isset($_SESSION["user"])) {
            include("./pages/iAddComment.php");
        }
    ?>
</div>