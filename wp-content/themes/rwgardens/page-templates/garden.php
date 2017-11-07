<?php
	/**
		* Template Name: Garden
		*
		* @package WordPress
		* @subpackage Twenty_Fourteen
		* @since Twenty Fourteen 1.0
	*/
	get_header(); 
	global $post;
?><?php
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
	
   
    <section class="design-page" data-section>
        <div class="social-icons">
              <?php get_sidebar('socail'); ?>
        </div>
		  <?php
		  $i=0;
		  $post_id = $post->ID;
				
				if( have_rows('profile', $post_id) ):

			   while ( have_rows('profile', $post_id) ) : the_row();
			   $title = get_sub_field('profile_text',$post_id);
			    $profile_image = get_sub_field('profile_image',$post_id);
			  if($i%2==0)
			  {
			  ?>
			   
        <div class="full-width-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-right">
                       <?php  echo $title = get_sub_field('profile_text',$post_id);?>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <figure> <img src="<?php echo $profile_image;?>" alt="Easton College">
                            <figcaption><?php echo  $title = get_sub_field('profile_caption',$post_id); ?></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
      <?php
			  }
			  else
			  {
			  ?><div class="full-width-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <figure> <img src="<?php echo $profile_image;?>" alt="Richard Walters">
                            <figcaption><?php echo  $title = get_sub_field('profile_caption',$post_id); ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 padding-left">
                        <?php  echo $title = get_sub_field('profile_text',$post_id);?>
                    </div>
                </div>
            </div>
        </div>
		<?php
			  }
			  ?>
      <?php $i++; endwhile; ?>  <?php endif; ?> </section>
   
<?php get_footer();?>