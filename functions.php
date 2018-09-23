<?php 

add_theme_support( 'custom-logo', $defaults );

function register_my_menu() {
    register_nav_menu('primary',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );