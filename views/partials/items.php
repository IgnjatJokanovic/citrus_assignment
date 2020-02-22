<?php
    use Models\Item;
    $items = Item::index();
?>

<div class="container">
  <div class="text-center">
  <a href="index.php?page=admin" class="btn btn-primary">Admin Part</a>
  </div>
   
  <div class="row">
    
   <?php foreach($items as $item): ?>
      <div class="col-4 mt-5">
          <div class="card p-2">
           <img src="img/<?= $item->image ?>" alt="<?= $item->title ?>">
           <div class="card-body">
              <h2 class="card-title"><?= $item->title ?></h2>
              <p class="card-text"><?= $item->description ?></p>
           </div>
          </div>
      </div>
      
   <?php endforeach; ?>
  </div>

</div>