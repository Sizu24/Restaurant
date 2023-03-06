<?php
  $show = get_field('tm_show');
  $eyebrow = get_field('tm_eyebrow');
  $title = get_field('tm_title');
  $body = get_field('tm_body');
  $link = get_field('tm_link');
  $image = get_field('tm_image');
?>

<?php if ($show == 'yes') : ?>
  <div class="text-media">
    <div class="text-media__container">
      <div class="text-media__media-content">
        <?php if (!empty($image)) : ?>
          <img class="text-media__image" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        <?php endif; ?>
      </div>
      <div class="text-media__text-content">
        <?php if (!empty($eyebrow)) : ?>
          <p class="text-media__eyebrow"><?= $eyebrow ?></p>
        <?php endif; ?>
        <?php if (!empty($title)) : ?>
          <h2 class="text-media__heading">
            Our ingredients are made from scratch.
          </h2>
        <?php endif; ?>
        <?php if (!empty($body)) : ?>
          <div class="text-media__body"><?= $body ?></div>
        <?php endif; ?>
        <?php if (!empty($body)) : ?>
          <a class="text-media__link button" href="">Button</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>