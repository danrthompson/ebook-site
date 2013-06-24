<?php
/*
Template Name: Portfolio One Column
*/
?>  
<?php get_header(); ?>

<div id="content">
	<div class="content-posts-full">
	
			<!-- Create the filter menu -->
		<div id="portfolio-filter-wrapper" class="clearfix">
			<div id="filter-hide">
			<?php
				 $terms = get_terms("tagportfolio");
				 $count = count($terms);
				 echo '<ul id="portfolio-filter">';
				 echo '<li><a href="#" data-filter="*" title="">All</a></li>';
				 if ( $count > 0 ){
						foreach ( $terms as $term ) {
							$termname = strtolower($term->name);
							$termname = str_replace(' ', '-', $termname);
							echo '<li><a href="#" rel="'.$termname.'" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
						}
				 }
				 echo "</ul>";
			?>
			</div>
				<div class="right-float">
					<a href="#filter-hide" class="togglefilter" title="Filter Work"><i class="icon-reorder"></i></a>
				</div>
		</div>
			<div id="portfolio-wrapper">
			<?php
				$loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => -1));
				$count =0;
			?>
				<!-- Portfolio items list -->
				<div id="portfolio-list">
				<?php if ( $loop ) :
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php
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
						?>
						<?php $infos = get_post_custom_values('_url'); ?>
				
<div class="portfolio-item one <?php echo strtolower($tax); ?>">
	<!-- Display portfolio thumb -->
	<?php if( has_post_thumbnail() ) {  ?>
		<div class="front">
			<?php the_post_thumbnail( 'large-image' ); ?>
		</div>
		<a class="featuredimage" href="<?php the_permalink(); ?>">
		<div class="back">
			<div class="caption-inner">
						<div class="line"></div>
						<h1 class="caption-header"><?php the_title(); ?></h1>
						<p><?php echo strtolower($term->name); ?></p>
			</div>
		</div>
		</a>
	<?php } ?>				
</div>
					<?php endwhile; else: ?>
					<div class="error-not-found">Sorry, no portfolio entries found :(.</div>
				<?php endif; ?>
				</div>
				
			</div> <!-- end #portfolio-wrapper-->
			<!-- Portfolio filterable jQuery -->
			<script>
		jQuery(window).load(function ($) {
	"use strict";	

	var $container = $('#portfolio-wrapper');
	$container.isotope({
		filter: '*',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
	});

	$('#portfolio-filter li a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
			}
		});
	  return false;
	});

	var $optionSets = $('#portfolio-filter'),
	       $optionLinks = $optionSets.find('a');
	 
	       $optionLinks.click(function(){
	          var $this = $(this);
		  // don't proceed if already selected
		  if ( $this.hasClass('selected') ) {
		      return false;
		  }
	   var $optionSet = $this.parents('#portfolio-filter');
	   $optionSet.find('.selected').removeClass('selected');
	   $this.addClass('selected'); 
	});

				});
			</script>
	</div>
	<br/>
</div>
<?php get_footer(); ?>