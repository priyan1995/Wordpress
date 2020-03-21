



<section class="pd-footer-section">
	 <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/footer-lotus-img.png" class="f-lotus-gold"> -->
	 <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-curve-yellow.png" class="footer-m-curve">
	<div class="container">


<?php
$footer=new WP_Query( array('orderby'=>'date', 'post_type'=>'footer_info', 'order'=>'DESC', 'showposts'=>'1' ));
	if($footer->have_posts()):
			$footer->the_post();

?>
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/footer-lotus-img.png" class="f-lotus-gold">
		   <img src="<?php the_field('footer_logo'); ?>" class="pd-footer-logo">

		<p class="footer-main-para"><?php echo the_field('footer_paragraph'); ?>	</p>
		<div class="row">

	

			<div class="col-lg-3 pd-contact">
				<i class="fas fa-phone"></i>
				<div>
					<h5>Our Phone</h5>
					<p><?php echo the_field('footer_phone'); ?></p>
				</div>
			</div>

			<!-- -------------- -->
			<div class="col-lg-3 pd-contact">
				<i class="fas fa-envelope"></i>
				<div>
					<h5>Our Email</h5>
					<p>	<?php echo the_field('footer_email'); ?></p>
				</div>
			</div>

			<!-- -------------- -->
			
			<div class="col-lg-3 pd-contact pd-map-icon">
				<i class="fas fa-map-marker"></i>
				<div>
					<h5>Our Address</h5>
					<p><?php echo the_field('footer_address'); ?>	</p>
				</div>
			</div>

			<!-- -------------- -->

						<div class="col-lg-3 pd-contact">
				<i class="fas fa-clock"></i>
				<div>
					<h5>Open Hours</h5>
					<p><?php echo the_field('footer_open_hours'); ?>	</p>
				</div>
			</div>

			<!-- -------------- -->




				

		</div>

		<div class="pd-foot-social-icon">
			<a href="<?php echo the_field('footer_facebook_link'); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="<?php echo the_field('footer_inst_link'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="<?php echo the_field('footer_linkedin_link'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
			
		</div>


	</div>
</section>



<?php
endif;
?>

<script>
  AOS.init({
  	once:true
  });
</script>


<?php wp_footer();  ?>
</body>
</html>