<?php
    namespace Models;
    use Models\DB;

    class Comment{

      public $name;
      public $email;
      public $text;
      public $default = false;

     public function __construct($name, $email, $text){
      $this->name = $name;
      $this->email = $email;
      $this->text = $text;
     }
      
      public static function index(){
        $con = DB::getInstance()->getConnection();
        return $con->query("select * from comment where approved = true")->fetchAll();
      }

      public static function unaprroved(){
        $con = DB::getInstance()->getConnection();
        return $con->query("select * from comment where approved = false")->fetchAll();
      }

      public function store(){
        $con = DB::getInstance()->getConnection();
        $stmt = $con->prepare("insert into comment (name, email, text)  values(:name, :email, :text)");
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":text", $this->text);
        // $stmt->bindParam(":approved", $this->default);
        return $stmt->execute();
      }

      public static function approve($id){
        $con = DB::getInstance()->getConnection();
        $stmt = $con->prepare("update comment set approved=true where id=:id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();

      }

    }