<?php
add_theme_support( 'custom-logo' );

function hyperspace_custom_logo_setup() {
  $defaults = array(
  // 'height'      => 100,
  // 'width'       => 400,
  // 'flex-height' => true,
  // 'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'hyperspace_custom_logo_setup' );

 //  the_custom_logo(); frontend logo