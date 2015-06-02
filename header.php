<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42236979-3', 'amberpensiontrust.co.uk');
  ga('send', 'pageview');

</script>
		<!-- end analytics -->

		<!--
/* @license
 * MyFonts Webfont Build ID 2641382, 2013-09-11T10:49:24-0400
 *
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are
 * explicitly restricted from using the Licensed Webfonts(s).
 *
 * You may obtain a valid license at the URLs below.
 *
 * Webfont: Museo Sans 500 by exljbris
 * URL: http://www.myfonts.com/fonts/exljbris/museo-sans/500/
 * Copyright: Copyright (c) 2008 by Jos Buivenga. All rights reserved.
 * Licensed pageviews: Unlimited
 *
 *
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=2641382
 *
 * © 2013 MyFonts Inc
*/

-->
<?php if (is_page ( array ('new-scheme', 'pipeline-collector'))) { ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
  $(".datepicker").datepicker({
	minDate : 0,
	dateFormat : 'dd/mm/yy'
	});
});

</script>

<?php } ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->

					<div id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow" title="homepage">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/amber-header.jpg" title="amber logo" alt="Amber logo banner"></a>
					</div>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>

					<nav role="navigation">
						<?php if (is_page_template ('page-adviser.php')) {

						bones_adviser_nav(); }

						elseif (is_page_template ('page-member.php' )) {

							if (is_user_logged_in()) { bones_adviser_nav ();}

							else {bones_main_nav();}

						}

            elseif (is_page_template ('page-library.php' )) {

							if (is_user_logged_in()) { bones_adviser_nav ();}

							else {bones_main_nav();}

						}

						else {

						bones_main_nav(); }

						?>

					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
