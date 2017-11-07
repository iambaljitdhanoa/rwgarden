<?php 
	/* template name: Home page  */ 
	get_header();
	global $post;
$post_id=$post->ID;?> 
<?php
	$image3 = get_post_meta($post->ID,"inner_banner",true);
	$aggregate_image = wp_get_attachment_image_src($image3,'full');
	$url = $aggregate_image['0'];
	
?> 

    <div class="banner" style="background-image:url(<?php echo $url;?>);">
        <div class="container">
            <div class="bnner-inner">
                <div class="banner-text"> 
                    <strong><?php echo $brief_insight = get_field("banner_text");?> </strong>
                </div>
            </div>
        </div>
    </div>
	
  <section class="designing-sec">
        <div class="social-icons">
            <ul>
                <li><a href="<?php echo $facebook_link = get_field("facebook",'option'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $twitter = get_field("twitter",'option'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $pinterest = get_field("pinterest",'option'); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $googleplus = get_field("googleplus",'option'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $youtube = get_field("youtube",'option'); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 lftdiv">
                   <?php  
							
							while (have_posts()) : the_post(); 
							$post_id=$post->ID;
							the_content();
							
						endwhile; wp_reset_query();?>
                    <div class="main-btn"> <a href="<?php bloginfo("url"); ?>/contact">Contact us</a> </div>
                </div>
                <div class="col-md-6 rytdiv">
                    <div class="theme-sec">
                        <div class="img-div">
						<?php
						$profile_image = get_post_meta($post->ID,"profile_image",true);
						$aggregate_image = wp_get_attachment_image_src($profile_image,'full');
						
						$urld = $aggregate_image['0'];
							if(!empty($urld)) 
							{
								?>
						

                            <a href="<?php bloginfo("url"); ?>/profile"> <img src="<?php echo $urld;?>" alt="<?php the_title();?>" />
							<?php
							}
							?>
                                <div class="hover-div">
                                    <div class="border-dv"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="theme-text">
                           <?php echo $profile = get_field("profile",$page_id);?> <a href="<?php bloginfo("url"); ?>/profile">read more <i class="fa fa-caret-right" aria-hidden="true"></i></a> </div>
                    </div>
                    <div class="theme-sec">
                        <div class="img-div">
                            <a href="<?php bloginfo("url"); ?>/garden"><?php
	                    $garden_image = get_post_meta($post->ID,"garden_image",true);
						$aggregate_image = wp_get_attachment_image_src($garden_image,'full');
						
						$urlr = $aggregate_image['0'];
							if(!empty($urlr)) 
							{
								?>
						

                            <a href="<?php bloginfo("url"); ?>/garden"> <img src="<?php echo $urlr;?>" alt="<?php the_title();?>" />
							<?php
							}
							?>
                                <div class="hover-div">
                                    <div class="border-dv"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="theme-text">
                            <?php echo $garden = get_field("garden",$page_id);?> <a href="<?php bloginfo("url"); ?>/garden">read more<i class="fa fa-caret-right" aria-hidden="true"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
	  <?php $page_id = get_queried_object_id(); ?>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <h1> <?php echo $our_services_title = get_field("our_services_title",$page_id);?></h1> </div>
					<?php 
						global $post;
						$i=1;
						query_posts("post_type=services&showposts=-1&order=asc");
						while (have_posts()) : the_post(); 
						$post_id=$post->ID;
					?>
					
                <div class="col-md-4">
                    <div class="service-sec"> <span>
                    <?php echo $services_icon = get_field("services_icon",$post_id);?>  </span>
                        <h4> <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                       <?php echo $service_text = get_field("service_text",$post_id);?> 
                    </div>
                </div>
            <?php $i++; endwhile; wp_reset_query();?>    </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="popup-gallery">
                    <div class="main-heading">
                  <h1> <?php echo $garden_themes_title = get_field("garden_themes_title",$page_id);?></h1> </div>
						<?php 
						global $post;
						$i=1;
						query_posts("post_type=gardenthemes&showposts=-1&order=asc");
						while (have_posts()) : the_post(); 
						$post_id=$post->ID;
					?> 
                    <div class="col-md-4 galery-sec">
					<?php
					$post_id= $post->ID;
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$urlq = $thumb['0'];


					?>
                        <a href="<?php the_permalink(); ?>">
                            <figure style="background-image:url('<?php echo $urlq;?>');"></figure>
                            <div class="hover-div">
                                <div class="border-dv">
                                    <p><?php the_title();?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                 <?php endwhile; wp_reset_query();?> </div>
            </div>
        </div>
    </section>
    <section class="three-d-design">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <h1> <?php echo $design_title = get_field("design_title",$page_id);?></h1> </div>
                <div class="col-md-7">
                    <?php echo $design_text = get_field("design_text",$page_id);?>
                </div>
                <div class="col-md-5 vid-outer">
                    <div class="video-div video" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/dummy-vid.jpg);">
					<img src="https://i.imgur.com/ZhEEocz.jpg" data-video="<?php echo $youtube_link = get_field("youtube_link",$page_id);?>?autoplay=1">
					 
						
                    </div> <a href="<?php bloginfo("url"); ?>/3d-design" class="see-videos">See videos  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a> </div>
            </div>
        </div>
    </section> 
	  
<script>
	 jQuery('img').click(function(){
        video = '<iframe width="560" height="315" src="'+ jQuery(this).attr('data-video') +'"></iframe>';
        jQuery(this).replaceWith(video);
    });
	
	</script>
	 <section class="slidr" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parrten.jpg);">
        <div class="container">
            <div class="row">
		
                <div class="main-heading">
                   <?php echo $latest_blog = get_field("latest_blog",$page_id);?>
                </div>
                <div class="col-md-12 latestBlog  owl-carousel owl-theme">
					<?php 
					global $post;
					query_posts('post_type=post&showposts=-1&order=DESC&orderby=post_date');
					$i=1;
					
			    while ( have_posts() ) : the_post(); ?>
                    <div class="outer ">
					<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$urla = $thumb['0'];
							
							if(!empty($urla)) 
							{
								?>
							
                        <div class="sec1 item" style="background-image:url(<?php echo $urla;?> );">
                            <a ></a> <strong><?php echo $pfx_date = get_the_date('j', $post->ID); ?> <span><?php echo $pfx_date = get_the_date('M', $post->ID); ?></span></strong> </div>
							<?php
							}else
							{
						
							?>
						 <div class="sec1 item" style="background-image:url(http://placehold.it/460x307 );">
                           <a ></a> <strong><?php echo $pfx_date = get_the_date('j', $post->ID); ?> <span><?php echo $pfx_date = get_the_date('M', $post->ID); ?></span></strong> </div>
							<?php
							}
							?>
                        <div class="text-div">
                            <div class="head-outer">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                <figure><i class="fa fa-user" aria-hidden="true"></i> by <?php the_author(); ?></figure>
                            </div>
                            <p> <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 180, '...');?></p>
                        </div>
                    </div>
                 <?php endwhile;wp_reset_query();  ?></div>
                <div class="col-md-12 text-center">
                    <div class="main-btn"><a href="<?php bloginfo("url"); ?>/blog">View All</a> </div>
                </div>
            </div>
        </div>
    </section>
 <?php get_footer(); ?>