<?php
    namespace Models;
    use Models\DB;

    class Item{
      
      public static function index(){
        $con = DB::getInstance()->getConnection();
        return $con->query("select * from item")->fetchAll();
      }

    }
?>