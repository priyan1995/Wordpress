<?php

 


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