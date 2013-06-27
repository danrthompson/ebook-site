<?php
/*
Template Name: HTC Resources
*/
?>
<?php get_header(); ?>
TEST
		<div id="content">
			<div class="content-posts clearfix">
	
				<?php if(is_search()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $count = $allsearch->post_count; echo $count . ' '; wp_reset_query(); ?><?php _e('Results for','playne'); ?> "<?php the_search_query() ?>" </h2></div>
				<?php } else if(is_tag()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php single_tag_title(); ?></h2>
				<?php } else if(is_day()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php echo get_the_date(); ?></h2></div>
				<?php } else if(is_month()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php echo get_the_date('F Y'); ?></h2></div>
				<?php } else if(is_year()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php echo get_the_date('Y'); ?></h2></div>
				<?php } else if(is_404()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php _e('Page Not Found!','playne'); ?></h2></div>
				<?php } else if(is_category()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php single_cat_title(); ?></h2></div>
				<?php } else if(is_author()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name; ?></h2></div>
				<?php } ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article <?php post_class('post clearfix'); ?>>
					<?php
						if(!get_post_format()) {
						   get_template_part('format', 'standard');
						} else {
						   get_template_part('format', get_post_format());
						};
					?>
				</article>
				
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			
<?php if (is_page () || is_single() || is_home () ) { ?>
<div id="sidebar" class="clearfix">
	<div class="sidebar-inner">
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets') ) : else : ?>		
				<?php endif; ?>
				<?php dynamic_sidebar('sidebar-one'); ?>
				<?php dynamic_sidebar('sidebar-two'); ?>
				<?php dynamic_sidebar('sidebar-three'); ?>
	</div>
</div>
<div class="clearfix"></div>
<?php } ?>

	
<?php if( playne_page_has_nav() ) : ?>
<!-- If there is pagination display load area -->
<div id="load" class="clearfix">
			<div class="inside">
					<?php if($link = get_previous_posts_link()) { ?>
					<?php previous_posts_link(__('<div class="post-nav-left"><i class="icon-angle-left"></i></div>', 'playne')) ?>
					<?php } else { ?>
					<div class="post-nav-inactive"><i class="icon-angle-left"></i></div>
					<?php } ?>
					<?php if($link = get_next_posts_link()) { ?>
					<?php next_posts_link(__('<div class="post-nav-right"><i class="icon-angle-right"></i></div>', 'playne')) ?>
					<?php } else { ?>
					<div class="post-nav-inactive"><i class="icon-angle-right"></i></div>
					<?php } ?>
			</div>
</div>

<?php endif; ?>
	
			
			<?php if( is_single () ) { ?>
				<?php if ('open' == $post->comment_status) { ?>
					<div class="comments">
						<?php comments_template(); ?>
					</div>
			<?php } ?>
			
<!-- If there is pagination display load area -->
<div id="load" class="clearfix">
			<div class="inside">
				<?php if(get_adjacent_post(false, '', true)) { ?>
				<?php previous_post_link('%link', '<div class="post-nav-left"><i class="icon-angle-left"></i></div>'); ?>
				<?php } else { ?><div class="post-nav-inactive"><i class="icon-angle-left"></i></div><?php } ?>
				<?php if(get_adjacent_post(false, '', false)) { ?>
				<?php next_post_link('%link', '<div class="post-nav-right"><i class="icon-angle-right"></i></div>'); ?>
				<?php } else { ?><div class="post-nav-inactive"><i class="icon-angle-right"></i></div><?php } ?>
			</div>
</div>
			<?php } ?>
		</div>
	
			<?php get_footer(); ?>