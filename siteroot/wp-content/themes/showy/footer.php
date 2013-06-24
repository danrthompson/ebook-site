		</div>
	</div>

<footer class="clearfix" id="footer">
	<div id="footer-inside" class="clearfix">
	<?php if ( get_theme_mod('theme_customizer_logo') ) { ?>
	    					<div class="logo-image-footer clearfix">
							<a href="<?php echo home_url( '/' ); ?>"><img class="logo" src="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_logo', '' )."\n");?>" alt="<?php the_title(); ?>" /></a>
							</div>
	    					<?php } else { ?>
	    
		    				
		    				<h1 class="logo-text-footer clearfix"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a></h1>
		    				
	    					<?php } ?>
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets') ) : else : ?>		
				<?php endif; ?>
				<?php dynamic_sidebar('footer-one'); ?>
				
	<ul class="socials">
				<?php if ( get_theme_mod('theme_customizer_footervimeo') ) { ?>
				<li><a class="vimeo" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footervimeo', '' )."\n");?>">Vimeo</a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footerflickr') ) { ?>
				<li><a class="flickr" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerflickr', '' )."\n");?>">Flickr</a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footertumblr') ) { ?>
				<li><a class="tumblr" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertumblr', '' )."\n");?>">Tumblr</a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footertwitter') ) { ?>
				<li><a class="twitter" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertwitter', '' )."\n");?>">Twitter</a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footerfacebook') ) { ?>
				<li><a class="facebook" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerfacebook', '' )."\n");?>">Facebook</a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footerlinkedin') ) { ?>
				<li><a class="linkedin" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerlinkedin', '' )."\n");?>">LinkedIn</a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footerpinterest') ) { ?>
				<li><a class="pinterest" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerpinterest', '' )."\n");?>">Pinterest</a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footeryoutube') ) { ?>
				<li><a class="google" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footeryoutube', '' )."\n");?>">Google Plus</a></li>
				<?php } ?>
		</ul>
	</div>
</footer>
<div id="footer-bottom">
<!-- Get the copyright -->
	<div id="footer-bottom-inside" class="clearfix">
		<div class="left-float">
							&copy; <?php $the_year = date("Y"); echo $the_year; ?>&nbsp;<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a></div>
							<!-- Get the social icons -->
		<a href="#" class="totop"><i class="icon-cloud-upload"></i></a>
	
	</div>
</div><!-- Footer bottom -->
</footer>
<!-- Load the scripts -->
<?php wp_footer(); ?>
</div><!-- Main wrap -->
</body>
</html>