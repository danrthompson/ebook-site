<?php

//Load all scripts and stylesheets

function playne_scripts_styles() {
	
	//Main Stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	//Font Awesome css
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . "/includes/fontawesome/font-awesome.css", array(), '0.1', 'screen' );

	//PrettyPhoto css
	wp_enqueue_style( 'prettyPhoto_css', get_template_directory_uri() . "/includes/lightbox/css/lightbox.css", array(), '0.1', 'screen' );

	//Google Fonts
	wp_enqueue_style('google_opensans', 'http://fonts.googleapis.com/css?family=Open Sans:400,700');
	wp_enqueue_style('google_raleway', 'http://fonts.googleapis.com/css?family=Raleway:200,400,500');
	
	//jQuery
	wp_enqueue_script('jquery');

	//Custom
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/includes/js/custom.js', false, false , true);
	
	//Responsiveness
	wp_enqueue_script('responsiveness_js', get_template_directory_uri() . '/includes/js/responsiveness.js', false, false , true);

	//Flexslider
	wp_enqueue_script('flexslider_js', get_template_directory_uri() . '/includes/js/flexslider-min.js', false, false , true);
	
	//Scripts
	wp_enqueue_script('scripts_js', get_template_directory_uri() . '/includes/js/scripts.js', false, false , true);

	//Lightbox
	wp_enqueue_script('prettyPhoto_js', get_template_directory_uri() . '/includes/lightbox/lightbox.js', false, false , true);

	
}
add_action( 'wp_enqueue_scripts', 'playne_scripts_styles' );

//Read more link
function playne_new_excerpt_more($more) {
       global $post;
	return '<div class="centered"><a class="more-linkd" href="'. get_permalink() . '">Read More</a></div>';
}
add_filter('excerpt_more', 'playne_new_excerpt_more');

function playne_readmore() {
	global $post;
	$ismore = @strpos( $post->post_content, '<!--more-->');
	if($ismore) : the_content(__( '<div class="centered"><a class="more-linkd" href="'. get_permalink() . '">Read More</a></div>','playne'));
	else : the_excerpt(__( '<div class="centered"><a class="more-linkd" href="'. get_permalink() . '">Read More</a></div>','playne'));
	endif;
}

// Custom background support
$argss = array(
	'default-color'          => '#f1f1f3'
);
add_theme_support( 'custom-background', $argss );

// Flexslider rotator script
require_once( get_template_directory() .'/includes/scripts/rotator.php' );

// Languages
load_theme_textdomain( 'playne', get_template_directory() . '/includes/languages' );
 
$locale = get_locale();
$locale_file = get_template_directory_uri() . "/includes/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);	

//widget shortcodes

add_filter('widget_text', 'do_shortcode');

// Pagination
function playne_page_has_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

//Customizer
require_once(dirname(__FILE__) . "/customizer.php");

function playne_customizer_admin() {
	add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' ); 
}
add_action ('admin_menu', 'playne_customizer_admin');


//Custom post formats support
add_theme_support('post-formats', array( 'quote', 'image', 'video', 'link', 'aside', 'gallery', 'chat'));

//Change editor fonts
require_once(dirname(__FILE__) . "/includes/scripts/add-styles.php");

add_theme_support( 'automatic-feed-links' );

//Menus
add_theme_support( 'menus' );
register_nav_menu('main', 'Main Menu');

//Thumbnails
add_theme_support('post-thumbnails');
add_image_size( 'large-image', 9999, 9999, false ); // Large Post Image

if ( ! isset( $content_width ) ) $content_width = 720;

//Footer widgets
if ( function_exists('register_sidebars') )

register_sidebar(array(
	'name' => __( 'Footer 1', 'playne'),
	'id' => 'footer-one',
	'description' => __( 'Widgets in this area are used in the first footer column', 'playne'),
	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'
));

register_sidebar(array(
	'name' => __( 'Sidebar 1', 'playne'),
	'id' => 'sidebar-one',
	'description' => __( 'Widgets in this area are used in the first sidebar column', 'playne'),
	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'
));

register_sidebar(array(
	'name' => __( 'Sidebar 2', 'playne'),
	'id' => 'sidebar-two',
	'description' => __( 'Widgets in this area are used in the second sidebar column', 'playne' ),
	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'
));

register_sidebar(array(
	'name' => __( 'Sidebar 3', 'playne'),
	'id' => 'sidebar-three',
	'description' => __( 'Widgets in this area are used in the third sidebar column', 'playne' ),
	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'
));

//Comments
function playne_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
		
		<div class="comment-block" id="comment-<?php comment_ID(); ?>">
			<div class="comment-info">	
				<div class="comment-author vcard clearfix">
					<?php echo get_avatar( $comment->comment_author_email, 75 ); ?>
					
					<div class="comment-meta commentmetadata">
						<?php printf(__('<cite class="fn">%s</cite>', 'playne'), get_comment_author_link()) ?>
						<div style="clear:both;"></div>
						<a class="comment-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'playne'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)', 'playne'),'  ','') ?>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
			
			<div class="comment-text">
				<?php comment_text() ?>
				<p class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</p>
			</div>
		
			<?php if ($comment->comment_approved == '0') : ?>
				<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'playne') ?></em>
			<?php endif; ?>    
		</div>
<?php
}

function playne_alter_comment_form_fields($fields){

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Your Name *', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" placeholder="Your Name *" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
                    
    $fields['email'] = '<p class="comment-form-email">' . '<label for="email">' . __( 'Your Email *', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="text" placeholder="Your Email *" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
    
    $fields['url'] = '<p class="comment-form-url">' . '<label for="url">' . __( 'Your Website', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="url" name="url" type="text" placeholder="Your Website" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></p>';

    return $fields;
}
add_filter('comment_form_default_fields','playne_alter_comment_form_fields');


function playne_cancel_comment_reply_button($html, $link, $text) {
    $style = isset($_GET['replytocom']) ? '' : ' style="display:none;"';
    $button = '<div id="cancel-comment-reply-link"' . $style . '>';
    return $button . '<i class="icon-remove-sign"></i> </div>';
}
 
add_action('cancel_comment_reply_link', 'playne_cancel_comment_reply_button', 10, 3);

// project option in admin area 
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}	

//Customizer css
function accent_color()
{
    $accent_color = get_option( 'accent_color' );
    ?>
<style type="text/css"> 
/* Custom CSS Controlled in Customizer */
body a, #wrap .post-entry-meta a, #wrap h1 a:hover, #wrap .format-quote a:hover, #wrap h3 a:hover, #wrap h4 a:hover, #wrap h5 a:hover, #wrap h6 a:hover, #wrap .post-entry-meta a:hover, #wrap .post-entry-footer p.author a, body .entry-title a:hover{color:<?php echo $accent_color; ?>;} 
.flexslider .flex-direction-nav li a.flex-next:hover, .flexslider .flex-direction-nav li a.flex-prev:hover, .intro-box-inner, .flip .back, #sidebar {background:<?php echo $accent_color; ?>;}
.accent, .comments-wrap .accent {border-bottom:1px solid <?php echo $accent_color; ?>;}
::selection { background:<?php echo $accent_color; ?>;}
::-moz-selection { background:<?php echo $accent_color; ?>;}
::-webkit-selection { background:<?php echo $accent_color; ?>;}
/* // Custom CSS Controlled in Customizer */
</style>
    <?php
}
add_action( 'wp_head', 'accent_color');

//Chat transcript

/* Filter the content of chat posts. */
add_filter( 'the_content', 'my_format_chat_content' );

/* Auto-add paragraphs to the chat text. */
add_filter( 'my_post_format_chat_text', 'wpautop' );

/**
 * This function filters the post content when viewing a post with the "chat" post format.  It formats the 
 * content with structured HTML markup to make it easy for theme developers to style chat posts.  The 
 * advantage of this solution is that it allows for more than two speakers (like most solutions).  You can 
 * have 100s of speakers in your chat post, each with their own, unique classes for styling.
 *
 * @author David Chandra
 * @link http://www.turtlepod.org
 * @author Justin Tadlock
 * @link http://justintadlock.com
 * @copyright Copyright (c) 2012
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @link http://justintadlock.com/archives/2012/08/21/post-formats-chat
 *
 * @global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
 * @param string $content The content of the post.
 * @return string $chat_output The formatted content of the post.
 */
function my_format_chat_content( $content ) {
	global $_post_format_chat_ids;

	/* If this is not a 'chat' post, return the content. */
	if ( !has_post_format( 'chat' ) )
		return $content;

	/* Set the global variable of speaker IDs to a new, empty array for this chat. */
	$_post_format_chat_ids = array();

	/* Allow the separator (separator for speaker/text) to be filtered. */
	$separator = apply_filters( 'my_post_format_chat_separator', ':' );

	/* Open the chat transcript div and give it a unique ID based on the post ID. */
	$chat_output = "\n\t\t\t" . '<div id="chat-transcript-' . esc_attr( get_the_ID() ) . '" class="chat-transcript">';

	/* Split the content to get individual chat rows. */
	$chat_rows = preg_split( "/(\r?\n)+|(<br\s*\/?>\s*)+/", $content );

	/* Loop through each row and format the output. */
	foreach ( $chat_rows as $chat_row ) {

		/* If a speaker is found, create a new chat row with speaker and text. */
		if ( strpos( $chat_row, $separator ) ) {

			/* Split the chat row into author/text. */
			$chat_row_split = explode( $separator, trim( $chat_row ), 2 );

			/* Get the chat author and strip tags. */
			$chat_author = strip_tags( trim( $chat_row_split[0] ) );

			/* Get the chat text. */
			$chat_text = trim( $chat_row_split[1] );

			/* Get the chat row ID (based on chat author) to give a specific class to each row for styling. */
			$speaker_id = my_format_chat_row_id( $chat_author );

			/* Open the chat row. */
			$chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';

			/* Add the chat row author. */
			$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-author ' . sanitize_html_class( strtolower( "chat-author-{$chat_author}" ) ) . ' vcard"><cite class="fn">' . apply_filters( 'my_post_format_chat_author', $chat_author, $speaker_id ) . '</cite>' . $separator . '</div>';

			/* Add the chat row text. */
			$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_text, $chat_author, $speaker_id ) ) . '</div>';

			/* Close the chat row. */
			$chat_output .= "\n\t\t\t\t" . '</div><!-- .chat-row -->';
		}

		/**
		 * If no author is found, assume this is a separate paragraph of text that belongs to the
		 * previous speaker and label it as such, but let's still create a new row.
		 */
		else {

			/* Make sure we have text. */
			if ( !empty( $chat_row ) ) {

				/* Open the chat row. */
				$chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';

				/* Don't add a chat row author.  The label for the previous row should suffice. */

				/* Add the chat row text. */
				$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_row, $chat_author, $speaker_id ) ) . '</div>';

				/* Close the chat row. */
				$chat_output .= "\n\t\t\t</div><!-- .chat-row -->";
			}
		}
	}

	/* Close the chat transcript div. */
	$chat_output .= "\n\t\t\t</div><!-- .chat-transcript -->\n";

	/* Return the chat content and apply filters for developers. */
	return apply_filters( 'my_post_format_chat_content', $chat_output );
}

/**
 * This function returns an ID based on the provided chat author name.  It keeps these IDs in a global 
 * array and makes sure we have a unique set of IDs.  The purpose of this function is to provide an "ID"
 * that will be used in an HTML class for individual chat rows so they can be styled.  So, speaker "John" 
 * will always have the same class each time he speaks.  And, speaker "Mary" will have a different class 
 * from "John" but will have the same class each time she speaks.
 *
 * @author David Chandra
 * @link http://www.turtlepod.org
 * @author Justin Tadlock
 * @link http://justintadlock.com
 * @copyright Copyright (c) 2012
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @link http://justintadlock.com/archives/2012/08/21/post-formats-chat
 *
 * @global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
 * @param string $chat_author Author of the current chat row.
 * @return int The ID for the chat row based on the author.
 */
function my_format_chat_row_id( $chat_author ) {
	global $_post_format_chat_ids;

	/* Let's sanitize the chat author to avoid craziness and differences like "John" and "john". */
	$chat_author = strtolower( strip_tags( $chat_author ) );

	/* Add the chat author to the array. */
	$_post_format_chat_ids[] = $chat_author;

	/* Make sure the array only holds unique values. */
	$_post_format_chat_ids = array_unique( $_post_format_chat_ids );

	/* Return the array key for the chat author and add "1" to avoid an ID of "0". */
	return absint( array_search( $chat_author, $_post_format_chat_ids ) ) + 1;
}

function get_breadcrumbs()
{
	global $wp_query;

	if ( !is_home() ){

		// Start the UL
		echo '<ul class="breadcrumbs">';
		// Add the Home link
		echo '<li><a href="'. get_home_url('home') .'">Home</a></li>';

		if ( is_category() )
		{
			$catTitle = single_cat_title( "", false );
			$cat = get_cat_ID( $catTitle );
			echo "<li>  ". get_category_parents( $cat, TRUE, "  " ) ."</li>";
		}
		elseif ( is_archive() && !is_category() )
		{
			echo "<li>  Archives</li>";
		}
		elseif ( is_search() ) {

			echo "<li>  Search Results</li>";
		}
		elseif ( is_404() )
		{
			echo "<li>  404 Not Found</li>";
		}
		elseif ( is_single() )
		{
			$category = get_the_category();
			$category_id = get_cat_ID( $category[0]->cat_name );

			echo '<li>  '. get_category_parents( $category_id, TRUE, "  " );
			echo the_title('','', FALSE) ."</li>";
		}
		elseif ( is_page() )
		{
			$post = $wp_query->get_queried_object();

			if ( $post->post_parent == 0 ){

				echo "<li>  ".the_title('&nbsp;-&nbsp;&nbsp;','', FALSE)."</li>";

			} else {
				$title = the_title('','', FALSE);
				$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
				array_push($ancestors, $post->ID);

				foreach ( $ancestors as $ancestor ){
					if( $ancestor != end($ancestors) ){
						echo '<li>  <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
					} else {
						echo '<li>  '. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';
					}
				}
			}
		}

		// End the UL
		echo "</ul>";
	}
}

//Portfolio items
add_action('init', 'project_custom_init');  
	
	/*-- Custom Post Init Begin --*/
	function project_custom_init()
	{
	  $labels = array(
		'name' => _x('Items', 'post type general name', 'playne'),
		'singular_name' => _x('Item', 'post type singular name', 'playne'),
		'add_new' => _x('Add New', 'project', 'playne'),
		'add_new_item' => __('Add New Item', 'playne'),
		'edit_item' => __('Edit Item', 'playne'),
		'new_item' => __('New Item', 'playne'),
		'view_item' => __('View Item', 'playne'),
		'search_items' => __('Search Items', 'playne'),
		'not_found' =>  __('No Items found', 'playne'),
		'not_found_in_trash' => __('No Items found in Trash', 'playne'),
		'parent_item_colon' => '',
		'menu_name' => 'Portfolio'

	  );
	  
	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor', 'thumbnail', 'custom-fields')
	  );
	  // The following is the main step where we register the post.
	  register_post_type('project',$args);

  // Initialize New Taxonomy Labels
	  $labels = array(
		'name' => _x( 'Categories', 'taxonomy general name', 'playne' ),
		'singular_name' => _x( 'Category', 'taxonomy singular name', 'playne' ),
		'search_items' =>  __( 'Search Types', 'playne' ),
		'all_items' => __( 'All Categories', 'playne' ),
		'parent_item' => __( 'Parent Category', 'playne' ),
		'parent_item_colon' => __( 'Parent Category:', 'playne' ),
		'edit_item' => __( 'Edit Categoriess', 'playne' ),
		'update_item' => __( 'Update Category', 'playne' ),
		'add_new_item' => __( 'Add New Category', 'playne' ),
		'new_item_name' => __( 'New Category Name', 'playne' ),
	  );
		// Custom taxonomy for Project Tags
		register_taxonomy('tagportfolio',array('project'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'tag-portfolio' ),
	  ));
	  	  
	}

	add_filter('post_updated_messages', 'project_updated_messages');
	
	function project_updated_messages( $messages ) {
	  global $post, $post_ID;

	  $messages['project'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Homepage Item updated. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('Custom field updated.', 'playne'),
		3 => __('Custom field deleted.', 'playne'),
		4 => __('Item updated.', 'playne'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Homepage Item restored to revision from %s', 'playne'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Homepage Item published. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('Item saved.', 'playne'),
		8 => sprintf( __('Homepage Item submitted. <a target="_blank" href="%s">Preview item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('Homepage Item scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview item</a>'),
		  // translators: Publish box date format, see http://php.net/date
		  date_i18n( __( 'M j, Y @ G:i', 'playne' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('Homepage Item draft updated. <a target="_blank" href="%s">Preview item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	  );

	  return $messages;
}
	

// Custom meta boxes

function playne_metaboxes( $meta_boxes ) {
	$prefix = '_playne_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'test_metabox',
		'title' => 'Intro text options',
		'pages' => array('page'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(	
			array(
				'name' => 'Display intro text',
				'desc' => 'Choose wether or not to display intro text for this page',
				'id'   => $prefix . 'intro-text-page',
				'type' => 'select',
				'options' => array(
					array( 'name' => 'No', 'value' => 'no', ),
					array( 'name' => 'Yes', 'value' => 'yes', )
						),
			),
			array(
				'name' => 'Intro text',
				'desc' => 'Fill in the intro text you would like to display',
				'id'   => $prefix . 'intro-text-page-text',
				'type' => 'text'
				
			),
			),

		);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'playne_metaboxes' );

add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'includes/metabox/init.php' );
	}
}

add_filter('widget_text', 'do_shortcode');