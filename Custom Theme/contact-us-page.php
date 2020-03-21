<?php
/*
Template Name: Contact Us Page

*/

get_header();
?>

<section class="pd-contact-header">
		<img class="d-block w-100" src="<?php echo the_field('contact_us_page_header'); ?>">
	<h1><?php echo the_title(); ?></h1>
	<!-- <img src="<?php //bloginfo('template_directory'); ?>/assets/img/logo_White-wawe.png" class="pd-slider-lotus-white"> -->
	 <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-curve.png" class="header-m-curve">
</section>

<!-- ================= contact  form sec =============== -->
<section class="pd-cont-form-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 pd-cont-info">

				<div class="pd-flex">
				<i class="fas fa-map-marker"></i>
				<div>
				<h4>Address</h4>
				<p><?php echo the_field('address'); ?></p>	
				</div>
				</div>

				<br>

				<div class="pd-flex">
				<i class="fas fa-phone"></i>
				<div>
				<h4>Phone</h4>
				<p><?php echo the_field('phone'); ?></p>	
				</div>
				</div>

				<br>


			<div class="pd-flex">
				<i class="fas fa-envelope"></i>
				<div>
				<h4>Email</h4>
				<p><?php echo the_field('email'); ?></p>	
				</div>
				</div>

				<br>


<div class="pd-map-cont" >
<iframe src="<?php echo the_field('google_map'); ?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>


			</div>
			

<div class="col-lg-8 pd-cont-form" data-aos="fade-up" data-aos-duration="1500">
	<?php echo do_shortcode('[contact-form-7 id="21" title="Contact Page Form"]'); ?>
</div>





			</div>
		</div>
	</div>
</section>



<?php

get_footer();

?>