<?php 

add_theme_support( 'custom-logo', $defaults );

function register_my_menu() {
    register_nav_menu('primary',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'small-square', 288, 288, true );