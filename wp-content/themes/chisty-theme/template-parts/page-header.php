<?php 
  $categories = get_the_terms($post->ID, 'menu-categories');
?>

<div class="page-header">
    <?php foreach($categories as $category) : ?>
      <h1 class="page-header__title"><?= $category->name ?></h1>
    <?php endforeach; ?>
  <p class="page-header__subhead"></p>
</div>