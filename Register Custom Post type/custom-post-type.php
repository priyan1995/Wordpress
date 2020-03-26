<?php

//register custom post types
function register_custom_post_types(){
  // Hotels no archive
  register_post_type('hotels', array(
      'labels' => array(
          'name' => 'Hotels',
          'singular_name' => 'Hotel',
          'add_new_item' => 'Add New Hotel',
          'edit_item' => 'Edit Hotel',
      ),
      'description' => 'Hotel',
      'public' => true,
      'menu_position' => 20,
      'supports' => array('title','excerpt'),
      'has_archive'=>false
  ));
 
}
add_action('init','register_custom_post_types');