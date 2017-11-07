       <div class="col-md-3 col-sm-4 col-xs-12">
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
						
						
						</div>
						  <div class="archive-post">
                            <h2>Archive <span></span></h2>
						
						 <ul>
            <?php
global $wpdb;$i=1;
$limit = 0;
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
foreach($months as $month) :
	$year_current = $month->year;
	if ($year_current != $year_prev){
		if ($year_prev != null){?>
		
		<?php } ?>
	
	
	
	<?php }?><?php  if($i<=9){ ?>	 
	<li><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?> <?php echo $month->year; ?></span></a></li>	<?php	}	if($i==9){	?></ul>	<ul>	<?php } if($i>=10){		?><li><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?> <?php echo $month->year; ?></span></a></li>				<?php	}	?>	
<?php $year_prev = $year_current; 

if(++$limit >= 18) { break; }
$i++;
endforeach; ?>  </ul>

      </div>
			           <div class="recent-activity">
                            <h2> Recent Activity <span>Facebook</span></h2>
                       
                      <?php echo do_shortcode('[recent_facebook_posts]'); ?> 
							</div>
                        <div class="recent-activity">
						      <h2> Recent Activity <span>Twitter</span></h2>
                        <figure>
                        <a target="_blank" class="twitter-timeline" data-width="400" data-height="500" href="https://twitter.com/rwgardener?ref_src=twsrc%5Etfw">Tweets by rwgardener</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						</figure>
                        </div>
					</div>
				</div>
			
