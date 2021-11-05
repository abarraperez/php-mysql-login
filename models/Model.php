<?php
    include _PATH.'models/Database.php';

    class Model {
        protected $db;
        protected $table;
        protected $primaryKey;

        public function __construct() {
            $this->db = new Database(); // where is the class database defined? 
            $this->db = $this->db->getConnection();
            /*$this->table = $table;
            $this->primaryKey = $primaryKey;*/
        }

        public function getAll() {
            $query = "SELECT * FROM {$this->table}";
            return $this->db->query($query);
        }

    }