
<!doctype html>
<html <?php language_attributes(); ?> style="margin-top:0 !important">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  AOS  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

      <!-- ========font awesome ====== -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900,900i&display=swap" rel="stylesheet">

    <!-- faveicon -->
      <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/fave.png" type="image/png" sizes="16x16">


    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
   <div class="wrapper">
    <div class="header">
        <div class="header-wrap">
          <div class="container-fluid pd-top-bar">

            </div>

          <div class="container pd-menu-bar">
            <div class="row">
                <div class="col-md-2 col-2">
                   <div class="logo-wrap">
                       <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                           <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_White.png"/>
                      </a>
                  </div> 
                </div>
                <div class="col-md-10 col-10">

<!-- ============= top bar =========== -->






      <nav class="navbar navbar-expand-lg navbar-dark " id="pd_fixed_nav"> 



  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


       <div class="main-menu-wrap collapse navbar-collapse" id="navbarSupportedContent">
                  <?php
                   wp_nav_menu(
                      array(
                        'depth'       => 10,
                        'theme_location'  => 'primary',
                        'container_class' => 'false',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                      )
                    ); 
                    ?>

                  <div class=" mob-show">
                   <button type="button" class="pd-book-now-btn" data-toggle="modal" data-target="#exampleModal">
  Book Now
</button>
                  </div>

<!-- ============== book now model =========== -->


<!--  -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">

<div class="row">

  <div class="col-lg-5"> 
    <h2>  Book Now</h2>
    <?php echo do_shortcode('[contact-form-7 id="134" title="Book Now Form"]'); ?>
      
    </div>
  <div class="col-lg-7 pd-form-right-back"></div>
</div>
       


      </div>
  
    </div>
  </div>
</div>





<!-- ================== model end ================ -->


          </div>

<!-- 
                  <div class="pd-req-demo-btn">
                    <a href="<?php //bloginfo('template_directory'); ?>/home/#contactSectionScroll">Request a Demo</a>
                  </div> -->
   </nav> 


    <div class="header-background">
     </div>
    
      </div>
             
            </div>
          </div>
        </div>
    </div>


<div class="pd-floating-phone">
<a href="tel:0111234567"><i class="fa fa-phone"></i> Call Us</a>
</div>





