<?php
/*
Template Name: Why Page
*/
?>  
<?php get_header(); ?>

	<div id="home_page">
		<div id="home_firstpg" class="content">
			<div class="centerpiece">
				<ul id="mycarousel" class="jcarousel-skin-tango">
				   <li><img src="<?php echo get_bloginfo('template_url') ?>/images/central_graphic_placeholder.png" alt="" /></li>
				   <li><img src="<?php echo get_bloginfo('template_url') ?>/images/central_graphic_placeholder.png" alt="" /></li>
				   <li><img src="<?php echo get_bloginfo('template_url') ?>/images/central_graphic_placeholder.png" alt="" /></li>
				</ul>
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
									<a href="http://www.google.com">
										<div id="bulb_img" class="third_contained_img">  </div>
	<!-- 									<img src="<?php echo get_bloginfo('template_url') ?>/images/cf_simple_icons/lightbulb_gray.png"/> -->
										<p>Learn What</p>
										<p>To Do</p>
										<br>
									</a>
								</li>
								<li class="thirds_box">
									<a href="http://www.google.com">
										<div id="tools_img" class="third_contained_img"> </div>

	<!-- 									<img src="<?php echo get_bloginfo('template_url') ?>/images/cf_simple_icons/tools_gray.png"/> -->
										<p>Find the tools</p>
										<p>to do it</p>
										<br>
									</a>
								</li>
								<li class="thirds_box">
									<a href="http://www.google.com">
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
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis 
								vestibulum. <span>Morbi leo risus, porta ac consectetur ac</span>, vestibulum at eros. <span>Curabitur blandit </span>tempus porttitor. Cum sociis natoque
								penatibus parturient montes, nascetur ridiculus mus. Praesent commodo cursus magna, vel scelerisque nisl consectetur
								et. Nullam quis risus <span>et magnis dis</span> eget urna mollis ornare vel eu leo.
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
						<h2>Crowdfunding Is <span>Important</span></h2>
					<br>
					<br>
					<hr>
					<div class="why_sect_block">
						<div class="thirty left_offset f_left">
							<h4>WORTH YOUR <span id="orange">TIME</span></h4>
						</div>
						<div class="fifty f_right">
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</div><!-- End Block -->
					<hr>
					<div class="why_sect_block">
						<div class="fifty f_left">
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.</p>
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
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.</p>
						</div>
					</div><!-- End Block -->
					</div> <!-- End Content -->
					
					<a href="/field-guide" id="lets_go_button">Let's Go!</a>
				</div><!-- End Secondpg_content -->

		</div>
</div>

<?php get_footer(); ?>