<?php 
    class comment extends Database {
        public $id;
        public $post_id;
        public $user_id;
        public $user_fullname;
        public $comment_content;
        
        public function __construct(){ }
        
        public function create() {
            $sql = "INSERT INTO comment(post_id, user_id, comment_content) VALUES($this->post_id, $this->user_id, '$this->comment_content')";
            $this->executeQuery($sql);
        }

        public function getAllByPostID($post_id) {
            $sql = "SELECT c.id, c.user_id, u.fullname, post_id, comment_content FROM user u, comment c WHERE c.user_id = u.id AND c.post_id = $post_id";
            $result = $this->executeQuery($sql);
            $lstComment = [];
            while($row = $result->fetch_assoc()){
                $comment = new comment();
                $comment->id = $row["id"];
                $comment->user_id = $row["user_id"];
                $comment->user_fullname = $row["fullname"];
                $comment->post_id = $row["post_id"];
                $comment->comment_content = $row["comment_content"];
                $lstComment[] = $comment;
            }

            return $lstComment;
        }
    }
?>