	<div class="entry-wrap">
<!-- Get the video meta -->
<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>
						<div class="fitvid">
							<?php echo get_post_meta($post->ID, 'video', true) ?>
						</div>
					
						<?php } ?>
					
							
						<div class="entry-content">
							<header>
								
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
								<div class="date-title"><a href="#" class="meta-hover" title="<?php echo get_the_date('jS \<\s\p\a\n\>\o\f\<\/\s\p\a\n\> F, Y'); ?>"><i class="icon-time"></i></a> <a href="#" class="meta-hover" title="<?php comments_number(__('No Comment','playne'),__('1 Comment','playne'),__( '% Comments','playne') );?>
	"><i class="icon-comment"></i></a></div>
								</header>
							<div class="accent"></div>

							<div class="posts-content">
					
								
								<?php if(is_search() || is_archive()) { ?>
									<div class="excerpt-more">
										<?php playne_readmore(); ?></div>
								<?php } else { ?>
									<!-- Post content -->
									<?php the_content(''); ?>																	<div class="centered"><a href="<?php the_permalink(); ?>" class="more-link" title="<?php _e('read more','playne'); ?>"><i class="icon-angle-right"></i></a></div>																								
									<?php if(is_single() || is_page()) { ?>
										<div class="pagelink">
											<?php wp_link_pages(); ?>
										</div>
									<?php } ?>
									
									<?php if(is_single()) { ?>
										<ul class="meta">
											<li class="author">
											- <?php the_author_posts_link(); ?>  </li>
											<li>Tags: <?php the_tags('', ', ', ''); ?></li>
										</ul>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>