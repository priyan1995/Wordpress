<?php
/*
Template Name: Home Page Template
*/
get_header();
?>
<!-- =======home slider====== -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

<!-- ======================== -->
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo the_field('slider_image_1'); ?>" alt="First slide">
   <div class="carousel-caption d-none  d-md-block">
    <h5><?php echo the_field('slider_1_heading'); ?></h5>
    <p><?php echo the_field('slider_1_paragraph'); ?></p>

    <a href="about-us">Read More</a>
  </div>
    </div>
<!-- ========================= -->
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo the_field('slider_image_2'); ?>" alt="Second slide">
   
     <div class="carousel-caption d-none  d-md-block">
    <h5><?php echo the_field('slider_2_heading'); ?></h5>
    <p><?php echo the_field('slider_2_paragraph'); ?></p>

    <a href="treatments">Read More</a>
  </div> 
    </div>
<!-- ====================== -->
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo the_field('slider_image_3'); ?>" alt="Third slide">
   <div class="carousel-caption d-none  d-md-block">
    <h5><?php echo the_field('slider_3_heading'); ?></h5>
    <p><?php echo the_field('slider_3_paragraph'); ?></p>
    <a href="about-us">Read More</a>
  </div>
    </div>
<!-- ====================== -->
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo the_field('slider_image_4'); ?>" alt="Third slide">
   <div class="carousel-caption  d-none d-md-block">
    <h5><?php echo the_field('slider_4_heading'); ?></h5>
    <p><?php echo the_field('slider_4_paragraph'); ?></p>
    <a href="treatments">Read More</a>
  </div>
    </div>
<!-- ======================= -->

    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo the_field('slider_image_5'); ?>" alt="Third slide">
   <div class="carousel-caption d-none  d-md-block">
    <h5><?php echo the_field('slider_5_heading'); ?></h5>
    <p><?php echo the_field('slider_5_paragraph'); ?></p>
    <a href="about-us">Read More</a>
  </div>
    </div>
<!-- ======================= -->



  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
 <img src="<?php bloginfo('template_directory'); ?>/assets/img/main-curve.png" class="header-m-curve">

<!-- ====================== home slider end =============== -->

<section class="pd-intro-sec"> 
   <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_White-wawe.png" class="pd-slider-lotus-white">
   <img src="<?php bloginfo('template_directory'); ?>/assets/img/background-sec-1.png" class="int-flower-line"> 

  <div class="container">
  <div class="row">

            <div class="col-lg-4">
              <h5 data-aos="fade-up" data-aos-duration="500">Sanito Spa</h5>
              <h2 data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">Here is a wide range of <span>services we provide</span>  </h2>
              <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="500"><?php echo the_field('wide_range_of_services'); ?></p>
            </div>

              <div class="col-lg-8">
                <!-- ================ -->

           <div class="owl-carousel owl-theme" id="pd-intro-slider" data-aos="fade-up" data-aos-duration="500">
<?php
  $service=new WP_Query( array('orderby'=>'date', 'post_type'=>'services', 'order'=>'DESC', 'showposts'=>'50' ));
  if($service->have_posts()):
   while ($service->have_posts()):
     $service->the_post();
?>


              <div class="item">
                  <div class="pd-card-serv-home">
                    <img src="<?php the_field('serv_image'); ?>" class="img-fluid">
                    <h2><?php echo the_title(); ?></h2>

                    <div class="pd-hover-display-home">
                      <h3><?php echo the_title(); ?></h3>
                      <p><?php echo the_field('short_description'); ?></p>
                      <a href="<?php echo get_permalink(); ?>">View More</a>
                    </div>


                  </div>               
              </div>

 
 <?php
endwhile;
endif;
wp_reset_query();
?>

                
              </div>
              </div>
 
    </div>
   

  </div>
</section>

<!-- ==================================== -->





<section class="pd-welcome-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="700">

        <div class="pd-video-play">
          <button type="button" data-toggle="modal" data-target="#exampleModal-video"><i class="fa fa-play"></i></button>
</div>
<!-- Modal -->
<!-- Button trigger modal -->


      

        <img src="<?php echo the_field('welcome_section_image'); ?>">
      </div>
      <div class="col-lg-7 pd-desc" data-aos="zoom-in" data-aos-duration="700" datta-aos-delay="200">
        <h6>Welcome</h6>
        <h2><?php echo the_field('home_welcome_sectiontitle'); ?> </h2>
        <p><?php echo the_field('home_welcome_section'); ?></p>
        <a href="about-us">Read More</a>
      </div>
    </div>
  </div>

</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <iframe width="560" height="315" src="<?php the_field('home_page_video_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>

<!-- ========== model end -->



<!-- ================ section why Choose us ============= -->

<section class="pd-why-choose-sec">
     <img src="<?php bloginfo('template_directory'); ?>/assets/img/rose-leaves.png" class="w-c-rose-leaves"> 
    
  <div class="container">
     <img src="<?php bloginfo('template_directory'); ?>/assets/img/lotus-gold.png" class="w-c-lotus-gold">    
    <h2>Why Choose Us</h2>
    <p class="pd-main-para"><?php echo the_field('why_choose_us_paragraph'); ?> </p>

    <div class="row">
      <div class="col-lg-6 pd-image-sec" data-aos="fade-up" data-aos-duration="1500">
         <img src="<?php echo the_field('why_choose_us_image'); ?>" class="">    
      </div>
      <div class="col-lg-6 row pd-desc-sec">

        <div class="col-lg-6" data-aos="flip-up" data-aos-duration="700" datta-aos-delay="">          
        <img src="<?php echo the_field('why_choose_card_1_icon'); ?>" class="">    
          <h3><?php echo the_field('why_choose_card_1_Title'); ?></h3>
          <p><?php echo the_field('why_choose_us_card_1_description'); ?> </p>
        </div>

        <div class="col-lg-6" data-aos="flip-up" data-aos-duration="700" datta-aos-delay="200">
        <img src="<?php echo the_field('why_choose_card_2_icon'); ?>" class=""> 
          <h3><?php echo the_field('why_choose_card_2_Title'); ?></h3>
          <p><?php echo the_field('why_choose_us_card_2_description'); ?> </p>
        </div>


        <div class="col-lg-6" data-aos="flip-up" data-aos-duration="700" datta-aos-delay="400">
        <img src="<?php echo the_field('why_choose_card_3_icon'); ?>" class=""> 
          <h3><?php echo the_field('why_choose_card_3_Title'); ?></h3>
          <p><?php echo the_field('why_choose_us_card_3_description'); ?> </p>
        </div>


          <div class="col-lg-6" data-aos="flip-up" data-aos-duration="700" datta-aos-delay="600">
        <img src="<?php echo the_field('why_choose_card_4_icon'); ?>" class=""> 
          <h3><?php echo the_field('why_choose_card_4_Title'); ?></h3>
          <p><?php echo the_field('why_choose_us_card_4_description'); ?></p>
        </div>


      </div>
    </div>



  </div>
</section>


<!-- =========== Testimonial section ========= -->
<section class="pd-testimonial-sec">
   <img src="<?php bloginfo('template_directory'); ?>/assets/img/flower-line-2.png" class="t-flower-line-2"> 
   <img src="<?php bloginfo('template_directory'); ?>/assets/img/6-back.png" class="t-spa-stones">
  <div class="container">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/lotus-gold.png" class="t-lotus-gold">
    <h2>Our Testimonial</h2>

    <div class="pd-testi-slider">
      <div class="owl-carousel owl-theme" id="pd-testi-slider">

<?php
  $testimonial=new WP_Query( array('orderby'=>'date', 'post_type'=>'testimonials', 'order'=>'DESC', 'showposts'=>'50' ));
  if($testimonial->have_posts()):
   while ($testimonial->have_posts()):
     $testimonial->the_post();
?>

        <div class="item">
          <img src="<?php echo the_field('image'); ?>" class="test-avat"> 
          <p><?php the_content(); ?></p>
          <h3><?php echo the_title(); ?></h3>
        </div>

<?php
endwhile;
endif;
wp_reset_query();
?>


      </div>
    </div>

  </div>
  <img src="<?php echo the_field('testimonial_main_image'); ?>" class="testi-back"  data-aos="fade-up" data-aos-duration="1500" > 
</section>

<!-- ================== open hours section ============== -->

<section class="pd-opoen-hours">
  <div class="container">
    <div class="row">
      <div class="col-lg-5" data-aos="fade-up" data-aos-duration="1000">
        <h3>Open Hours</h3>
        <p><?php echo the_field('open_hours_desc'); ?></p>

        <ul>
          <li><?php echo the_field('open_hours_week'); ?></li>
  <!--         <li><?php echo the_field('open_hours_saturday'); ?></li>
          <li><?php echo the_field('open_hours_sunday'); ?></li> -->
        </ul>

 <div class="">
  <a type="button" class="pd-book-now-btn" data-toggle="modal" data-target="#open-house-form">
  Book Now
</a>
  </div>




<!-- ================== model end ================ -->






<!-- ================== model end ================ -->



      </div>
      <div class="col-lg-7" data-aos="fade-up" data-aos-duration="1000">
          <img src="<?php echo the_field('open_hours_image'); ?>" class="testi-back"> 
      </div>
    </div>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="open-house-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">

<div class="row">

  <div class="col-lg-5 "> 
    <h2>  Book Now</h2>
    <?php echo do_shortcode('[contact-form-7 id="134" title="Book Now Form"]'); ?>
      
    </div>
  <div class="col-lg-7  pd-form-right-back"></div>
</div>
       


      </div>
  
    </div>
  </div>
</div>








<?php 

get_footer();
?>