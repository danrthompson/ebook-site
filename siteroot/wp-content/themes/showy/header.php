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
<!-- 					<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?> -->
				<div class="menu-main-header-menu-container">
					<ul id="menu-main-header-menu" class="nav">
						<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12">
							<div id="menu-item-12-icon"> </div>
							<a href="/">Home</a>
						</li>
						<li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
							<div id="menu-item-11-icon"> </div>
							<a href="/field-guide">Fieldguide</a>
						</li>
						<li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10">
							<div id="menu-item-10-icon"> </div>
							<a href="/resources">Resources</a>
						</li>
						<li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9">
							<div id="menu-item-9-icon"> </div>
							<a href="/professionals">Professionals</a>
						</li>
					</ul>
				</div>			
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