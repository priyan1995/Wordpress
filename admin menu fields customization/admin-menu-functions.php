<?php

// /////////////////////// remove unwanted items from admin menu

// removed default wordpress post from admin menu
function remove_default_blog()
{
	remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_default_blog');


function remove_menus()
{
	if (!(current_user_can('administrator'))) :
		remove_menu_page('edit-comments.php');

	endif;
}
add_action('admin_menu', 'remove_menus');

/* Remove Contact Form 7 Links from dashboard menu items if not admin */
if (!(current_user_can('administrator'))) {
	function remove_wpcf7()
	{
		remove_menu_page('wpcf7');
	}
	add_action('admin_menu', 'remove_wpcf7');
}

// remove tools from admin menu
add_action('admin_menu', 'wpse26980_remove_tools', 99);
function wpse26980_remove_tools()
{
	if (!current_user_can('administrator')) :
		remove_menu_page('tools.php');
	endif;
}

// ============ hide post type
function remove_blog()
{
	if (!current_user_can('administrator')) :
		remove_menu_page('edit.php?post_type=uncategorized');
	endif;
}
add_action('admin_menu', 'remove_blog');


function remove_testimonial()
{
	if (!current_user_can('administrator')) :
		remove_menu_page('edit.php?post_type=testimonial');
	endif;
}
add_action('admin_menu', 'remove_testimonial');

function remove_volunteers()
{
	if (!current_user_can('administrator')) :
		remove_menu_page('edit.php?post_type=volunteers');
	endif;
}
add_action('admin_menu', 'remove_volunteers');


function remove_clients()
{
	if (!current_user_can('administrator')) :
		remove_menu_page('edit.php?post_type=client');
	endif;
}
add_action('admin_menu', 'remove_clients');

function remove_blogs()
{
	if (!current_user_can('administrator')) :
		remove_menu_page('edit.php?post_type=ds_blog');
	endif;
}
add_action('admin_menu', 'remove_blogs');

//  hide events from subscriber

function remove_events_from_subscriber()
{
	if (current_user_can('subscriber')) :
		remove_menu_page('edit.php?post_type=events');
	endif;
}
add_action('admin_menu', 'remove_events_from_subscriber');


