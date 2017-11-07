<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
	$postid =52;
	$image3 = get_post_meta($postid,"inner_banner",true);
	$aggregate_image = wp_get_attachment_image_src($image3,'banner_image');
	$url = $aggregate_image['0'];
	
?> 
<section class="banner inner-banner" style="background-image:url(<?php echo $url;?>);">
	<div class="container">
		<div class="bnner-inner">
			<div class="banner-text"> <strong><?php echo get_the_time('Y'); ?></strong> </div>
		</div>
	</div>
</section>
<section class="contact-page" data-section>
	<div class="social-icons">
		    <?php get_sidebar('socail'); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
			<h3><?php echo get_the_time('Y'); ?></h3>
				<div class="blog-post-cover">
				
						<?php
						global $post;						
						?>
						<?php if ( have_posts() ) : ?>
							<?php 
							while ( have_posts() ) : the_post();
							
						$cname="";
						$post_date=$post->post_date;
						$terms = get_the_terms($post->ID, 'category' );
						foreach ($terms as $term)
						{ 
							$term_slug = $term->slug;
							$term_name = $term->name; 
							$cname.=$term_name.", ";
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
								
								<p> <?php echo wp_trim_words( get_the_content(),80)  ;?></p>
								
								<div class="main-btn"> <a href="<?php the_permalink(); ?>">Read More</a><div class="shares"><?php echo sharethis_inline_buttons(); ?></div> </div>
								
								
							</div>
						</article>
                        
						<?php endwhile; wp_reset_query(); ?>  </div>
					   <?php  else :			?>			<div class="blog-title">              <h2>No Post Found</h2>            </div>			<?php			endif;	    	?>
				</div>
         	<?php get_sidebar('blog'); ?>
			</div>
			
		</div>
	</section>
    
    
<?php get_footer();?>


