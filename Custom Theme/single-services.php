<?php

get_header();
 if(have_posts()):
 	the_post();
?>

<section class="pd-about-header">
	<img class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/home-slider-img-2.png" ">
	<h1><?php echo the_title(); ?></h1>
	<!-- <img src="<?php// bloginfo('template_directory'); ?>/assets/img/logo_White-wawe.png" class="pd-slider-lotus-white"> -->
	 <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-curve.png" class="header-m-curve">
</section>

<!-- =============== -->

<section class="pd-section-service">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 pd-img-sec">
				 <img src="<?php the_field('serv_image')?>" class="">
			</div>
			<div class="col-lg-7 pd-content-sec">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/lotus-gold.png" class="w-c-lotus-gold">    
				<h2><?php the_title(); ?> </h2>
				<p><?php echo the_content(); ?></p>
			</div>
		</div>
	</div>
</section>




<?php
endif;
get_footer();

?>