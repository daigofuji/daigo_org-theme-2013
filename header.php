<!doctype html>
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<!-- Welcome to web home of Daigo Fujiwara
       __      _                              
  ____/ /___ _(_)___ _____   ____  _________ _
 / __  / __ `/ / __ `/ __ \ / __ \/ ___/ __ `/
/ /_/ / /_/ / / /_/ / /_/ // /_/ / /  / /_/ / 
\__,_/\__,_/_/\__, /\____(_)____/_/   \__, /  
             /____/                  /____/   
-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/devices/daigo-org-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/devices/daigo-org-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/devices/daigo-org-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/devices/daigo-org-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/devices/daigo-org-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/devices/daigo-org-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/devices/daigo-org-load.png" media="screen and (max-device-width: 320px)" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="contain-to-grid">
	<!-- Starting the Top-Bar -->
	<nav class="top-bar">
	    <ul class="title-area">
	        <li class="name">
	        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="icon-stack">
  <i class="icon-circle icon-stack-base midcolor"></i>
  <i class="the-d icon-d">d</i>
</span></a></h1>
	        </li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	    </ul>
	    <section class="top-bar-section">
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="left">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li'
	            ) ),
	        ) );
	    ?>
	    <ul class="right">
	    	<li class="divider hide-for-small"></li>
	    	<li class="has-form"><?php get_search_form(); ?></li>
	    </ul>
	    </section>
	</nav>
	<!-- End of Top-Bar -->
</div>

<header class="row" role="banner">
	<div class="small-12 columns">
		<div class="brand">
			<div class="glasses-conatiner"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glasses.png"></a></div>
			<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h4 class="subheader"><?php bloginfo('description'); ?></h4>
		</div><!-- /brand -->
		<hr/>
	</div>
</header>

<!-- Start the main container -->
<section class="container" role="document">
	<div class="row">