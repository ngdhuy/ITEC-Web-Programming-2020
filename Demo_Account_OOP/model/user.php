<?php 
    class User extends Database {
        public $id;
        public $username; 
        public $password; 
        public $fullname; 
        public $email;

        public $error = [];

        public function __construct() {
            
        }

        public function login($username, $password) {
            $result = $this->checkUser($username);
            
            if($result->num_rows < 1) {
                // Nếu DB không có dòng nào có username nhập vào -> username nhập vào không tồn tại --> Lỗi
                $this->error[] = "Username is not exist";
            } else {
                // Nếu biến Result có số dòng num_row >= 1 => có tồn tại 1 dòng có username nhập vào
                $row = $result->fetch_assoc();
                
                if(password_verify($password, $row['password']) == false) {
                    // Password bị sai
                    $this->error[] = "Password is wrong";
                } else  {
                    // Password đúng
                    $this->id = $row['id'];
                    $this->username = $row['username'];
                    $this->password = $row['password'];
                    $this->fullname = $row['fullname'];
                    $this->email = $row['email'];

                    $_SESSION['user'] = serialize($this);
                }
            }

            if(empty($this->error)) {
                return true;
            } else {
                $_SESSION['error'] = serialize($this->error);
                return false;
            }
        }

        public function checkUser($username) {
            $sql = "SELECT id, username, password, fullname, email FROM user WHERE username = '$username'";
            $result = $this->executeQuery($sql);
            return $result;
        }

        public function register($username, $password, $fullname, $email) {
            $result = $this->checkUser($username);

            if($result->num_rows > 0) {
                // Thông báo lỗi Username đã tồn tại
                $this->error[] = "Username is existed";
                $_SESSION['error'] = serialize($this->error);
                return false;
            } 

            $this->username = $username;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->fullname = $fullname;
            $this->email = $email;

            $sql = "INSERT INTO user(username, password, fullname, email) VALUES ('$this->username', '$this->password', '$this->fullname', '$this->email')";
            $this->executeQuery($sql);

            return $this->login($username, $password);
        }
    }
?>