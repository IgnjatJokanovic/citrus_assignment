<?php
require "../vendor/autoload.php";
use Models\Comment;

$status = 422;
$response = '';
extract($_POST);
$comment = new Comment($name, $email, $text);



if($comment->store()){
 $status = 201;
 $response = "Thank you for commenting";
}else{
 $response = "Something went wrong";
}

http_response_code($status);
echo $response;


?>