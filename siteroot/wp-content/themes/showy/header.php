<?php 
global $data;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title><?php wp_title( '-', true, 'right' ); ?><?php echo bloginfo( 'name' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />

	<!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
	document.documentElement.className = 'js';
	</script>
	
	<?php if ( get_theme_mod('theme_customizer_favicon') ) { ?>
	<!-- Get the favicon -->
	<link rel="icon" type="image/png" href="<?php echo '' .get_theme_mod( 'theme_customizer_favicon', '' )."\n";?>" />
	<?php } ?>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrap"><!-- Start the main wrap -->

<header class="clearfix">
		<div class="header-top">
			<div class="header-top-inner clearfix">
						<?php if ( get_theme_mod('theme_customizer_logo') ) { ?>
	    					<div class="logo-image">
							<a href="<?php echo home_url( '/' ); ?>"><img class="logo" src="<?php echo '' .get_theme_mod( 'theme_customizer_logo', '' )."\n";?>" alt="<?php the_title(); ?>" /></a>
						</div>
						<?php } else { ?>
	    
		    				
		    				<h1 class="logo-text"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a></h1>
		    				
						
	    					<?php } ?>
			<!-- Navigation -->
			<nav role="navigation" class="header-nav">
					<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?>
			</nav>
			</div>
		</div>

		<?php if (is_front_page() && get_theme_mod( 'theme_customizer_introhometext', '' )) { ?>
		<div class="intro-box">
			<div class="intro-box-inner">
			<?php echo '' .get_theme_mod( 'theme_customizer_introhometext', '' )."\n";?>
			</div>
		</div>
		<?php } else if ( get_post_meta( $post->ID, '_playne_intro-text-page-text', true )) { ?>
		<div class="intro-box">
			<div class="intro-box-inner">
		<?php global $post; $introtextpage = get_post_meta( $post->ID, '_playne_intro-text-page-text', true ); echo "$introtextpage"; ?>
			</div>
		</div>
		<?php } ?>
</header>
	<div id="wrapper" class="clearfix">
		<div id="main">