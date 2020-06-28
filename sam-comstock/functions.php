<?php

require_once('lib/helpers.php');

function sam_comstock_files() {
  wp_enqueue_style( 'val_stencil-webfont', get_template_directory_uri() . '/fonts');
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'style', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/3859f7df67.js');
  wp_enqueue_script( 'nav', get_template_directory_uri() . '/scripts/nav.js', '', false, true);
  wp_enqueue_script( 'masonry-layout', get_template_directory_uri() . '/scripts/masonry-layout.js', '', false, false);
  wp_enqueue_script( 'grid', get_template_directory_uri() . '/scripts/grid.js', ['masonry-layout'], false, true);
}

add_action('wp_enqueue_scripts','sam_comstock_files');

function sam_comstock_features() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  register_nav_menu('mainMenu', 'Main Menu');
}

add_action('after_setup_theme', 'sam_comstock_features');

global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));

?>
