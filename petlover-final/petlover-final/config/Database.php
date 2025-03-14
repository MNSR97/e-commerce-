<?php

class database{
    
    private static $instance=null;
    private $conn;

    private function __construct(){
       
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=petlover", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance(){
        if (self::$instance == null) {
            self::$instance = new database();
        }
        return self::$instance->conn;
    }
}
?>