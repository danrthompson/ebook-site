<?php get_header(); ?>
		<div id="content">
			<div class="content-posts">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article <?php post_class('post'); ?>>
					<div class="entry-wrap">

						<div class="entry-content">
					
<?php if( has_post_thumbnail() ) {  ?>
<a class="featuredimage" rel="lightbox" href="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><?php echo $image[0]; ?>">
			<?php the_post_thumbnail( 'large-image' ); ?>
</a>
<?php } ?>		

<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>
						<div class="fitvid">
							<?php echo get_post_meta($post->ID, 'video', true) ?>
						</div>
<?php } ?>
		
                <?php
                $single_gallery_attachments = get_posts(
                array(
                    'orderby' => 'menu_order',
                    'post_type' => 'attachment',
                    'exclude' => get_post_thumbnail_id(),
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


		<a href="<?php echo ( wp_get_attachment_url( $single_gallery_attachment->ID, 'full' )); ?>" rel="lightbox"><img src="<?php echo ( wp_get_attachment_url( $single_gallery_attachment->ID, 'full' )); ?>" alt="<?php echo the_title(); ?>" /></a>


                <?php } endforeach; ?>

							</div>
						</div>
						
					</div>
				</article>
				<div id="sidebar" class="clearfix">
					<div class="sidebar-inner">
<header class="clearfix">
								
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
								<div class="date-title"><a href="#" class="meta-hover" title="<?php
						$terms = get_the_terms( $post->ID, 'tagportfolio' );
						if ( $terms && ! is_wp_error( $terms ) ) :
							$links = array();
							foreach ( $terms as $term )
							{
								$links[] = $term->name;
							}
							$links = str_replace(' ', '-', $links);
							$tax = join( " ", $links );
						else :
							$tax = '';
						endif;
						?><?php echo strtolower($tax); ?>"><i class="icon-tag"></i></a>
						<a href="#" class="meta-hover" title="<?php echo get_the_date('jS \<\s\p\a\n\>\o\f\<\/\s\p\a\n\> F, Y'); ?>"><i class="icon-time"></i></a></div>
														</header><div class="accent"></div>	
									<?php the_content(); ?>
</div>
				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			
			
			<?php  ?>
		</div>
		<div id="post-nav">
	<?php if(get_adjacent_post(false, '', true)) { ?>
				<?php previous_post_link('%link', '<div class="post-nav-left"><i class="icon-angle-left"></i></div>'); ?>
				<?php } else { ?><div class="post-nav-inactive"><i class="icon-angle-left"></i></div><?php } ?>
				<?php if(get_adjacent_post(false, '', false)) { ?>
				<?php next_post_link('%link', '<div class="post-nav-right"><i class="icon-angle-right"></i></div>'); ?>
				<?php } else { ?><div class="post-nav-inactive"><i class="icon-angle-right"></i></div><?php } ?>
				
		</div>
<?php get_footer(); ?>