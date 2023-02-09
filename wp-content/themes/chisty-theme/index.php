<?php
/* Template Name: Food Menu */

$args = [
  'post_type' => 'food-menu',
];
$query = new WP_Query($args);
var_dump(get_the_ID());
?>

<?php get_header(); ?>
  <?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : ?>
      <?php echo $query->the_post(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
