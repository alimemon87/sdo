<?php
/**
 * The footer template
 *
 * @package WordPress
 * @subpackage Charitas
 * @since Charitas 1.0
 */
?>
	<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/keyframes.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/grid.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.css" />
	</head> 
	<?php //echo get_template_directory_uri(); ?>
	<div id="footer-widget-area">
		
	<!-- Footer -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="tertiary" class="sidebar-container" role="complementary">
				<div class="container_16">
					
					<!-- First Widget Area -->
					<div class="grid_4">
						<aside id="meta-0" class="widget widget_adress">
							<h3>Contact us</h3>
							<address class="vcard">
								<p class="org vcard"><a class="url fn org" href="#">Social Development Organization</a><p>
								<p class="adr">
									<b>Street Name</b> -<span class="street-address"> Memon Goth</span><br>
									<span class="region"> Sindh,</span>
									<span class="postal-code"> 75040,</span>
									<span class="country-name"> Pakistan,</span>
								</p>
								<b>Phone:</b><span class="tel"> +92 3456 0000</span><br />
								<b>E-mail:</b><span class="email"> test@gmail.com</span><br />
								<b>Website:</b><span class="url"> www.sdo.com.pk</span><br />
							</address>
						</aside>
					</div>

					<!-- Second Widget Area -->
					<div class="grid_4">
						<aside id="meta-3" class="widget widget_meta">
							<h3>Facebook Page</h3>
							<div class="latest-tweets-body">
								<a href="#"></a> Like our Page :)
							</div>
							<div class="clear"></div>
							<div><a href="https://www.facebook.com/SDOMemonGothKarachi?fref=ts" class="radius follow">Facebook Page</a></div>
						</aside>
						<!-- <aside id="meta-1" class="widget widget_meta">
							<h3>Latest Events</h3>
							<ul>
								<li><a href="#">Social Networking</a></li>
								<li><a href="#" title="Silver Spring, WP Info Session June (Info Session)">Silver Spring, WP Info Session June</a></li>
								<li><a href="#" title="Silver Spring, WP Info Session October">Silver Spring, WP Info Session</a></li>
								<li><a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">Success Stories</a></li>
							</ul>
						</aside> -->					
					</div>
					
					<!-- Third Widget Area -->
					<!-- <div class="grid_4">
						<aside id="meta-2" class="widget widget_meta">
							<h3>Get involved</h3>
							<ul>
								<li><a href="#">The Big Give Team</a></li>
								<li><a href="#" title="Success Stories">Success Stories</a></li>
								<li><a href="#" title="Press">Press</a></li>
								<li><a href="#" title="Contact Us">Contact Us</a></li>
							</ul>
						</aside>
					</div> -->
					
					<!-- Forth Widget Area -->
					<!-- <div class="grid_4">
						<aside id="meta-3" class="widget widget_meta">
							<h3>Latest Tweets</h3>
							<div class="latest-tweets-body">
								<a href="#">@viktoras</a> Thanks! We're always redesigning things around here :)
							</div>
							<div class="clear"></div>
							<div><a href="#" class="radius follow">Follow @wplook</a></div>
						</aside>
					</div> -->

					<div class="clear"></div>
				</div>
			</div>


			<!-- Site Info -->
			<div class="site-info">
				<div class="container_16">
					
					<!-- CopyRight -->
					<div class="grid_8">
						<p class="copy">Copyright ©  2015.  All Rights reserved.  </p>
					</div>

					<!-- Design By -->
					<div class="grid_8">
						<p class="designby">Designed by Ali Memon</p>
					</div>

					<div class="clear"></div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->

	</div>
	<!-- /#page -->

	<?php if ( ot_get_option('wpl_google_analytics_tracking_code') ) {
		// Google Analytics Tracking Code
		echo ot_get_option('wpl_google_analytics_tracking_code');
	} ?>

	<?php wp_footer(); ?>
</body>
</html>