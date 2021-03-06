					<div class="entry-wrap">
						<div class="entry-content">
							<header>
								<!-- Quote -->
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
								<div class="date-title"><a href="#" class="meta-hover" title="<?php echo get_the_date('jS \<\s\p\a\n\>\o\f\<\/\s\p\a\n\> F, Y'); ?>"><i class="icon-time"></i></a> <a href="#" class="meta-hover" title="<?php comments_number(__('No Comment','playne'),__('1 Comment','playne'),__( '% Comments','playne') );?>
	"><i class="icon-comment"></i></a></div>
								</header>
							<div class="accent"></div>

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

<!-- Quote author -->
<?php the_content(''); ?>


						</div>
					</div>
