<?php
/*
Template Name: Ebook Page
*/
?>  
<?php get_header(); ?>

<!-- Cellery Javascript Link -->
<script type="text/javascript" src="https://www.trycelery.com/js/celery.js"></script>

<div id="why_page">
	<div id="" class="content">
		

<!--  ///////////// WHY PAGE //////////////// -->


<!-- 	<h1>Crowdfunding Is <span>Important</span></h1> -->
	<div id="why_pg" class="pgcontent">
			<div class="content block ebook_pg">
			
				<div class="why_pg_central_content">
					<div class="half left-float">
						<img class="wide_img" id="ebook-img" src="<?php echo get_bloginfo('template_url') ?>/images/book_placeholder.png"/>
					</div>
					<div class="half right-float top-margin">
						<h5 id="left-float"> This Is How To Start</h4>
						<h5><span class="teal thick-title left-float">LEARNING</span></h4>
						<div class="accent"></div>
						<p>
						Crowdfunding is a big process. From conceptualizing your idea, to lining up press, to launching your campaign, to fulfillment once it's over, there's a lot to do. Harness the Crowd provides a roadmap that explains what to do, when to do it, and how to be successful. 
						</p>
						<div class="left-float ebook_buttons">
							<a href="<?php echo get_bloginfo('template_url') ?>/htc-preview.pdf" class="left-float ebook-teal-button-outline ebook_button">PREVIEW</a>
							<a data-celery="htc-ebook" class="left-float ebook-button-solid ebook_button celery-link">Get It!</a>

							<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="left-float" target="_blank">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
							">
							<input class="left-float ebook-button-solid htc-paypal-button ebook_button" type="submit" value="GET IT!" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			
							</form> -->

						</div>
					</div>
				</div><!-- End Block -->
			</div> <!-- End Content -->

				<div id="why_pg" class="pgcontent">
			<div class="content block ebook_pg">
			
				<div class="why_pg_central_content">
					<div class="half right-float">
						<img class="wide_img" id="kit-img" src="<?php echo get_bloginfo('template_url') ?>/images/kit_placeholder.png"/>
					</div>
					<div class="half left-float top-margin">
						<h5 class="text-right"> This Is How To Start</h4>
						<h5><span id="blue" class="thick-title right-float">LEARNING</span></h4>
						<div class="accent_wrapper_right"><div class="accent orange"></div></div>
						<p>
						A carpenter is nothing without his tools. The same is true in crowdfunding. We've compiled the  tools and resources you need to make your campaign a success. From outreach templates, to press grids, to web-pages for spreading the word, this kit will save you days of work and spur your success. 
						</p>
						<div class="right-float ebook_buttons">
							
<!-- 							<button data-celery="htc-ebook" class="right-float ebook-blue-button-outline ebook_button">PREVIEW</button>
 -->							<a data-celery="htc-kit" class="right-float ebook-blue-button-outline ebook_button celery-link">Get It!</a>
<!-- 
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="right-float">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
							">
							<input class="right-float ebook-blue-button-solid htc-paypal-button ebook_button" type="submit" value="GET IT!" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							</form> -->

						</div>
					</div>
				</div><!-- End Block -->
			</div> <!-- End Content -->

			
			
	<!-- </div>
	<div class="bottom-button-wrapper">
		<a href="/field-guide" id="lets_go_button">Let's Go!</a>
	</div> -->
	<!--  ///////////// END WHY PAGE //////////////// -->
		
	<!-- small sidebar -->
	<!-- <div class="sidebar-wrapper content">
			<div id="sidebar" class="clearfix">
				<div class="sidebar-inner">
					<h1><span>Crowdfunding</span> Resources</h1>
					<hr>
					<a href="http://www.google.com">Suggest A Resource</a>
					<hr>
					
					<ul class="sidebar-list">
						<li class="sidebar-list-entry"><a href="#resource_sect1">Featured Resources</a></li>
						<li class="sidebar-list-entry"><a href="#resource_sect2">Booklist</a></li>
						<li class="sidebar-list-entry"><a href="#resource_sect3">About Crowdfunding</a></li>
						<li class="sidebar-list-entry"><a href="#resource_sect4">Idea Development</a></li>
						<li class="sidebar-list-entry"><a href="#resource_sect5">Campaign Prep</a></li>
						<li class="sidebar-list-entry"><a href="#resource_sect6">Manage The Campaign</a></li>
						<li class="sidebar-list-entry"><a href="#resource_sect7">After The Campaign</a></li>
					</ul>

					<a href="www.google.com" id="campaign_services_link">Helpful Services</a>


				</div>
			</div>
		</div>
 -->


</div>

<?php get_footer(); ?>