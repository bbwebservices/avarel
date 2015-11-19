<?php

/*-----------------------------------------------------------------------------------*/
/*  Define variables
/*-----------------------------------------------------------------------------------*/

define('THEME_NAME', 'Concept');
define('THEME_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());
define('CSS_URI', THEME_URI . '/css');
define('JS_URI', THEME_URI . '/js');
define('LIB_DIR', THEME_DIR . '/lib');

/*-----------------------------------------------------------------------------------*/
/*  Theme Setup
/*-----------------------------------------------------------------------------------*/

add_action('after_setup_theme', 'cp_theme_setup');

function cp_theme_setup(){

  /* Load scripts and styles */
  add_action('wp_enqueue_scripts', 'cp_enqueue_assets');

  /* Load admin scripts and styles */
  add_action('admin_enqueue_scripts', 'cp_admin_assets');

  /* Load Text Domain*/
  load_theme_textdomain('concept', get_template_directory() . '/languages');

  add_editor_style( LIB_DIR . '/admin/css/admin-style.css' );

  /* Set the content width */
  if (!isset($content_width)){ $content_width = 1170; }

  /* Register menu */
  add_action('init', 'cp_menu_init');

  /* Add thumbnails support */
  add_theme_support( 'post-thumbnails' );

  /* Add images sizes*/
  add_image_size('portfolio-thumb', 500);
  add_image_size('team-member', 500);
  add_image_size('blog-thumb', 360, 360, true);

  // Post formats
  add_theme_support('post-formats', array('audio', 'video', 'quote', 'image', 'gallery', 'link'));

  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'automatic-feed-links' );

  if ( function_exists( '_wp_render_title_tag' ) ) {
    add_theme_support( 'title-tag' );
  }
}


/* Enqueue scripts and styles */
function cp_enqueue_assets(){

  // Styles
  wp_register_style('global-css', CSS_URI . '/global.min.css');
  wp_enqueue_style('global-css');

  wp_enqueue_style('theme', get_stylesheet_uri(), '');

  wp_register_style('responsive-css', CSS_URI . '/responsive.css');
  wp_enqueue_style('responsive-css');

  wp_enqueue_style('font-1', 'http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400', '');
  wp_enqueue_style('font-2', 'http://fonts.googleapis.com/css?family=Roboto+Condensed:700,300,400', '');

  // Scripts
  wp_enqueue_script('jquery');

  wp_register_script('plugins', JS_URI . '/plugins.min.js', 'jquery', false, true);
  wp_enqueue_script('google-maps', 'https://maps.google.com/maps/api/js?sensor=false', '', false, true);
  wp_enqueue_script('plugins');

  wp_register_script('main', JS_URI . '/main.js', 'jquery', false, true);
  wp_enqueue_script('main');

  $script_variables = array(
    'ajax_url' => admin_url( 'admin-ajax.php' )
  );

  wp_localize_script('main', 'cp_ajax_object', $script_variables );

  if (is_single()) {
    wp_enqueue_script('comment-reply');
  }

}

/* Enqueue admin scripts and styles */
function cp_admin_assets(){

  wp_register_style('cp_admin_style', get_template_directory_uri() . '/lib/admin/css/admin-style.css');
  wp_enqueue_style('cp_admin_style');

  wp_enqueue_style( 'wp-color-picker' );

  wp_register_script('cp_admin_scripts', get_template_directory_uri() . '/lib/admin/js/admin-scripts.js', array('jquery', 'wp-color-picker'), false, true);
  wp_enqueue_script('cp_admin_scripts');

}

/* Register nav menus */
function cp_menu_init(){
  register_nav_menus(
    array(
      'primary'  => __('Header Navigation', 'concept'),
    )
  );
}

$cp_page_on_front = get_option('page_on_front');


/*-----------------------------------------------------------------------------------*/
/*  Call the framework
/*-----------------------------------------------------------------------------------*/

require_once LIB_DIR . '/includes/framework.php';


?>
