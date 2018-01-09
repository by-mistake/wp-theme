<?php

add_theme_support( 'post-thumbnails' ); 

// support menus
function register_bymistake_menus() {
  register_nav_menus(
    array(
      'home.header-menu' => 'Home Header Menu',
      'post.header-menu' => 'Post Header Menu',
    )
  );
}
add_action( 'init', 'register_bymistake_menus' );