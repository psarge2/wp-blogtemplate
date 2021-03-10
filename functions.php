<?php


function blogtemplate_theme_support(){
  //Adds dynamic title tag support
 add_theme_support('title-tag'); 
 //add logo from customize 
 add_theme_support('custom-logo');
 //add thumbnails to blog posts
 add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'blogtemplate_theme_support');

//MENUS
function blogtemplate_menus(){

  $locations = array(
    'primary' => "Desktop Primary Left Sidebar",
    'footer' => "Footer Menu Items"
  );

  register_nav_menus($locations);
}

add_action('init', 'blogtemplate_menus');

//SCRIPTS
function blogtemplate_register_styles(){

  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('blogtemplate-style', get_template_directory_uri() . "/style.css", array('blogtemplate-bootstrap'), $version, 'all');
  wp_enqueue_style('blogtemplate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('blogtemplate-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');


}

add_action( 'wp_enqueue_scripts', 'blogtemplate_register_styles' );


function blogtemplate_register_scripts(){

  $version = wp_get_theme()->get( 'Version' );
  
  wp_enqueue_style('blogtemplate-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', 'true');
  wp_enqueue_style('blogtemplate-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', 'true');
  wp_enqueue_style('blogtemplate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', 'true');
  wp_enqueue_style('blogtemplate-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, 'true');


}

add_action( 'wp_enqueue_scripts', 'blogtemplate_register_scripts' );

?>