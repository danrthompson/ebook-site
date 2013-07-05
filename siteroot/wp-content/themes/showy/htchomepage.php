<?php
/*
Template Name: HTC Homepage
*/
?>  
<?php get_header(); ?>

	<div id="home_page">
		<div id="home_firstpg" class="white-content-box">
			<div class="centerpiece">
				<ul id="mycarousel" class="jcarousel-skin-tango">
				   <li><img src="<?php echo get_bloginfo('template_url') ?>/images/central_graphic_placeholder.png" alt="" /></li>
				   <li><img src="<?php echo get_bloginfo('template_url') ?>/images/central_graphic_placeholder2.png" alt="" /></li>
				   <li><img src="<?php echo get_bloginfo('template_url') ?>/images/central_graphic_placeholder3.png" alt="" /></li>
				</ul>
			</div>
			</div>
		</div>

		<div id="home_secondpg">
				<div id="how_tag" class="tag">
					<a href='javascript: void(0);' onclick="javascript: $('body').scrollTo('#how_tag',500, {'offset': {'top': -10}});"><h3>HERE'S HOW</h3></a>
				</div>
				<div id="secondpg_content" class="pgcontent">
					<div class="content">
						<h2>Crowdfunding Can Be <span>Simple</span></h2>
						<div class="thirds">
							<ul>
								<li class="thirds_box">
									<a href="/field-guide/">
										<div id="bulb_img" class="third_contained_img">  </div>
	<!-- 									<img src="<?php echo get_bloginfo('template_url') ?>/images/cf_simple_icons/lightbulb_gray.png"/> -->
										<p>Learn What</p>
										<p>To Do</p>
										<br>
									</a>
								</li>
								<li class="thirds_box">
									<a href="/resources/">
										<div id="tools_img" class="third_contained_img"> </div>

	<!-- 									<img src="<?php echo get_bloginfo('template_url') ?>/images/cf_simple_icons/tools_gray.png"/> -->
										<p>Find the tools</p>
										<p>to do it</p>
										<br>
									</a>
								</li>
								<li class="thirds_box">
									<a href="/professionals/">
										<div id="pros_img" class="third_contained_img"> </div>
	<!-- 									<a href=""><img src="<?php echo get_bloginfo('template_url') ?>/images/cf_simple_icons/pros_gray.png"/></a> -->
										<p>Build a team &</p>
										<p>make it happen</p>
										<br>
									</a>
								</li>
							</ul>
						</div> <!-- End Thirds -->
								<br>
						<div class="caption_paragraph">
							<p>
								Planning, launching, and managing a campaign can be overwhelming. <span>We can help.</span> <br><br>
								
								Running a successful crowdfunding project means getting a lot of things right: the video, your rewards, and press coverage, to name a few. We've spent hundreds of hours researching successful campaigns, and finding the best tools to help you succeed.
							</p>
							<a href="/field-guide">Here's how to start</a>
						</div>
					</div> <!-- End Content -->

				</div><!-- End Secondpg_content -->
		</div> <!-- End home_secondpg -->

		<div id="home_thridpg">
			<div id="why_tag" class="tag">
					<a href='javascript: void(0);' onclick="javascript: $('body').scrollTo('#why_tag',500, {'offset': {'top': -10}});"><h3>HERE'S WHY</h3></a>
				</div>
				<div id="thirdpg_content" class="pgcontent">
					<div class="content">
						<a href="/why-crowdfunding/">
							<h2 class="title-link" >Crowdfunding Is <span>Important</span></h2>
						</a>
					<br>
					<br>
					<hr>
					<div class="why_sect_block">
						<div class="thirty left_offset f_left">
							<h4>WORTH YOUR <span id="orange">TIME</span></h4>
						</div>
						<div class="fifty f_right">
							<p>Last year, more than one million crowdfunding campaigns raised a total of $2.7 billion. On Kickstarter, the average successful campaign raises more than $15,000 while maintaining complete ownership of their project. If you want support from the community to help you realize your idea, crowdfunding can help.</p>
						</div>
					</div><!-- End Block -->
					<hr>
					<div class="why_sect_block">
						<div class="fifty f_left">
							<p>If you have an idea that could improve someone's life, then you can make it a reality through crowdfunding. Your product doesn't have to be something fancy or grandiose - more than 10% of Kickstarter campaigns asked for less than $1,000. Crowdfunding is for everyone, even you.</p>
						</div>
						<div class="thirty right_offset f_right">
							<h4><span id="yellow">YOU CAN</span> DO IT!</h4>
						</div>
					</div><!-- End Block -->
					<hr>
					<div class="why_sect_block">
						<div class="thirty left_offset f_left">
							<h4>WE WILL <span id="blue">HELP YOU</span></h4>
						</div>
						<div class="fifty f_right">
							<p>Our fieldguide outlines each important step you need to take, our accompanying toolkit helps you get started, and the professionals we recommend can help with the hard stuff like video production, PR, manufacturing, and delivering your product to backers. We'll help you understand what needs to be done, then you can do what you love and build a team to help with the rest.</p>
						</div>
					</div><!-- End Block -->
					</div> <!-- End Content -->
					
					<a href="/field-guide" id="lets_go_button">Let's Go!</a>
				</div><!-- End Secondpg_content -->

		</div>
</div>

<?php get_footer(); ?>