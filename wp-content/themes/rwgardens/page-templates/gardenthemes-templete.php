<?php
	/**
		* Template Name: gardentheme
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
    <section class="design-page" data-section>
        <div class="social-icons">
               <?php get_sidebar('socail'); ?>
        </div>
		    <div class="full-width-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                      <?php echo $garden_theme_top_content = get_field("garden_theme_top_content");?>
                    </div>
					</div>
            </div>
        </div>
		
		 <?php
		  $i=0;
		  $post_id = $post->ID;
				
				if( have_rows('gardentheme', $post_id) ):

			   while ( have_rows('gardentheme', $post_id) ) : the_row();
			 
			    $gardentheme_image = get_sub_field('gardentheme_image',$post_id);
			   
			  if($i%2==0)
			  {
			  ?>
			  
        <div class="full-width-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-right">
                      <?php echo  $garden_theme_content = get_sub_field('garden_theme_content',$post_id);?>
                        <div class="main-btn"> <a href="<?php echo  $garden_theme_link = get_sub_field('garden_theme_link',$post_id);?>">Read More</a> </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12  ">
                        <figure> <img src="<?php echo $gardentheme_image;?>" alt="RHS Hyde Hall">
                            <figcaption><?php  echo $image_caption = get_sub_field('image_caption',$post_id); ?></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
		<?php
			  }
			  else
			  {
			  ?>
        <div class="full-width-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-right">
                       <?php echo  $garden_theme_content = get_sub_field('garden_theme_content',$post_id);?>
                        <div class="main-btn"> <a href="<?php echo  $garden_theme_link = get_sub_field('garden_theme_link',$post_id);?>">Read More</a> </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <figure> <img src="<?php echo $gardentheme_image;?>" alt="Cottage Garden">
                            <figcaption><?php  echo $image_caption = get_sub_field('image_caption',$post_id); ?></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
			  <?php }
			  ?>
			   <?php $i++; endwhile; ?>  <?php endif; ?> 
   </section>
	
    <section class="testimonials-cover" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parrten.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="main-heading">
                       <?php echo $testimonials_title = get_field('testimonials_title',$post_id);?>
                    </div>
                    <div class="testimonials owl-carousel owl-theme">
                      <?php
							$post_id = $post->ID;

							if( have_rows('garden_theme_testmonails', $post_id) ):

							while ( have_rows('garden_theme_testmonails', $post_id) ) : the_row();
							
							
							?>
					  <div class="item">
							
                            <div class="item-inner">
                                <?php echo $testmonails_name = get_sub_field('testmonails_name',$post_id);?>
								<h5> <?php echo $testimonials_names = get_sub_field('testimonials_names',$post_id);?> <small> <?php echo $testimonials_city = get_sub_field('testimonials_city',$post_id);?></small></h5> </div>
                        </div>
                    <?php $i++; endwhile; ?>  <?php endif; ?>  </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer();?>
