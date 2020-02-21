<?php
    namespace Models;
    use PDO;
    include_once('settings.php');
    class DB
    {
        private static $instance = null;
        private $con;
        
        private function __construct()
        {
            try{
                $this->con = new PDO("mysql:host=".HOST.";dbname=".DATABASE.";charset=utf8", USERNAME, PASSWORD);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }
            catch(PDOException $msg){
                echo $msg;
            }
           
        }
        public static function getInstance()
        {
            if(!self::$instance)
            {
                self::$instance = new DB();
            }
        
            return self::$instance;
        }
        public function getConnection()
        {
            return $this->con;
        }
    }
?>