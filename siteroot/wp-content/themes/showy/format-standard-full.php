					<div class="entry-wrap">
<!-- Check if there is a video or image -->
<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>
						<div class="fitvid">
							<?php echo get_post_meta($post->ID, 'video', true) ?>
						</div>
					
					<?php } else { ?>
					
				
						<?php if ( has_post_thumbnail() ) { ?>
							<a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

<?php the_post_thumbnail( 'large-image' ); ?>
</a>
						<?php } ?>
					
					<?php } ?>


						<div class="entry-content">
							<header>
								
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
									<div class="whitespace"><div class="date-title"><?php get_breadcrumbs(); ?></div></div>
								<div class="right-float"></div>
								<?php } else { ?>					
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<div class="date-title"><a href="#" class="meta-hover" title="<?php echo get_the_date('jS \<\s\p\a\n\>\o\f\<\/\s\p\a\n\> F, Y'); ?>"><i class="icon-time"></i></a> <a href="#" class="meta-hover" title="<?php comments_number(__('No Comment','playne'),__('1 Comment','playne'),__( '% Comments','playne') );?>
	"><i class="icon-comment"></i></a></div>
								<?php } ?>
								</header>
							<div class="accent"></div>

							<div class="post-content">
					
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
											<?php } ?>
											
										</ul>
									<?php } ?>
							</div>
						</div>
					</div>