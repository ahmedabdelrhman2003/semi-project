<?php
namespace mylogin\data;
class connection{
    public $host;
    public $user;
    public $pass;
    public $dsn;
    public $conn;
    public function __construct(){
        
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dsn='mysql:host=localhost;dbname=user';
        
            
        $this->conn= new \PDO($dsn, $user, $pass) ;
        
    
            
        }
        public function getdb(){
      return $this->conn;
        }


}