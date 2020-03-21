<?php 

get_header();
the_post();

?>


    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php the_field('banner_image_blog'); ?>);">
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
                        <li class="active">Blog Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<div class="blog-single">
                    	<div class="inner-box">
                        	<div class="image">
                            	<img src="images/resource/news-10.jpg" alt="" />
                                <div class="post-date">08 <span>nov</span></div>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <ul class="post-meta">
                            	<li>
                                    <span class="icon flaticon-user-1"></span>
                                <?php the_author(); ?>
                                </li>
                                <li>
                                    <span class="icon flaticon-speech-bubble"></span>
                                <?php 
                                $post_id = get_the_ID();
                                echo get_comments_number(  $post_id );
                                ?>
                            
                            </li>
                            </ul>
                            <div class="text">
                            	<?php the_content(); ?>
                            </div>
                            
                            <!--post-share-options-->
                            <div class="post-share-options clearfix">
                                <!-- <div class="pull-left tags"><span>Tags:</span><a href="#">Donation</a>, <a href="#">Charity</a>, <a href="#">Fundraising</a></div> -->
                                <div class="pull-left">
                                    <ul class="social-icon-three">
                                        <li class="share">Share:</li>
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Author Box-->
                    <div class="author-box">
                        <div class="inner-box">
                        	<div class="content">
                                <div class="image">
                                    <!-- <img src="" /> -->
                                    <?php echo get_avatar(get_the_author_meta()); ?>
                                </div>
                                <h3><?php echo get_the_author_meta('first_name'); ?>  <?php echo get_the_author_meta('last_name'); ?></h3>
                                <div class="text"><?php echo get_the_author_meta('user_description'); ?></div>
                                <ul class="social-icon-three">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Author Box-->
                    
                    <!--Comments Area-->
                    <div class="comments-area">
                        
                        <div class="sec-title">
                            <h2>Comments</h2>
                        </div>
                        

                        <?php                            
                            $args = array(
                                'status' => 'approve'
                            );
                                                        
                            $comments_query = new WP_Comment_Query;
                            $comments = $comments_query->query( $args );

                            if ( $comments ) {
                                foreach ( $comments as $comment ) {

                        ?>


                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb">
                                    <!-- <img src="images/resource/author-3.jpg" alt=""> -->
                                    <?php
                                    
                                    echo get_avatar(get_the_author_meta()); 
                                    
                                    
                                    ?>
                                </div>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix"><strong><?php echo get_comment_author(); ?> </strong><div class="comment-time"><?php echo get_comment_date(); ?> AT <?php echo get_comment_time(); ?></div></div>
                                    <div class="text"><?php echo $comment->comment_content ?></div>
                                    <!-- <a class="comment-reply" href="#">Reply</a> -->
                                </div>
                            </div>
                        </div>

<?php 
   }
} else {
    echo 'No comments found.';
   }

?>


                        
                    </div>
                    <!--End Comments Area-->
                    
                    <!-- Comment Form -->
                    <div class="comment-form">
                        <!-- <div class="group-title"><h2>Leave Your Comments</h2></div> -->
                        <!--Comment Form-->

                        <?php comment_form(); ?>

                        <!-- <form method="post" action="http://html.efforttech.com/html/charitypoint/blog.html">
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="text" placeholder="Subject" required>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Your Comments"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">Comments Post</button>
                                </div>
                                
                            </div>
                        </form> -->
                            
                    </div>
                    <!--End Comment Form --> 
                    
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						
                        <!--Category Blog-->
                        <!-- <div class="sidebar-widget categories-blog">
                        	<div class="sidebar-title">
                            	<h2>Categories</h2>
                            </div>
                            <div class="inner-box">
                                <ul>
                                    <li><a href="#">Education <span>15</span></a></li>
                                    <li><a href="#">Foods <span>24</span></a></li>
                                    <li><a href="#">Homeless <span>30</span></a></li>
                                    <li><a href="#">Clean Water <span>45</span></a></li>
                                    <li><a href="#">Cloth <span>18</span></a></li>
                                </ul>
                            </div>
                        </div> -->
                        
                        
                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
							<div class="sidebar-title">
                            	<h2>Update News</h2>
                            </div>
                            <div class="inner-box">


                            <?php

                            $blog=new WP_Query( array('orderby'=>'date', 'post_type'=>'ds_blog', 'order'=>'DESC', 'showposts'=>'4' ));
                                if($blog->have_posts()):
                                    while ($blog->have_posts()):
                                        $blog->the_post();
                            ?>       

                                <article class="post">
                                    <figure class="post-thumb"><a href="<?php the_permalink(); ?>"><img src="<?php the_field('thumbnail_image'); ?>" alt=""></a></figure>
                                    <div class="text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <div class="">- <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?></div>
                                </article>

                                <?php 
                                endwhile;
                                endif;
                                wp_reset_query();
                                ?>                        
                          
                            </div>
						</div>
                        
                        
                        <!--Archive List-->
                        <!-- <div class="sidebar-widget">
                        	<div class="sidebar-title">
                            	<h2>Project Archives</h2>
                            </div>
                            <ul class="archive-list">
                                <li><a href="#">October <span>2014</span></a></li>
                                <li><a href="#">December<span>2015</span></a></li>
                                <li><a href="#">August <span>2016</span></a></li>
                                <li><a href="#">February <span>2017</span></a></li>
                            </ul>
                        </div> -->
                        
                        
                        <!--Newsletter Widget-->
                        <div class="sidebar-widget newsletter-widget">
                        	<div class="inner-box">
                            	<div class="sidebar-title">
                                    <h2>News Letter</h2>
                                </div>
                                <div class="text">Those were the days and we'll do it our way yes our way. Make our dreams come true for me.</div>
                                
                                <!-- Search -->
                                <div class="sidebar-newsletter-box">
                                    <form method="post" action="http://html.efforttech.com/html/charitypoint/contact.html">
                                        <div class="form-group">
                                            <input type="email" name="email-field" value="" placeholder="Email....." required>
                                            <button type="submit"><span class="icon flaticon-symbol"></span></button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
    
    <!--Clients Section-->
    <!-- <section class="clients-section" style="background-image:url(images/background/1.jpg)">
        <div class="auto-container">
            
            <div class="sponsors-outer">
            <?php
                    // $client=new WP_Query( array('orderby'=>'date', 'post_type'=>'client', 'order'=>'DESC', 'showposts'=>'50' ));
                    // if($client->have_posts()):
                    // while ($client->have_posts()):
                    //     $client->the_post();
                    ?>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php //the_field('image'); ?>" ></a></figure></li>                

                <?php 
                // endwhile;
                // endif;
                // wp_reset_query();
                ?>

            </div>
            
        </div>
    </section> -->
    <!--End Clients Section-->






<?php 
get_footer();
?>