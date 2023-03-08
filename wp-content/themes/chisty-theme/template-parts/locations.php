<?php 
  /**
   * Template Name: Locations
   */

  $showHeader = get_field('ph_show');
  $pageTitle = get_the_title($post->ID);

  $locations = [
    [
      'id' => 'reno',
      'title' => 'Reno',
      'city' => 'Reno NV',
      'address' => '123 Main st',
    ],
    [
      'id' =>'sd',
      'title' => 'San Diego',
      'city' => 'San Diego CA',
      'address' => '999 Oceanside St',
    ],
    [
      'id' =>'sj',
      'title' => 'San Jose',
      'city' => 'San Jose CA',
      'address' => '321 N Center St',
    ],
  ];
?>

<?php get_header() ?>

  <?php if ($showHeader == 'yes') : ?>
    <div class="page-header">
      <h1 class="page-header__title"><?= $pageTitle ?></h1>
      <p class="page-header__subhead"></p>
    </div>
  <?php endif; ?>

  <div class="locations">

    <div class="locations__content">
      <h3 class="locations__title">Come visit us at any of these locations</h3>
      <ul class="locations__list">
        <li class="locations__list-item">
          <a href="#reno">Reno, Nevada</a>
        </li>
        <li class="locations__list-item">
          <a href="#sd">San Diego, California</a>
        </li>
        <li class="locations__list-item">
          <a href="#sj">San Jose, California</a>
        </li>
      </ul>
    </div>

    <div class="locations__maps">
      <?php foreach($locations as $location) : ?>
        <div class="locations__map map-<?= $location['id'] ?>-js" id="<?= $location['id'] ?>"></div>
        <h3 class="locations__map-title"><?= $location['title'] ?></h3>
        <p class="locations__map-hours">Hours: M-F 10AM - 9PM</p>
        <p class="locations__map-address"><?= $location['address'] ?></p>
        <p class="locations__map-address"><?= $location['city'] ?></p>
      <?php endforeach; ?>
    </div>
  </div>

<?php get_footer() ?>