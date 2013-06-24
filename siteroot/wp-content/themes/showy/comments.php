<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'playne'); ?></p>
<?php
	return;
}
?>

<div id="comments">
	<div class="comments-wrap">
	<div class="line"></div>
<div class="accent"></div>
	
		<ol class="commentlist">
			<?php wp_list_comments("callback=playne_comment"); ?>
		</ol>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="comment-nav-below" role="navigation">
			<?php previous_comments_link( __( '<div class="nav-previous"><i class="icon-angle-left"></i></div>', 'playne' ) ); ?>
			<?php next_comments_link( __( '<div class="nav-next"><i class="icon-angle-right"></i></div>', 'playne' ) ); ?>
			</nav>
		<?php endif; // check for comment navigation ?>
		<?php if (get_comments_number()==0) { ?>
		<style>.commentlist {display:none;}</style>
<?php } else { ?>
    <div class="line"></div>
<div class="accent"></div>
<?php } ?>
		<?php comment_form(
	array(
		'label_submit' => __( 'Post', 'playne' ),
	)
); ?>
	</div>
</div>
