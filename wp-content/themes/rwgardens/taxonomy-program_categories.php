<?php 
get_header();
$queried_object = get_queried_object();
	$term_id = $queried_object->term_id;
	$term_slug = $queried_object->slug;
 	$term_name = $queried_object->name;
	$parent = $queried_object->parent;
	$count = $queried_object->count;
	$args = array(
		'type'                     => 'post',
		'child_of'                 => 0,
		'parent'                   => $term_id,
		'orderby'                  => 'name',
		'order'                    => 'ASC',
		'hide_empty'               => 0,
		'hierarchical'             => 1,
		'exclude'                  => '',
		'include'                  => '',
		'number'                   => '',
		'taxonomy'                 => 'program_categories',
		'pad_counts'               => false 	
	); 
	$subcategories= get_categories($args);
?>
<?php echo get_hansel_and_gretel_breadcrumbs(); ?>

<section id="tr_category">
    <h3>Learning Institute</h3>
    <div class="container">
        <div class="row row-centered">
            <div class="col-lg-12 col-centered">
                <div class="row-centered">
							<?php 	
		foreach ( $subcategories as $category ){
			setup_postdata( $category );			
		?> 
				
                    <div class="col-lg-3 col-centered">
						
						
                        <div class="category_wrapper">
                            <div class="cat_img">
                                 <img src="<?php echo z_taxonomy_image_url($category->term_id);?>" alt="" />
                            </div>
                            <div class="category_container">
                                <h2><?php echo $category->name?></h2>
                                <p><?php echo $category->category_description;?></p>
                                <span><a href="#">Learn More</a></span>
                            </div>
                        </div>						
                    </div>                   
				<?php } ?>                  
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<section class="tech_trstimonials">
    <div class="container" id="testimonials-row">
        <div class="row">
            <div class="col-md-12">
                <h2>
                            <div class="col-centered">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/testimonials.png" alt="testimonial">
                            </div>
                        </h2>
                <div class="carousel slide" id="testimonials-rotate">
                    <!--<ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#testimonials-rotate">
                                </li>
                                <li data-slide-to="1" data-target="#testimonials-rotate">
                                </li>
                                <li data-slide-to="2" data-target="#testimonials-rotate">
                                </li>
                            </ol>-->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="testimonials">
                                <h3>
                                            “Integer sed velit eu erat tincidunt pulvinar sit amet at justo. Pellentesque vitae 
                                            sapien lectus. Aeneantt sollicitudin eget purus eget efficitur.Morbi congue 
                                            fermentum efficitur. Duis ligula  elit, Nunc malesuada, lacus a luctus phar.”
                                        </h3>
                                <hr>
                                <p>Jon Dave</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="item">
                            <div class="testimonials">
                                <h3>
                                            “Integer sed velit eu erat tincidunt pulvinar sit amet at justo. Pellentesque vitae 
                                            sapien lectus. Aeneantt sollicitudin eget purus eget efficitur.Morbi congue 
                                            fermentum efficitur. Duis ligula  elit, Nunc malesuada, lacus a luctus phar.”
                                        </h3>
                                <hr>
                                <p>Jon Dave</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="item">
                            <div class="testimonials">
                                <h3>
                                            “Integer sed velit eu erat tincidunt pulvinar sit amet at justo. Pellentesque vitae 
                                            sapien lectus. Aeneantt sollicitudin eget purus eget efficitur.Morbi congue 
                                            fermentum efficitur. Duis ligula  elit, Nunc malesuada, lacus a luctus phar.”
                                        </h3>
                                <hr>
                                <p>Jon Dave</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <div class="arrow_buttons">
                    <a class="left" href="#testimonials-rotate" data-slide="prev">
                        <span class="glyphicon glyphicon-menu-left"></span>
                    </a>
                    <a class="right" href="#testimonials-rotate" data-slide="next">
                        <span class="glyphicon glyphicon-menu-right"></span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end of container-->
</section>

<div class="clearfix"></div>

<section class="tr_consult">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="consult_content">
                    <p>Claim your complimentary training consultation now</p>
                    <span>
                            	<a href="#">reserve your slot now</a>
                            </span>
                </div>
            </div>
        </div>
    </div>
    <!--end of container-->
</section>

<div class="clearfix"></div>
<?php get_footer();