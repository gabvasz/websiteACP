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

// Habilitar Menus
add_theme_support('menus');

function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ) );
}
add_action( 'init', 'register_my_menu');

// incluir estilo e scripts
function load_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrapmin', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.3.3', false);
    wp_enqueue_script( 'lightbox', 'https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js', array(), false, true);
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true);
    wp_enqueue_script( 'gsap-ScrollTrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', 'gsap-js', false, true);
    wp_enqueue_script( 'gsap-text', 'https://unpkg.com/split-type', array(), false, true);


    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', false);

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


//Função configuração do Tema
function wp_config(){
  add_theme_support( 'post-thumbnails');
  add_image_size( 'homepage-thumb', 470, 375, false );
  add_image_size( 'post-blog', 470, 230, false ); 

  add_theme_support( 'post-formats', array( 'video', 'image' ));
  add_theme_support( 'title-tag');
  add_theme_support( 'custom-logo', array());
}
add_action( 'after_setup_theme', 'wp_config', 0);
  

function image_alt_by_url($image_url) {
  $image_id   = attachment_url_to_postid($image_url);
  $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
  return $alt; 
  }

  // Permitir upload de SVG

  function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');

  // Add Favicon with WordPress Hook 

add_action( 'wp_head', 'ilc_favicon');
function ilc_favicon(){
    echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . "/favicon.ico' />" . "\n";
}
