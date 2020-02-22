<?php
    use Models\Comment;
    $comments = Comment::unaprroved();
?>

<div class="container">
  <p class="bg-success text-center text-white p-2 d-none" id="feedbackAdmin"></p>
  <div class="row">
  <?php foreach($comments as $comment): ?>
    <div class="col-12 mt-3">
      <div class="row">
        <div class="col-8 border p-2">
          <p>Posted By: <?= $comment->name ?></p>
          <p>Email: <?= $comment->email ?></p>
          <p>Text: <?= $comment->text ?></p>
        </div>
        <div class="col-4">
          <div class="text-center mt-5">
          <button class="btn btn-primary aprrove" data-id="<?= $comment->id ?>">Approve</button>
          </div>
          
        </div>
      </div>
    </div>

  <?php endforeach; ?>
    
  </div>
</div>


