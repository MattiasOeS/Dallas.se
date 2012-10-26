<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	
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
		
		<?php $ttrust_logo = of_get_option('logo'); ?>
		<div id="logo">
		<?php if($ttrust_logo) : ?>				
			<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<?php else : ?>				
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>				
		<?php endif; ?>	
		</div>
		
		<div class="divider"></div>
		
		<div id="mainNav">							
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'menu' => 'Main', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>			
		</div>		
			
	</div>		
		
		
		
	<?php if(is_front_page()): ?>
		<div id="topBanner">
			
			<div id="topSlider">
				<div class="container clearfix">
					<div class="about">
						<div id="bannerText">
							<h2><?php echo of_get_option('ttrust_banner_text_primary'); ?></h2>
							<p><?php echo of_get_option('ttrust_banner_text_secondary');  ?></p>
						</div>
						<a id="showreel_cta">
							<span class="dallaswebicons">a</span>
							<span class="txt">Play the Dallas Sthlm Showreel</span>
						</a>
					</div>
					<div class="showreelvideo">
						<div id="showreel">
							<div class="youtube showreel">
								<div class="embed" id="Z8Wy7rGKsT0"></div>
								<div class="control play"></div>
							</div>
						</div>
						<a id="showreel_back" class="dallaswebicons">b</a>
					</div>
				</div>
			</div>
			
		</div>	
	<?php endif; ?>	
		
</div>

<div class="wrap">
<div id="main" class="clearfix">
	