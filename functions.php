<?php 

// limpar header

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// incluir estilo e scripts
function load_scripts(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '5.3.2', true );
    wp_enqueue_script( 'bootstrapmin', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.3.3', false);
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Registrando Menu
register_nav_menus(
  array(
      'my_main_menu' => 'Menu Principal'
        )
  );

//Função configuração do Tema
function wp_config(){
  add_theme_support( 'post-thumbnails');
  add_image_size( 'homepage-thumb', 470, 375, false );
  add_theme_support( 'post-formats', array( 'video', 'image' ));
  add_theme_support( 'title-tag');
  add_theme_support( 'custom-logo', array( 'height' => 107, 'width' => 107));
}
add_action( 'after_setup_theme', 'wp_config', 0);
  