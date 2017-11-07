<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<script>
jQuery(document).ready(function()
{
	jQuery('.navbar-right>li').removeClass('current-menu-item');
	jQuery('#menu-item-71').addClass('dropdown');
	jQuery('#menu-item-71').addClass('current-menu-item');
});
</script> 
<?php
	$postid =52;
	$image3 = get_post_meta($postid,"inner_banner",true);
	
	$aggregate_image = wp_get_attachment_image_src($image3,'full');
	 $url = $aggregate_image['0'];
	?>
	
   <section class="banner inner-banner" style="background-image:url(<?php echo $url;?>);">
        <div class="container">
            <div class="bnner-inner">
                <div class="banner-text"> <strong><?php echo $banner_text = get_field("banner_text",52);?></strong> </div>
            </div>
        </div>
    </section>
	<?php echo get_hansel_and_gretel_breadcrumbs(); ?>
    <section class="contact-page" data-section>
       <div class="social-icons">
              <?php get_sidebar('socail'); ?>
        </div><div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="blog-post-cover">
					<?php
									global $post;
									
									while ( have_posts() ) : the_post();
									$cname="";
									$post_date=$post->post_date;
									$terms = get_the_terms($post->ID, 'category' );
									foreach ($terms as $term)
									{
										$term_slug = $term->slug;
										$term_name = $term->name; 
										$cname.=$term_name.",";
									}
									$comments_count = wp_count_comments( $post->ID );
									$comm_count=$comments_count->approved;
									?>
									
                    <article>
                        <?php
							$post_id= $post->ID;
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
							$urla = $thumb['0'];
							
							
							if(!empty($urla)) 
							{
							?>
							<figure style="background-image:url(<?php echo $urla;?>);">
								<?php
								} 
								else
								{
								?>
								<figure style="background-image:url(http://placehold.it/1071x350);">  
									<?php
									}
								?>
                             <strong class="blog-date"><?php echo $pfx_date = get_the_date('j', $post->ID); ?><span><?php echo $pfx_dates = get_the_date('M', $post->ID); ?>, <?php echo $pfx_datesa = get_the_date('Y', $post->ID); ?></span></strong>
                        </figure>
                        <div class="blog-text mainArea">
                           <h1><?php the_title(); ?></h1>
                            <ul class="blog-details">
                                <li>By <?php the_author(); ?></li>
                                <li><?php echo $pfx_date = get_the_date('j M Y', $post->ID); ?></li>
									<?php
										$category = get_the_terms( $post->ID, 'category' );     
										foreach ( $category as $cat){
											
											
											$category_link = get_category_link($cat->term_id );
										?>
										
										<li><a href="<?php echo $category_link; ?>"><?php echo $cat->name ?></a>
											
											
											<?php
											}
											
											
										?> </li>
								</ul>
                           <div class="mainContent"> <?php the_content();?></div>
                            	<div class="shares"><?php echo sharethis_inline_buttons(); ?></div>
                            </div>
                            
                            
                       
                    </article>
                        <?php endwhile; wp_reset_query(); ?>
                        
                    </div>
                    
                </div>
          	<?php get_sidebar('blog'); ?></div>
           
        </div>
    </section>
   
<?php get_footer(); ?>
