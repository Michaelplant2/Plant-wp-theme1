<?php

function plant_theme_support() {
   // Adds dynamic title tag support, WP manages title tags itself.
   add_theme_support('title-tag');
   // Adds dynamic logo support.
   add_theme_support('custom-logo');
   // Adds featured image support in blog posts.
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','plant_theme_support');

function plant_theme_menus() {
   // Adds Menu option in WordPress to add new pages.
   $locations = array(
      'primary' => "Desktop Primary Left Sidebar",
      'footer' => "Footer Menu Items"
   );
   register_nav_menus($locations);
}
add_action('init','plant_theme_menus');

function plant_theme_register_styles() {
   $version = wp_get_theme()->get('Version');
   wp_enqueue_style('planttheme-style', get_template_directory_uri() . "/style.css", array('planttheme-bootstrap'), $version, 'all');
   wp_enqueue_style('planttheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
   wp_enqueue_style('planttheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts','plant_theme_register_styles');

function plant_theme_register_scripts() {
   wp_enqueue_script('planttheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
   wp_enqueue_script('planttheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
   wp_enqueue_script('planttheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
   wp_enqueue_script('planttheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts','plant_theme_register_scripts');

function plant_theme_widget_areas() {
   register_sidebar(
      array(
         'before_title' => '',
         'after_title' => '',
         'before_widget' => '',
         'after_widget' => '',
         'name' => 'Sidebar Area',
         'id' => 'sidebar-1',
         'description' => 'Sidebar Widget Area'
      )
   );

   register_sidebar(
      array(
         'before_title' => '',
         'after_title' => '',
         'before_widget' => '',
         'after_widget' => '',
         'name' => 'Footer Area',
         'id' => 'footer-1',
         'description' => 'Footer Widget Area'
      )
   );
}
add_action('widgets_init', 'plant_theme_widget_areas');

?>