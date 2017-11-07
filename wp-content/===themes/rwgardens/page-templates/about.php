<?php
	/**
		* Template Name: About Us
		*
		* @package WordPress
		* @subpackage Twenty_Fourteen
		* @since Twenty Fourteen 1.0
	*/
	get_header(); 
	global $post;
?>
<?php
	$image3 = get_post_meta($post->ID,"page_banner",true);
	$aggregate_image = wp_get_attachment_image_src($image3,'banner_image');
	$url = $aggregate_image['0'];
	
?>  <div class="internal-banner" style="background-image:url(<?php echo $url;?>)">
          <div class="internal-inner">
              <div class="container">
              
              <div class="text-center">
                  <h2><?php the_title();?></h2>
              </div>
          </div>
          </div>
      </div>

      
      <div class="yellow-flag">
          
          <div class="container">
              <?php  
							
							while (have_posts()) : the_post(); 
							$post_id=$post->ID;
							the_content();
							
						endwhile; wp_reset_query();?>
          </div>
      </div>
      
      <div class="about-video">
          <div class="container">
              <div class="row">
                  <div class="col-md-7">
                      <div class="video-left">
                          <h2><?php echo $brief_insight = get_field("brief_insight");?> </h2>
                          <div class="ab-video-div">
                              <iframe src="<?php echo $youtube_video = get_field("youtube_video");?>?rel=0" allowfullscreen></iframe>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="video-right">
                          <?php echo $video_right_side_text = get_field("video_right_side_text");?>
                          
                          <a href="<?php bloginfo("url"); ?>/files" class="about-enter">ENTER</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <section class="services-section">
    <div class="container">
        <div class="heading text-center services-text what-we">
            <?php echo $what_we_text = get_field("what_we_text");?>
        </div>
        
        <div class="row">
			<?php 
						global $post;
						$i=1;
						query_posts("post_type=services&showposts=-1&order=asc");
						while (have_posts()) : the_post(); 
						$post_id=$post->ID;
					?>
					
            <div class="col-md-3">
                <div class="services-box">
                   <div class="services-icon width-clear">
                   
                  <?php echo $about_section = get_field("service_icon",$post_id);?>

                    </div>
                    <h3><?php the_title();?></h3>
                    
                    <?php echo $service_content = get_field("service_content",$post_id);?>
                    
                    <a href="<?php bloginfo("url"); ?>/services" class="services-plus-btn">
                    
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.444 31.444" style="enable-background:new 0 0 31.444 31.444;" xml:space="preserve">
<path d="M1.119,16.841c-0.619,0-1.111-0.508-1.111-1.127c0-0.619,0.492-1.111,1.111-1.111h13.475V1.127  C14.595,0.508,15.103,0,15.722,0c0.619,0,1.111,0.508,1.111,1.127v13.476h13.475c0.619,0,1.127,0.492,1.127,1.111  c0,0.619-0.508,1.127-1.127,1.127H16.833v13.476c0,0.619-0.492,1.127-1.111,1.127c-0.619,0-1.127-0.508-1.127-1.127V16.841H1.119z" fill="#FFFFFF"/>

</svg>

                    </a>
					
                </div>
            </div>
            <?php $i++; endwhile; wp_reset_query();?> 
     </div>
    </div>
      </section>
      
      <div class="about-enquires">
          <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <div class="about-form">
                       <h2>ENQUIRIES</h2>
           <?php $page_id = get_queried_object_id(); ?>
		   <?php
			   
			   echo do_shortcode('[contact-form-7 id="94" title="about us contact form"]'); ?>    </div>
               </div>
               <div class="col-md-6">
                      <div class="video-right career-outer">
                          <?php echo $career_opportunities = get_field("career_opportunities",$page_id);?>
                           <a class="about-enter" href="<?php bloginfo("url"); ?>/files">Enter</a>
                         
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
    
<?php get_footer();?>