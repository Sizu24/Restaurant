<?php
/* Template Name: Food Menu Archive */

  $categories = [];
  $categories = get_terms([
    'taxonomy' => 'menu-categories',
    'hide_empty' => false
  ]);

  $checked = [];
  if (isset($_GET['menu-categories'])) {
    $checked = $_GET['menu-categories'];
  };
?>

<?php get_header(); ?>
  <div class="page-header">
    <h1 class="page-header__title">Our Menu</h1>
    <p class="page-header__subhead"></p>
  </div>
  <div class="archive">
    <div class="archive-container">

      <div class="archive-sidebar">
        <h3>Filter Items:</h3>
        <div class="archive-filter">
          <form class="archive-filter__form" action="" method="GET">
            <?php foreach($categories as $category) : ?>
              <label class="archive-filter__label" for="checkbox">
                <input class="archive-filter__checkbox" id="checkbox" type="checkbox" value="<?= $category->slug ?>" name="menu-categories[]"
                <?php checked(in_array($category->slug, $checked)); ?>
                >
                <span class="archive-filter__checkbox-title"><?= $category->name ?></span>
              </label>
            <?php endforeach; ?>
            <button class="archive-filter__submit button" type="submit">Filter</button>
          </form>

        </div>
      </div>

      <div class="archive-posts">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>

            <a class="archive__card" href="<?= get_permalink($post) ?>">
              <?php if (!empty(has_post_thumbnail())) : ?>
                <div class="archive__card-image">
                  <?= get_the_post_thumbnail() ?>
                </div>
              <?php endif; ?>
              <div class="archive__card-content">
                <h3 class="archice__card-title"><?= get_the_title() ?></h3>
                <p class="archice__card-description"><?= the_excerpt() ?></p>
              </div>
            </a>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>

    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
