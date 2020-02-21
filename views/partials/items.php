<?php
    use Models\Item;
    $items = Item::index();
?>
<div class="container">
  <div class="row">
    
   <?php foreach($items as $item): ?>
      <div class="col-3">
          <div class="card">
           <img src="<?= $item->image ?>" alt="<?= $item->title ?>">
           <div class="card-body">
              <h2 class="card-title"><?= $item->title ?></h2>
              <p class="card-text"><?= $item->description ?></p>
           </div>
          </div>
      </div>
   <?php endforeach; ?>
  </div>

</div>