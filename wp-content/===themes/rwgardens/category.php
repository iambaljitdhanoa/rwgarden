<?php
	/**
		* The template for displaying Category pages
		*
		* @link https://codex.wordpress.org/Template_Hierarchy
		*
		* @package WordPress
		* @subpackage Twenty_Fourteen
		* @since Twenty Fourteen 1.0
	*/
	get_header(); 
	global $post;
	
	$queried_object = get_queried_object();
	 $term_id = $queried_object->term_id; 
	
	$term_slug = $queried_object->slug;
	$term_name = $queried_object->name;
	$parent = $queried_object->parent;
	$count = $queried_object->count;
?>
<?php
	 $attachment_id = get_field('categories_banner', 'category_'. $queried_object->term_id .'');
	if(!empty($attachment_id)) 
		{
?>

<section class="banner inner-banner" style="background-image:url(<?php echo $attachment_id;?>);">
	<div class="container">
		<div class="bnner-inner">
			<div class="banner-text"> <strong><?php echo $term_name;?></strong> </div>
		</div>
	</div>
</section>
<?php
		}
		else
		{
		?>

<section class="banner inner-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-img.jpg);">
	<div class="container">
		<div class="bnner-inner">
			<div class="banner-text"> <strong><?php echo $term_name;?></strong> </div>
		</div>
	</div>
</section>
<?php
		}
		?>
<section class="contact-page" data-section>
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
			<div class="col-md-9">
				<div class="blog-post-cover">
					
					<?php $args =	array('showposts'=>25, 'categories' => $term_slug ,'post_type'=>'post');
						$query = new WP_Query($args);
					?>		
					<?php 	while ( $query->have_posts() ) : $query->the_post(); ?>				
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
								
								<div class="main-btn"> <a href="<?php the_permalink(); ?>">Read More</a> </div>
								
								
							</div>
						</article>
                        
					<?php endwhile; wp_reset_query(); ?>  </div>
					
					
				</div>
          	<?php get_sidebar('blog'); ?>
			</div>
			
		</div>
	</section>
    
    
<?php get_footer();?>