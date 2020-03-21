<?php 
/*
Template Name: Blog Page
*/
get_header();
?>

<?php 

    // while ( have_posts() ) {
    //     the_post(); 
    //      the_title(); 
    //      the_author();
    //      the_time();

    //      comment_form();

    //      get_comments( array('post_id' => $post->ID, 'status' => 'approve') );

    // }

   


?>





<!--Page Title-->
<section class="page-title" style="background-image:url(<?php the_field('banner_image'); ?>">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title -->
            	<div class="title-column col-md-6 col-sm-8 col-xs-12">
                	<h1><?php the_title(); ?></h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/charity">Home</a></li>
                        <li class="active">Blog </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Blog Page Section-->
    <section class="blog-page-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
            	

     <?php

        $blog=new WP_Query( array('orderby'=>'date', 'post_type'=>'ds_blog', 'order'=>'DESC', 'showposts'=>'50' ));
            if($blog->have_posts()):
                while ($blog->have_posts()):
                    $blog->the_post();
    
    ?>
                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php the_field('thumbnail_image'); ?>" alt="" />
                            <a href="<?php the_permalink(); ?>" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                        </div>
                        <div class="lower-content">
                        	<!-- <div class="post-date">06<span>oct</span></div> -->
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                            <ul class="post-meta">
                            	<li><a href="<?php the_permalink(); ?>"><span class="icon flaticon-user-1"></span><?php the_author(); ?></a></li>
                                <li><a href="<?php the_permalink(); ?>"><span class="icon flaticon-speech-bubble">
                                </span>
                                
                                <?php 
                                $post_id = get_the_ID();
                                echo get_comments_number(  $post_id );
                                ?>
                                                                
                                </a></li>
                            </ul>
                            <div class="text"><?php                             
                             $cont = get_the_content();                              
                             echo plugin_myContentFilter($cont);  
                            
                            ?></div>
                        </div>
                    </div>
                </div>


                
        <?php 
        endwhile;
        endif;
        wp_reset_query();
        ?>

               
                
            </div>
            
            <!--Styled Pagination-->
            <!-- <div class="text-center">
                <div class="styled-pagination">
                    <ul class="clearfix">
                        <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#" class="active">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div>
            </div> -->
            <!--End Styled Pagination-->
            
        </div>
    </section>
    <!--End Blog Page Section-->
    
    <!--Clients Section-->
    <section class="clients-section" style="background-image:url(<?php bloginfo('template_url'); ?>/images/background/1.jpg)">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                <?php
                    $client=new WP_Query( array('orderby'=>'date', 'post_type'=>'client', 'order'=>'DESC', 'showposts'=>'50' ));
                    if($client->have_posts()):
                    while ($client->have_posts()):
                        $client->the_post();
                    ?>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php the_field('image'); ?>" ></a></figure></li>                

                <?php 
                endwhile;
                endif;
                wp_reset_query();
                ?>

                </ul>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->



<?php 
get_footer();
?>