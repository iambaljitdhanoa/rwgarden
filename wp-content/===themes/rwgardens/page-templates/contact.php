<?php
	/**
		* Template Name: Conatct us
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
                <div class="col-md-7">
                    <div class="main-heading">
                        <h1>SEND US A Message</h1> </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="217" title="Contact form"]'); ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-information">
                        <div class="main-heading">
                            <h1>contact information</h1> </div>
                        <p><?php echo $contact_imformation = get_field("contact_imformation");?></p>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $addresss = get_field("addresss",'option'); ?></li>
							<?php  $phone_numbers = get_field("phone_number",'option');
								$phone = preg_replace('/\D+/', '', $phone_numbers);
								?>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo $phone;?>"><?php echo $phone_numbers;?></a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $email = get_field("email",'option'); ?>"><?php echo $email = get_field("email",'option'); ?></a></li>
							<?php  $telephone_number = get_field("telephone_number",'option');
								$telephon = preg_replace('/\D+/', '', $telephone_number);
								?>
								
                            <li><i class="fa fa-fax" aria-hidden="true"></i> <a href="tel:<?php echo $telephon	;?>"><?php echo $telephone_number;?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2416.601832767108!2d1.6540581661743439!3d52.721331529852804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d0aa5b28cda607%3A0xc5ba42d0e132f949!2sHorsey+Rd%2C+West+Somerton%2C+Great+Yarmouth+NR29+4DW%2C+UK!5e0!3m2!1sen!2s!4v1504170829541" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
					<?php
					$contact_image = get_post_meta($post->ID,"contact_image",true);
					$aggregate_image = wp_get_attachment_image_src($contact_image,'full');
					$urld = $aggregate_image['0'];

					?>
                 <img alt="<?php the_title();?>" src="<?php echo $urld;?>"> </div>
            </div>
        </div>
    </section>
   
<?php get_footer();?>