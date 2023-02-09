<?php
/**
 * Functions
 */

 if (! function_exists('chistyTheme_setup')) {

  function chistyTheme_setup() {

    $post_type = 'food-menu';
    $singular = 'Food Menu';
    $plural = 'Food Menus';
    $plural_lower = strtolower($plural);
    $args = [
      'labels' => [
        'name' => _x($plural, 'Post type general name'),
        'singular_name' => _x($singular, 'Post type singular name'),
        'menu_name' => _x($plural, 'Admin Menu text'),
        'name_admin_bar' => _x($singular, 'Add New on Toolbar'),
        'add_new' => __('Add New'),
        'add_new_item' => __("Add New $singular"),
        'new_item' => __("New $singular"),
        'edit_item' => __("Edit $singular"),
        'view_item' => __("View $singular"),
        'all_items' => __("All $plural"),
        'search_items' => __("Search $plural"),
        'parent_item_colon' => __("Parent $singular:"),
        'not_found' => __("No $plural_lower found."),
        'not_found_in_trash' => __("No $plural_lower found in Trash."),
      ],
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => ['slug' => 'Menu', 'with_front' => false],
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ];
    register_post_type($post_type, $args);
    add_action('init', 'register_post_type');

    $taxonomy_name = 'Menu Categories';
    $post_types = ['food-menu'];
    $singular = 'Menu Category';
    $plural = 'Menu Categories';
    $plural_lower = strtolower($plural);
    $args = [
      'labels' => [
        'name' => _x($plural, 'taxonomy general name'),
        'singular_name' => _x($singular, 'taxonomy singular name'),
        'search_items' => __("Search $plural"),
        'all_items' => __("All $plural"),
        'parent_item' => __("Parent $singular"),
        'parent_item_colon' => __("Parent $singular:"),
        'edit_item' => __("Edit $singular"),
        'update_item' => __("Update $singular"),
        'add_new_item' => __("Add New $singular"),
        'new_item_name' => __("New $singular Name"),
        'menu_name' => __($plural),
      ],
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => ['slug' => $plural_lower],
      'show_in_rest' => true,
    ];
    register_taxonomy($taxonomy_name, $post_types, $args);

    load_theme_textdomain('Chisty', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    add_theme_support('custom-logo', [
      'height' => 250,
      'width' => 250,
      'flex-width' => true,
      'flex-height' => true,
    ]);

    add_theme_support('custom-background', apply_filters('chisty_theme_background_args', [
      'default-color' => 'ffffff',
      'default-image' => '',
    ]));

    add_theme_support('custom-header', [
      'flex-width' => true,
      'width' => 1600,
      'flex-height' => true,
      'height' => 450,
      'default-image' => '',
    ]);

    register_nav_menus([
      'primary' => esc_html__('Main Menu', 'chisty-theme'),
      'footer' => esc_html__('Footer Menu', 'chisty-theme'),
    ]);

    function chistyTheme_public_scripts() {
      // styles
      $version = wp_get_theme()->get('Version'); //Updates version from style.css
      wp_enqueue_style( 'baskervville-google-fonts', 'https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap', false ); 
      wp_enqueue_style( 'satisfy-google-fonts', 'https://fonts.googleapis.com/css2?family=Satisfy&display=swap', false ); 
      wp_enqueue_style( 'Proxima Nova', 'https://use.typekit.net/yme5rxe.css', false );

      wp_enqueue_style('main', get_template_directory_uri() . '/dist/styles/main.css', [], $version, 'all');

      // scripts
      wp_enqueue_script('main', get_template_directory_uri() . '/dist/scripts/main.js', ['jquery'], wp_rand(), true);
    }
    add_action('wp_enqueue_scripts', 'chistyTheme_public_scripts');

    /**
     * Font Awesome Kit Setup
     * 
     * This will add your Font Awesome Kit to the front-end, the admin back-end,
     * and the login screen area.
     */
    if (! function_exists('fa_custom_setup_kit') ) {
      function fa_custom_setup_kit($kit_url = '') {
        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
          add_action(
            $action,
            function () use ( $kit_url ) {
              wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
            }
          );
        }
      }
    }
    fa_custom_setup_kit('https://kit.fontawesome.com/67a4a7bccc.js');



  }

  function chistyTheme_admin_scripts() {
      
  }
  add_action('admin_enqueue_scripts', 'chistyTheme_admin_scripts');
  
 }

add_action('after_setup_theme', 'chistyTheme_setup');