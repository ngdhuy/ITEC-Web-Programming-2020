<div class="card">
    <div class="card-header">
        <?php echo "$id - $name"; ?>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>
                <?php //echo $content; ?>
                <?php
                    if(strlen($content) > 100)
                    {
                        $content = substr($content,0,10)." ...";
                    }
                    echo $content;
                ?>
            </p>
        </blockquote>
    </div>
    <?php 
        $s = "SELECT u.name, c.comment FROM user u, comment c WHERE u.id = c.user_id AND c.post_id = $id";
        $re = DataProvider::executeQuery($s);
        while($ro = mysqli_fetch_array($re)){
            $u_name = $ro["name"];
            $comment = $ro["comment"];
            include("./pages/iComment.php");
        }

        if(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"] == true) {
            include("./pages/iAddComment.php");
        }
    ?>
</div>