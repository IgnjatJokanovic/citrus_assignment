<?php
require "../vendor/autoload.php";
use Models\Comment;


$status = 422;
$response = '';
extract($_POST);




if(Comment::approve($id)){
 $status = 201;
 $response = "Task completed";
}else{
 $response = "Something went wrong";
}

http_response_code($status);
echo $response;

?>
