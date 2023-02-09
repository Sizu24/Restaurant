<?php 
/**
 *  Template: Food Menu
 */
?>

<?php get_header(); ?>
  <div class="menu-detail">
    <?php get_template_part('template-parts/page-header'); ?>
    <div class="menu-detail__container">
      <div class="menu-detail__image">
        <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
      </div>
      <div class="menu-detail__content">
        <h3 class="menu-detail__title"><?= get_the_title() ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>