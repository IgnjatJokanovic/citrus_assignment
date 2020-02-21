<?php
    namespace Models;
    use Models\DB;

    class Comment{

      public $name;
      public $email;
      public $text;

     public function __construct($name, $email, $text){
      $this->name = $name;
      $this->email = $email;
      $this->text = $text;
     }
      
      public static function index(){
        $con = DB::getInstance()->getConnection();
        return $con->query("select * from comment where approved = true")->fetchAll();
      }

      public function store(){
        $con = DB::getInstance()->getConnection();
        $stmt = $con->prepare("insert into comment values(:name, :email, :text)");
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":text", $this->text);
        return $stmt->execute();
      }

      public function approve($id, $value){
        $con = DB::getInstance()->getConnection();
        $con->prepare("update comment set approved=:value where id=$id");
        $con->bindParam(":value", $value);
        return $con->execute();

      }

      public function destroy($id){
        $con = DB::getInstance()->getConnection();
        return $con->query("delete from comment where id=$id");
      }

    }