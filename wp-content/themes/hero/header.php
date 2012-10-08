<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
	<?php $body_font = of_get_option('ttrust_body_font'); ?>
	<?php $banner_main_font = of_get_option('ttrust_banner_main_font'); ?>
	<?php $banner_secondary_font = of_get_option('ttrust_banner_secondary_font'); ?>
	<?php if ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>	
	<?php if ($body_font != "" && $body_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>	
	<?php if ($banner_main_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($banner_main_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	<?php if ($banner_secondary_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($banner_secondary_font)); ?>:regular,italic,bold,bolditalic" />
	<?php endif; ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?> >

<div id="container">	
<div id="header">
	<div class="inside clearfix">
	
		<div id="logo"></div>
		
		<div id="mainNav">							
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'menu' => 'Main', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>			
		</div>		
			
	</div>		
		<div id="topBanner">
		
		
			<?php if(is_front_page()): ?>
			
			<div class="flexslider loading">
			
				<ul class="slides">
					<li class="about">
						<div id="bannerText">
							<h2><?php echo of_get_option('ttrust_banner_text_primary'); ?></h2>
							<p><?php echo of_get_option('ttrust_banner_text_secondary');  ?></p>
							<a id="showreel_link" href="#">Watch the showreel</a>
						</div>
					</li>
					<li class="showreelvideo">
						<div id="showreel">
							<div class="youtube showreel">
								<div class="embed" id="Z8Wy7rGKsT0"></div>
								<div class="control play"></div>
							</div>
						</div>
					</li>
				
				</ul>
				
			</div>	
			
			<?php endif; ?>	
			
			<div id="topBanner_bottom"></div>
		</div>	
</div>

<div class="wrap">
<div id="main" class="clearfix">
	