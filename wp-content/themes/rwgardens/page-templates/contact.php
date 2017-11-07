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
	   <section class="contact-page" data-section>
        <div class="social-icons">
             <?php get_sidebar('socail'); ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="main-heading">
                        <h1>SEND US A Message</h1> </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="217" title="Contact form"]'); ?>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
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
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-map">
                      <?php
							 	
								  $location=get_post_meta($post->ID,'map', TRUE); 
							
								 
								if( !empty($location) ):
							?>
							<div class="acf-map">
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
							</div>
							<?php endif; ?>
							
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
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


 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVZjzN4PIY8nvnSZi6V7KXADNqu6isb64"></script>
 
<script type="text/javascript">
jQuery(function($) {
function new_map( $el ) {
var $markers = $el.find('.marker');
var args = {
zoom	: 16,
center	: new google.maps.LatLng(0, 0),
mapTypeId	: google.maps.MapTypeId.ROADMAP
};	       	
var map = new google.maps.Map( $el[0], args);
map.markers = [];
$markers.each(function(){
   	add_marker( $(this), map );
});
center_map( map );
return map;
}
function add_marker( $marker, map ) {
var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
var marker = new google.maps.Marker({
position	: latlng,
map	: map
});
map.markers.push( marker );
if( $marker.html() )
{
var infowindow = new google.maps.InfoWindow({
content	: $marker.html()
});
google.maps.event.addListener(marker, 'click', function() {
infowindow.open( map, marker );
});
}
}

function center_map( map ) {
var bounds = new google.maps.LatLngBounds();

$.each( map.markers, function( i, marker ){
var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
bounds.extend( latlng );
});

if( map.markers.length == 1 )
{
   map.setCenter( bounds.getCenter() );
   map.setZoom( 16 );
}
else
{
map.fitBounds( bounds );
}
}
var map = null;

jQuery(document).ready(function(){
jQuery('.acf-map').each(function(){
map = new_map( jQuery(this) );
});
});
});

</script>
