<?php  
    include _PATH.'models/Model.php';
   // include _PATH.'models/Database.php';

    class User   extends Model { // extends Model is a keyword that allows us to inherit properties and methods from another class.
        public $id;
        public $username;
        public $password;
        public $email;
        public $created_at;
        public $updated_at;
        public $db;

        public function __construct() {
            parent::__construct();
          // $this->db = new Database();
           // $this->db = $this->db->getConnection();

        }

        public function get_user_by_id($id) {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        }

        public function get_user_by_username($username) {
            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        }

        public function get_user_by_email($email) {
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;

        }
        public function get_all_users() {
            $sql = "SELECT * FROM users";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        }

    }


?>