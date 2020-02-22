<?php
    use Models\Comment;
    $comments = Comment::index();
?>

<div class="container">
  
  <div class="text-center mt-5">
  <h2>Comments</h2>
  </div>
  <div class="row">
    <?php foreach($comments as $comment): ?>
          <div class="col-12">
            <div class="comment">
              <h2>Name: <?= $comment->name ?></h2>
              <p>Email: <?= $comment->email ?></p>
              <p><?= $comment->text ?></p>
            </div>
          </div>
    <?php endforeach; ?>
  
  </div>
  <p class="text-center feedback text-success"></p>
  <form action="">
    <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name">
        <p class="err text-danger mt-1"></p>
        </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email">
        <p class="err text-danger mt-1"></p>
      </div>
      <div class="form-group">
        <label for="comment">Comment</label>
        <textarea type="text" class="form-control" id="comment" placeholder="Enter Comment"></textarea>
        <p class="err text-danger mt-1"></p>
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary mx-auto" id="btnSubmit">Submit</button>
      </div>
      
  </form>
 
</div>