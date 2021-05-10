<?php 

// Load file css or scripts
function load_file(){
  $dir = get_template_directory_uri();

  // load css
  wp_enqueue_style('style', get_stylesheet_uri());

  // Load js
  wp_enqueue_script('main', $dir . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_file');

// custom menu nav
register_nav_menus(array(
  'main_menu' => 'Main Menu'

));

// add class active to menu
function active_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'active_nav_class' , 10 , 2);

// Custom excerpt
function custom_excerpt_length(){
  return 100;
}

function custom_excerpt_text(){
  return '...';
}

add_filter('excerpt_more', 'custom_excerpt_text');
add_filter('excerpt_length', 'custom_excerpt_length');
// END Custom excerpt

// ADD site logo
function theme_prefix_setup(){
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width'  => true,
  ));  
}
add_action('after_setup_theme', 'theme_prefix_setup');