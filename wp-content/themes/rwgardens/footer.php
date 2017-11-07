<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 logo-text">
				<?php		

							$logos = get_field("footer_logo",'option');
							?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo  $logos;?>" alt="Logo" /></a>
                           <?php		

							echo $footer_content = get_field("footer_content",'option');
							?>
                </div>
                <div class=" btm-links ">
                    <h3>Useful Links</h3>
                    <ul>
                         <?php

			$defaults = array(
			'theme_location'  => '',
			'menu'            => 'footer_menu',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '%3$s',
			'depth'           => 0,
			'walker'          => ''
			);

			wp_nav_menu( $defaults );

			?>
                    </ul>
                </div>
                <div class=" btm-links left0">
                    <h3>Our services</h3>
                    <ul>
					   <?php

			$defaults = array(
			'theme_location'  => '',
			'menu'            => 'scrvice_footer',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '%3$s',
			'depth'           => 0,
			'walker'          => ''
			);

			wp_nav_menu( $defaults );

			?> 
			
                    </ul> <span class="btm-img">
					<?php  $footer_third_parity_logo = get_field("footer_third_parity_logo",'option'); ?>
					<?php  $footer_third_parity_logo_link = get_field("footer_third_parity_logo_link",'option'); ?>
					
					<a  target="_blank" href="<?php echo $footer_third_parity_logo_link;?>"> <img src="<?php echo 
						 $footer_third_parity_logo;?>" alt="SGD"/></a></span> </div>
                <div class="col-md-3 col-sm-4 col-xs-12 gtintouch">
                    <h3>Get In touch</h3>
                    <ul>
                        <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $addresss = get_field("addresss",'option'); ?></li>
						<?php  $phone_numbers = get_field("phone_number",'option');
								$phone = preg_replace('/\D+/', '', $phone_numbers);
								?>
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:<?php echo $phone;?>"><?php echo $phone_numbers;?></a></li>
                        <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><a href="mailto:<?php echo $email = get_field("email",'option'); ?>"><?php echo $email = get_field("email",'option'); ?></a> </li>
                        <li><span><i class="fa fa-clock-o" aria-hidden="true"></i> </span><?php echo $working_hours = get_field("working_hours",'option'); ?></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 social-icons social-icons-btm">
                    <ul>
                        <li><a href="<?php echo $facebook_link = get_field("facebook",'option'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $twitter = get_field("twitter",'option'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $pinterest = get_field("pinterest",'option'); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="mailto:<?php echo $email = get_field("email",'option'); ?>" ><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        <li><a href="<?php echo $youtube = get_field("youtube",'option'); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-8 btm-text1">
				<?php  $phone_numbers = get_field("phone_number",'option');
								$phone = preg_replace('/\D+/', '', $phone_numbers);
								?>
								
                    <p>Ring me on <strong><a href="tel:<?php echo $phone;?>"><?php echo $phone_numbers;?></a></strong> for a free consultation</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="small-ftr">
        <div class="container">
            <p>Copyright © RW Gardens <?php echo date("Y");?>. All rights reserved.<strong>Powered By - <a href="https://www.imarkinfotech.com" target="_blank">iMark Infotech</a></strong></p>
        </div>
		 </div>
	     <?php wp_footer(); ?> 
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
			<script>
			jQuery(document).ready(function () {
			jQuery("input[name='contact_name']").keypress(function(event){

			var inputValue = event.which;

			// allow letters and whitespaces only.

			if((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97 ) || (inputValue > 123 && inputValue < 126)

			&& (inputValue != 32)){

			event.preventDefault();

			}

			});

			}); 

			</script>
</body>


</html>