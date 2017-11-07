<?php
/**
* WP Post Template: garden-consultation  
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
    <section class="design-page" data-section>
        <div class="social-icons">
             <ul>
                <li><a href="<?php echo $facebook_link = get_field("facebook",'option'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $twitter = get_field("twitter",'option'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $pinterest = get_field("pinterest",'option'); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $googleplus = get_field("googleplus",'option'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $youtube = get_field("youtube",'option'); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
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
        <div class="full-width-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 padding-right">
                       <?php echo $garden_descrption = get_sub_field('garden_descrption',$post_id);?>
                    </div>
                    <div class="col-md-5 "> <img src="<?php echo $garden_image;?>" alt="Design Process"> </div>
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
                    <div class="col-md-5 "> <img src="<?php echo $garden_image;?>" alt="Enquiry"> </div>
                    <div class="col-md-7 padding-left">
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
