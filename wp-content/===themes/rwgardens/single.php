<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
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
    <section class="contact-page" data-section>
        <div class="social-icons">
            <ul>
                <li><a href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="http://twitter.com/intent/tweet?text=Just found this item '<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

	 
			<li><a href="//pinterest.com/pin/create/%20button?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" data-pin-custom="true" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
			<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" id="google-plus_<?php echo $post_id; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			<li><a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> 
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
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
                        <div class="blog-text">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                            <?php the_content();?>
                            
                            </div>
                            
                            
                       
                    </article>
                        <?php endwhile; wp_reset_query(); ?>
                        
                    </div>
                    
                </div>
          	<?php get_sidebar('blog'); ?></div>
           
        </div>
    </section>
   
<?php get_footer(); ?>
