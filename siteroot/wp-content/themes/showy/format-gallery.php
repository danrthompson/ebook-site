	<div class="entry-wrap">
	<!-- Get the flexslider container and script -->					
<div class="flexslider-container">
        <div class="flexslider">
            <ul class="slides">
                <?php
                $single_gallery_attachments = get_posts(
                array(
                    'orderby' => 'menu_order',
                    'post_type' => 'attachment',
                    'post_parent' => get_the_ID(),
		    'post_thumbnail' => get_the_ID(),
		    'post_excerpt' => get_the_ID(),
                    'post_mime_type' => 'image',
                    'post_status' => null,
                    'posts_per_page' => -1
                )
            ); 

		
                foreach ( $single_gallery_attachments as $single_gallery_attachment ) :
                
                if( get_post_meta($single_gallery_attachment->ID, 'be_rotator_include', true) !== '1' ) {
                ?>
                <li class="slide">

		<img src="<?php echo ( wp_get_attachment_url( $single_gallery_attachment->ID, 'full' )); ?>" alt="<?php echo the_title(); ?>" />

		</li>
                <?php } endforeach; ?>
            </ul>
        </div>
    </div>


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