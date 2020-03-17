<?php
    class post extends Database {
        public $id; 
        public $user_id;
        public $user_fullname;
        public $post_content;
        
        public $lstComment;

        public function __construct(){
            $this->lstComment = [];
        }

        public function create() {
            $sql = "INSERT INTO post(user_id, post_content) VALUES($this->user_id, '$this->post_content')";
            $this->executeQuery($sql);
            echo $sql;
        }

        public function getAll(){
            $sql = "SELECT p.id as id, u.id as user_id, u.fullname as user_fullname, p.post_content FROM post p, user u WHERE p.user_id = u.id";
            $result = $this->executeQuery($sql);
            $lstPost = [];

            while($row = $result->fetch_assoc()){
                $post = new Post();
                $post->id = $row["id"];
                $post->user_id = $row["user_id"];
                $post->user_fullname = $row["user_fullname"];
                $post->post_content = $row["post_content"];
                
                $comment = new comment();
                $post->lstComment = $comment->getAllByPostID($post->id);
                $lstPost[] = $post;
            }

            return $lstPost;
        }
    }
?>