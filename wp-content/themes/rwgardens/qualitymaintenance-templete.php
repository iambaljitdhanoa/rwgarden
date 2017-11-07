<?php
/**
* WP Post Template:  quality-garden-maintenance  
*/
get_header(); ?>


<?php
	$image3 = get_post_meta($post->ID,"header_banner",true);
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
		 <?php
		  $i=0;
		  $post_id = $post->ID;
				
				if( have_rows('garden', $post_id) ):

			   while ( have_rows('garden', $post_id) ) : the_row();
			    $garden_image = get_sub_field('garden_image',$post_id);
			  if($i%2==0)
			  {
			  ?>
        <div class="full-width-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-right">
                       <?php echo $garden_descrption = get_sub_field('garden_descrption',$post_id);?>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12"> <img src="<?php echo $garden_image;?>" alt="Design Process"> </div>
                </div>
            </div>
        </div>
		<?php
			  }
			  else
			  {
			  ?>
        <div class="full-width-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12"> <img src="<?php echo $garden_image;?>" alt="Enquiry"> </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-left">
                         <?php echo $garden_descrption = get_sub_field('garden_descrption',$post_id);?>
                    </div>
                </div>
            </div>
        </div>
		<?php
			  }
			  ?>
      <?php $i++; endwhile; ?>  <?php endif; ?> </section>
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

							if( have_rows('testimonialss', $post_id) ):

							while ( have_rows('testimonialss', $post_id) ) : the_row();
							
							
							?>
					  <div class="item">
							
                            <div class="item-inner">
                                <?php echo $testimonials = get_sub_field('testimonials',$post_id);?>
								<h5> <?php echo $name = get_sub_field('name',$post_id);?> <small> <?php echo $city = get_sub_field('city',$post_id);?></small></h5> </div>
                        </div>
                    <?php $i++; endwhile; ?>  <?php endif; ?>  </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer();?>
