<?php 
    class db{
        public $conn = NULL;
        public $result = NULL;
        public $host="localhost";
        public $user="root";
        public $pass="";
        public $database="dbdoanweb";
        private $author="Phạm Văn Hoàn";
        protected $version="1.1";
        function __construct(){
            $this->conn = mysqli_connect($this->host, $this->user, $this->pass);
            mysqli_select_db($this->conn, $this ->database);
            mysqli_query($this->conn,"set names 'utf8'");
        } 
        
    }