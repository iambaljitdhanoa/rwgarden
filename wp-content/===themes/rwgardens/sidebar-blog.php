       <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="recent-post">
                            <h2>POPUlAR <span>POSTS</span></h2>
                            <ul>
							<?php

							$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'views', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
							while ( $popularpost->have_posts() ) : $popularpost->the_post();

								?>
                                <li>
								<?php
								$post_id= $post->ID;
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$urla = $thumb['0'];

								if(!empty($urla)) 
								{
								?>

                                    <figure style="background-image:url('<?php echo $urla;?>')"></figure>
									<?php
								}
								else
								{
								?>
								  <figure style="background-image:url('http://placehold.it/770x300&amp;text=No image found')"></figure>
								  <?php
								}
								?>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <strong class="recent-post-details">
                                        <a ><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $pfx_date = get_the_date('j M ', $post->ID); ?></a>
                                      
									</strong>
								</li>
                        <?php endwhile; wp_reset_query(); ?>	</ul>
						<h3>Archive</h3>
							<ul id="arch">
							  <?php
global $wpdb;
$limit = 0;
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
foreach($months as $month) :
	$year_current = $month->year;
	if ($year_current != $year_prev){
		if ($year_prev != null){?>
		
		<?php } ?>
	
	<li><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></li>
	
	<?php } ?>

<?php $year_prev = $year_current;

if(++$limit >= 18) { break; }

endforeach; ?>
						</ul>
						
						</div>
                        <br>
                        <figure>
                            <img src="images/facebook-plugin.jpg">
						</figure>
                        <br><br>
                        <figure>
                           <a class="twitter-timeline" href="https://twitter.com/rwgarden" data-widget-id="" data-height="800"
					data-chrome="nofooter"
					>Tweets by @rwgarden</a>
		            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</figure>
                        
					</div>
				</div>
			
