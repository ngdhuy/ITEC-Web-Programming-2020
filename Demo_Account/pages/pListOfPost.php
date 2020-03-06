<div class="jumbotron">
    <h1 class="display-4 alert alert-primary">List of POST</h1>
    <?php
        $sql = "SELECT p.id, u.name, p.content FROM user u, post p WHERE u.id = p.user_id";
        $result = DataProvider::executeQuery($sql);
        while($row = mysqli_fetch_array($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $content = $row["content"];
            
            include("./pages/iPost.php");
        }
        

        if(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"] == true) {
            include("./pages/iCreatePost.php");
        }
    ?>
    
</div>