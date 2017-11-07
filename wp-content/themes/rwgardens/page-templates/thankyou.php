<?php
	/**
		* Template Name: Thankyou
		*
		* @package WordPress
		* @subpackage Twenty_Fourteen
		* @since Twenty Fourteen 1.0
	*/
	get_header(); 
	global $post;
?>

 <?php
	$image3 = get_post_meta($post->ID,"inner_banner",true);
	$aggregate_image = wp_get_attachment_image_src($image3,'full');
	$url = $aggregate_image['0'];
	
?>  
  <section class="banner inner-banner" style="background-image:url(<?php echo $url;?>);">
        <div class="container">
            <div class="bnner-inner">
                <div class="banner-text"> <strong><?php echo $brief_insight = get_field("banner_text");?></strong> </div>
            </div>
        </div>
    </section>
	
  <?php echo get_hansel_and_gretel_breadcrumbs(); ?> 
   <section class="contact-page thankyou-cover text-center" data-section>
        <div class="social-icons">
             <?php get_sidebar('socail'); ?>
        </div>
        <div class="container">
            <div class="tick"> <i class="fa fa-check" aria-hidden="true"></i> </div>
            <div class="thnkyou-message">
                 <?php  
							
							while (have_posts()) : the_post(); 
							$post_id=$post->ID;
							the_content();
							
						endwhile; wp_reset_query();?>
            </div>
        </div>
    
    
    </section>
	
<?php get_footer();?>
