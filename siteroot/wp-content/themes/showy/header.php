<?php 
global $data;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title><?php wp_title( '|', true, 'right' ); ?><?php echo bloginfo( 'name' ); ?></title>
	
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

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="/wp-includes/js/jquery/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="/wp-includes/js/jquery/jquery.jcarousel.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/wp-includes/skins/tango/skin.css" />
	<link href="/wp-includes/css/jscarousel-style.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript">
	jQuery(document).ready(function() {
	    jQuery('#mycarousel').jcarousel({'scroll': 1, 'visible': 1, 'auto': 0, 'wrap': 'circular'});
	});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			
			// set up hover panels
			// although this can be done without JavaScript, we've attached these events
			// because it causes the hover to be triggered when the element is tapped on a touch device
			$('.htc-hover').hover(function(){
				$(this).addClass('htc-flip');
			},function(){
				$(this).removeClass('htc-flip');
			});
			
		});
	</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42341030-1', {'cookieDomain':'none'});
  ga('send', 'pageview');

</script>


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
	    
		    				
		    				<h1 class="logo-text"><a href="/" title="<?php bloginfo('name'); ?>"><span id="main-logo-1">Harness</span><span id="main-logo-2">The Crowd</span></a></h1>
		    				
						
	    					<?php } ?>
			<!-- Navigation -->
			<nav role="navigation" class="header-nav">
<!-- 					<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?> -->
				<div class="menu-main-header-menu-container">
					<ul id="menu-main-header-menu" class="nav">
						<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12">
							<a href="/field-guide">
								<div id="menu-item-12-icon"> </div>
								<span class="HTC-icon-text">Our Tools</span>
							</a>
						</li>
						<li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11">
							<a href="/consulting">
								<div id="menu-item-11-icon"> </div>
								<span class="HTC-icon-text">Consulting</span>
							</a>
						</li>
						<li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10">
							<a href="/resources">
								<div id="menu-item-10-icon"> </div>
								<span class="HTC-icon-text">Resources</span>
							</a>
						</li>
						<li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9">
							<a href="/professionals">
								<div id="menu-item-9-icon"> </div>
								<span class="HTC-icon-text">Services</span>
							</a>
						</li>
						<li id="menu-item-8" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8">
							<a href="/why-crowdfunding">
								<div id="menu-item-8-icon"> </div>
								<span class="HTC-icon-text" style="position:relative; right:5px;">Why<br />Crowdfunding?</span>
							</a>
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