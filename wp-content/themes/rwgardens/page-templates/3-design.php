<?php
	/**
		* Template Name: 3-dDesign
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
		    </div>
			 <?php
		  $i=0;
		  $post_id = $post->ID;
				
				if( have_rows('3d_design', $post_id) ):

			   while ( have_rows('3d_design', $post_id) ) : the_row();
			   $design = get_sub_field('design',$post_id);
			     $design_youtube_link = get_sub_field('design_youtube_link',$post_id);
			    $design_background_image = get_sub_field('design_background_image',$post_id);
			  if($i%2==0)
			  {
			  ?>
        <div class="full-width-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-right">
                     <?php echo $design = get_sub_field('design',$post_id);?>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 vid-outer">
                        <div class="video-div video" style="background-image:url(<?php echo $design_background_image;?>);">
					<img src="https://i.imgur.com/ZhEEocz.jpg" data-video="<?php echo $design_youtube_link;?>?autoplay=1&rel=0">
					 
						
                    </div>
                    </div>
						  
<script>
	 jQuery('.video img').click(function(){
        video = '<iframe width="560" height="315" src="'+ jQuery(this).attr('data-video') +'"></iframe>';
        jQuery(this).replaceWith(video);
    });
	
	</script>
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
                    <div class="col-md-5 col-sm-5 col-xs-12 vid-outer">
                        <div class="video-div video" style="background-image:url(<?php echo $design_background_image;?>);">
					<img src="https://i.imgur.com/ZhEEocz.jpg" data-video="<?php echo $design_youtube_link;?>?autoplay=1&rel=0"> 
					 
						
                    </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12  padding-left">
                        <?php echo $design = get_sub_field('design',$post_id);?>
                    </div>
                </div>
            </div>
        </div>
		<?php
			  }
			  ?>
      <?php $i++; endwhile; ?>  <?php endif; ?> 
	  <?php $page_id = get_queried_object_id(); ?>
	        <div class="full-width-area">
            <div class="container">
			<?php echo $garden = get_field("drawings_text_bottom",$page_id);?>
			
                <div class="design-img-group">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12"> 
						<?php
						$drawings_image1 = get_post_meta($page_id,"drawings_image1",true);
						$aggregate_image = wp_get_attachment_image_src($drawings_image1,'full');
						$urlr = $aggregate_image['0'];
                         if(!empty($urlr)) 
							{
						?>  
                             <img src="<?php echo $urlr;?>">
							 <?php
							}
							else
							{
						?>
						 <img src="http://placehold.it/460x280"> 
							 <?php } ?></div>
                        <div class="col-md-4 col-sm-4 col-xs-12"> <?php
						$drawings_image_2 = get_post_meta($page_id,"drawings_image_2",true);
						$aggregate_image = wp_get_attachment_image_src($drawings_image_2,'full');
						$urlw = $aggregate_image['0'];
                         if(!empty($urlw)) 
							{
						?>  
                             <img alt="<?php the_title();?>" src="<?php echo $urlw;?>">
							 <?php
							}
							else
							{
						?>
						 <img src="http://placehold.it/460x280"> 
							 <?php } ?> </div>
                        <div class="col-md-4 col-sm-4 col-xs-12"><?php
						$drawings_imae_3 = get_post_meta($page_id,"drawings_imae_3",true);
						$aggregate_image = wp_get_attachment_image_src($drawings_imae_3,'full');
						$ur = $aggregate_image['0'];
                         if(!empty($ur)) 
							{
						?>  
                             <img src="<?php echo $ur;?>">
							 <?php
							}
							else
							{
						?>
						 <img src="http://placehold.it/460x280"> 
							 <?php } ?> </div>
                    </div>
                </div>
            </div>
        </div>
  
  
     </section>
	   <section class="testimonials-cover" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/parrten.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="main-heading">
                     <h1>Testimonials</h1>
                    </div>
                    <div class="testimonials owl-carousel owl-theme">
                      <?php
							$post_id = $post->ID;

							if( have_rows('testimonialsss', $post_id) ):

							while ( have_rows('testimonialsss', $post_id) ) : the_row();
							
							
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
