<?php
/*
Template Name:Services Page

*/
get_header();

?>
<section class="pd-about-header">
	<img class="d-block w-100" src="<?php echo the_field('heading_image') ?>">
	<h1><?php echo the_title(); ?></h1>
<!-- 	<img src="<?php //bloginfo('template_directory'); ?>/assets/img/logo_White-wawe.png" class="pd-slider-lotus-white"> -->
	 <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-curve.png" class="header-m-curve">
</section>

<!-- ============ body content ======== -->

<section class="pd-services-inner-body">
	<div class="container">
		<div class="row">

<?php
	$counter=0;
  $service=new WP_Query( array('orderby'=>'date', 'post_type'=>'services', 'order'=>'DESC', 'showposts'=>'50' ));
  if($service->have_posts()):
   while ($service->have_posts()):
     $service->the_post();
     $counter=$counter+100;

?>



			<div class="col-lg-4" data-aos="flip-right" data-aos-delay="<?php echo $counter ?>">
				<div class="pd-card-serv">
					<img src="<?php the_field('serv_image'); ?>" class="img-fluid">
					<h2><?php echo the_title(); ?></h2>

					<div class="pd-hover-display">
						<h3><?php echo the_title(); ?></h3>
						<p><?php echo the_field('short_description'); ?></p>
						<a href="<?php echo get_permalink(); ?>">View More</a>
					</div>


				</div>
			</div>


<?php
endwhile;
endif;
?>




		</div>
	</div>
</section>



<?php
get_footer();
?>