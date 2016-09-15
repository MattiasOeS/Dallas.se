<!DOCTYPE html>
<!--<![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="sv-SE" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="sv-SE" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="sv-SE" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html dir="ltr" lang="sv-SE" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta name="viewport" id="viewport" content="user-scalable=no, initial-scale=1, width=device-width" />
   	<meta name="apple-mobile-web-app-capable" content="yes" />
	    
    <title>
    	<?php 
    	if(is_front_page()) {
	    	bloginfo('name');
    	} else {
	    	echo wp_title('', false) . ' | ' . get_bloginfo('name');
	    }
	    ?>
	</title>
	
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
    
    <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/assets/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#f2f9f4">
	<meta name="msapplication-TileImage" content="/assets/favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
	
    <script src="/assets/javascripts/modernizr.js" type="text/javascript"></script>
    
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
    
    <?php wp_head(); ?>   
    
	
</head>
<body <?php body_class(); ?>>


<header>
	<div class="inner">
		<div class="bg-l"></div>
		<div class="bg-r"></div>
		
		<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
			<h1 class="site-title"><img class="retinafy" width="243" src="/assets/images/logo-transparent.png?v=2" data-2x="/assets/images/logo-transparent@2.png?v=2" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" /></h1>
		</a>
		
		<nav>
			<?php wp_nav_menu( array('menu' => 'header-menu', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
		</nav>
	</div>
</header>


<section id="wrapper">

