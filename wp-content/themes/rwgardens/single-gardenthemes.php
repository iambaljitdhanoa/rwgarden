<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
?>

<script>
jQuery(document).ready(function()
{
	jQuery('.navbar-right>li').removeClass('current-menu-item');
	jQuery('#menu-item-65').addClass('dropdown');
	jQuery('#menu-item-65').addClass('current-menu-item');
});
</script>
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
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-right">
                        <?php  
							
							while (have_posts()) : the_post(); 
							$post_id=$post->ID;
							the_content();
							
						endwhile; wp_reset_query();?>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
						<?php
						$garden_image_right = get_post_meta($post->ID,"garden_image_right",true);
						$aggregate_image = wp_get_attachment_image_src($garden_image_right,'full');
						$urlr = $aggregate_image['0'];
							if(!empty($urlr)) 
							{
								?>
						
                        <figure> <img src="<?php echo $urlr;?>" alt="Mediterranean">
                            <figcaption><?php echo $garden_image_right_caption = get_field("garden_image_right_caption");?></figcaption>
                        </figure>
						<?php
							}
							else
							{
						?>
						
                        <figure> <img src="http://placehold.it/598x364" alt="Mediterranean">
                            <figcaption><?php echo $garden_image_right_caption = get_field("garden_image_right_caption");?></figcaption>
                        </figure>
						
						<?php
							}
							?>
                    </div>
                </div>
                <div class="full-size-img">
					<?php
						$gardenheme_page_image = get_post_meta($post->ID,"garden-theme_page_image",true);
						$aggregate_image = wp_get_attachment_image_src($gardenheme_page_image,'full');
						$urr = $aggregate_image['0'];
						?>
						 <figure>
						 <?php
							if(!empty($urr)) 
							{
								?>
								
				     	<img src="<?php echo $urr;?>" alt="Mediterranean Structure">
					
					<?php
							}
							else
							{
							?>
							<img src="http://placehold.it/1440x476" alt="Mediterranean Structure">
							<?php
							}
							?>
								<figcaption><?php echo $gardentheme_page_image_caption = get_field("garden-theme_page_image_caption");?></figcaption> </figure>
							</div>
                <?php echo $gardentheme_content = get_field("garden-theme_content");?>
                <div class="gap"></div>
                <div class="row design-img-group-2">
                    <div class="col-md-6 col-sm-6 col-xs-12">
					
						<?php
						$garden_theme_page_image_1 = get_post_meta($post->ID,"garden_theme_page_image_1",true);
						$aggregate_image = wp_get_attachment_image_src($garden_theme_page_image_1,'full');
						$ury = $aggregate_image['0'];
							if(!empty($ury)) 
							{
								?>
							<figure>	
						<img src="<?php echo $ury;?>" alt="Mediterranean Img"> 
						
						<?php
							}
							else
							{
							?><img src="http://placehold.it/690x364" alt="Mediterranean garden">
							<?php }
							?>
								<figcaption><?php echo $garden_theme_page_image_caption1 = get_field("garden_theme_page_image_caption1");?></figcaption> </figure>
								</div>   
                    <div class="col-md-6 col-sm-6 col-xs-12">
						<figure><?php
						$garden_theme_page_image_2 = get_post_meta($post->ID,"garden_theme_page_image_2",true);
						$aggregate_image = wp_get_attachment_image_src($garden_theme_page_image_2,'full');
						$urh = $aggregate_image['0'];
							if(!empty($urh)) 
							{
								?>
								<img src="<?php echo $urh;?>" alt="Mediterranean garden image">
								<?php
							}
							else
							{ 
							?>
							   <img src="http://placehold.it/690x364" alt="Mediterranean garden">
								
								   
							<?php
							}
							?><figcaption><?php echo $garden_theme_page_image_2 = get_field("garden_theme_page_image_caption_2");?></figcaption> </figure></div> 
                </div>
            </div>
        </div>
     </section>
	 
<?php get_footer();?>