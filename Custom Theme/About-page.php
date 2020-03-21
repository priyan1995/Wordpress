<?php
/*
Template Name:About Page
*/
get_header();



?>

<section class="pd-about-header">
	<img class="d-block w-100" src="<?php echo the_field('header_image') ?>">
	<h1><?php echo the_title(); ?></h1>
	<!--  <img src="<?php// bloginfo('template_directory'); ?>/assets/img/logo_White-wawe.png" class="pd-slider-lotus-white"> -->
	 <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-curve.png" class="header-m-curve">

</section>

<!-- ============= -->

<section class="pd-about-main-sec">
	<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/about-back-we-strive.png" class="w-s-flowe-line-3"> -->
	<div class="container">
		<div class="row">
		<div class="col-lg-6 pd-img-sec" data-aos="fade-up" data-aos-duration="1500">
			<img src="<?php echo the_field('about_image'); ?>" >
		 </div>
		<div class="col-lg-6 pd-desc-sec" data-aos="fade-up" data-aos-duration="1500">
			  <img src="<?php bloginfo('template_directory'); ?>/assets/img/lotus-gold.png" class="ab-lotus-gold">   
			<h2>About Santino SPa</h2>
			<p><?php echo the_field('about_description'); ?></p>
		</div>	
		</div>
	</div>
</section>

<!-- ============= we strive section ============= -->

<section class="pd-we-strive-sec">

	<div class="container">
		<div class="row">
			<div class="col-lg-6  pd-desc-sec" data-aos="zoom-in" data-aos-delay="">
				 <img src="<?php bloginfo('template_directory'); ?>/assets/img/lotus-gold.png" class="ab-vs-lotus-gold">  
				<h2>We Strive to...</h2>
				<p><?php echo the_field('we_strive_to'); ?></p>
			</div>
			<div class="col-lg-6 pd-slider-sec" data-aos="zoom-in" data-aos-delay="200">

		     <img src="<?php the_field('we_strive_image'); ?>">

			</div>
		</div>
	</div>
</section>




<?php
get_footer();
?>