<?php

 include_once('inc/class-wp-bootstrap-navwalker.php');

// Register Resources
function ds_charity() {
	wp_register_style( 'stylesheet', get_stylesheet_uri() );

	 wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
	 wp_register_style( 'settings-css', get_template_directory_uri() . '/plugins/revolution/css/settings.css' );
	 wp_register_style( 'layers-css', get_template_directory_uri() . '/plugins/revolution/css/layers.css' );
	 wp_register_style( 'navigation-css', get_template_directory_uri() . '/plugins/revolution/css/navigation.css' );
	 wp_register_style( 'theme-style-css', get_template_directory_uri() . '/css/style.css' );
	 wp_register_style( 'theme-responsive-css', get_template_directory_uri() . '/css/responsive.css' );
	 wp_register_style( 'theme-mokup-css', get_template_directory_uri() . '/css/color-switcher-design.css' );
	 wp_register_style( 'theme-theme-css', get_template_directory_uri() . '/css/color-themes/default-theme.css' );
	
	
	 // wp_register_style('owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	// wp_register_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	

	// wp_enqueue_style('owl-css');
	// wp_enqueue_style('owl-theme-css');
	// wp_enqueue_style( 'bootstrap-css' );	
	// wp_enqueue_style( 'aos-css' );

	wp_enqueue_style( 'stylesheet' );


	wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_style( 'settings-css' );
	wp_enqueue_style( 'styllayers-cssesheet' );
	wp_enqueue_style( 'navigation-css' );
	wp_enqueue_style( 'theme-style-css' );
	wp_enqueue_style( 'stytheme-responsive-csslesheet' );

	wp_enqueue_style( 'theme-mokup-css' );
	wp_enqueue_style( 'theme-theme-css' );


	// ===============================


	







	wp_register_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.js', array('jquery'), '1.1', true );

	wp_register_script( 'jquery-rev-js', get_template_directory_uri() . '/plugins/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'jquery-themepunch-js', get_template_directory_uri() . '/plugins/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'rev-actions-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.actions.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'rev-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.carousel.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'kenburn-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'layeranimation-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'migration-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.migration.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'navigation-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'parallax-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'slideani-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'video-js', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.video.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'main-slider-js', get_template_directory_uri() . '/js/main-slider-script.js', array('jquery'), '1.1', true );

	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.1', true );

	wp_register_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.js', array('jquery'), '1.1', true );

	wp_register_script( 'fancybook-js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '1.1', true );

	wp_register_script( 'facybook-media-js', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array('jquery'), '1.1', true );

	wp_register_script( 'owl-js', get_template_directory_uri() . '/js/owl.js', array('jquery'), '1.1', true );

	wp_register_script( 'wow-js', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.1', true );

	wp_register_script( 'appear-js', get_template_directory_uri() . '/js/appear.js', array('jquery'), '1.1', true );

	wp_register_script( 'script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.1', true );



	wp_register_script( 'map-script-js', get_template_directory_uri() . '/js/map-script.js', array('jquery'), '1.1', true );

	wp_register_script( 'color-js', get_template_directory_uri() . '/js/color-settings.js', array('jquery'), '1.1', true );



// ========================================================


wp_enqueue_script( 'jquery-js' );
wp_enqueue_script( 'jquery-rev-js' );
wp_enqueue_script( 'jquery-themepunch-js' );
wp_enqueue_script( 'rev-actions-js' );
wp_enqueue_script( 'rev-js' );
wp_enqueue_script( 'kenburn-js' );
wp_enqueue_script( 'layeranimation-js' );
wp_enqueue_script( 'migration-js' );
wp_enqueue_script( 'navigation-js' );
wp_enqueue_script( 'parallax-js' );
wp_enqueue_script( 'slideani-js' );
wp_enqueue_script( 'video-js' );
wp_enqueue_script( 'main-slider-js' );
wp_enqueue_script( 'bootstrap-js' );
wp_enqueue_script( 'isotope-js' );
wp_enqueue_script( 'fancybook-js' );
wp_enqueue_script( 'facybook-media-js' );
wp_enqueue_script( 'owl-js' );
wp_enqueue_script( 'wow-js' );
wp_enqueue_script( 'appear-js' );
wp_enqueue_script( 'script-js' );

wp_enqueue_script( 'map-script-js' );
wp_enqueue_script( 'color-js' );




	// wp_register_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.1', true );
	// wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1', true );


	// wp_enqueue_script( 'jquery' );
	// wp_enqueue_script( 'bootstrap-js' );
	// wp_enqueue_script('owl-js');
	// wp_enqueue_script('main-js');


}
add_action( 'wp_enqueue_scripts', 'ds_charity' );

// Menus
add_action( 'after_setup_theme', 'register_nero_primary_menu' );
function register_nero_primary_menu() {
	register_nav_menus(array( 
		'primary'	=> 	__( 'Primary Menu', 'ds_charity' ),
		'footer'	=>	__( 'Footer Menu', 'ds_charity' )

	 ));
}



// ============ change WP Logo

function custom_login_logo() {
	?>
	<style type="text/css">
	body.login div#login h1 a {
	background-image: url('http://localhost/charity/wp-content/uploads/2020/02/diana-macesanu-fvPfMJL2wKw-unsplash-scaled.jpg'); //Add the URL of your custom logo between the single quotes
	padding-bottom: 30px;
	}

	.login{
		background-image:url('<?php echo bloginfo('template_url'); ?>/images/login-img.jpg');
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		color:white;
	}

	.login a{
		color:white !important;
	}

	.login form{
		background: #000000a6 !important;
    border: none !important;
	box-shadow: 0px 0px 11px black !important;
	color:white !important;
	}

	.wp-core-ui p .button{
	    background: #aa1f43;
    border: none;
    border-radius: 0;	
	}

	.login #login_error, .login .message, .login .success{
		background-color: #2b2b2b !important;	
	}

	</style>
	<?php
	} add_action( 'login_enqueue_scripts', 'custom_login_logo' );


// ======= character limit 

add_filter($content, "plugin_myContentFilter");

function plugin_myContentFilter($content)
{
  // Take the existing content and return a subset of it
  return substr($content, 0, 90) . '...';
}





	// ------------- widget  area -------------

//  Footer description
	function dscharity_footer() {

		register_sidebar(
			array(
				'name'          => __( 'Footer', 'dscharity' ),
				'id'            => 'footer-desc',
				'description'   => __( 'Add widgets here to appear in your footer.', 'dscharity' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);	
	}

// social media links 
	function dscharity_footer_social() {

		register_sidebar(
			array(
				'name'          => __( 'Footer Social Links', 'dscharity' ),
				'id'            => 'footer-social',
				'description'   => __( 'Add widgets here to appear in your footer.', 'dscharity' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);	
	}	
	add_action( 'widgets_init', 'dscharity_footer' );
	add_action( 'widgets_init', 'dscharity_footer_social' );



	// ================ acf function ==============

// 	add_action('acf/init', 'my_acf_form_init');
// function my_acf_form_init() {

   
//     if( function_exists('acf_register_form') ) {

       
//         acf_register_form(array(
//             'id'       => 'new-event',
//             'post_id'  => 'new_post',
//             'new_post' => array(
//                 'post_type'   => 'event',
//                 'post_status' => 'publish',
//             ),
//             'post_title'  => true,
// 			'post_content'=> false,
// 			'fields' => false,
//         ));
//     }
// }



add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="twitter">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter username.</span>
			</td>
		</tr>

		<!-- ---------- -->

		<tr>
			<th><label for="twitter">Facebook</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Facebook username.</span>
			</td>
		</tr>

	</table>
<?php }