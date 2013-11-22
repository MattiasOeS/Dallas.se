<!DOCTYPE html>
<!--[if lt IE 7 ]> <html dir="ltr" lang="sv-SE" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="sv-SE" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="sv-SE" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html dir="ltr" lang="sv-SE" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" lang="sv-SE"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/> <!-- We hate IE -->
    
    <meta name="viewport" id="viewport" content="user-scalable=no, initial-scale=1, width=device-width"/> <!-- iPhone, iPod, iPad -->
    
   	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- iPhone, iPod, iPad -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black" /> <!-- iPhone, iPod, iPad -->
    
    <meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:image" content="" />
	    
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <!--[if lt IE 9]> <script src="<?php echo XC1_THEME_JS_URI;?>/html5.js"></script> <![endif]-->
	
    <!-- <link rel="stylesheet" href="<?php echo XC1_THEME_CSS_URI; ?>/reset.css" type="text/css" media="screen" /> <!-- Reset -->
    <!-- <link rel="stylesheet" href="<?php echo XC1_THEME_CSS_URI; ?>/print.css" type="text/css" media="print" /> <!-- Print CSS -->
	<link rel="stylesheet" href="<?php echo XC1_THEME_CSS_URI;?>/style.css" type="text/css" media="screen" /> <!-- Style CSS --> 

	
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <?php wp_head(); ?>   
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
	<div id="container">

		<header>
			<div id="statement" class="aligncenter">
				<div id="logo"></div>

				<img class="pinkbullet" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Dallas">

				<h1>Communicating and flavouring brands in screen media since ‘93</h1>

				<img class="pinkbullet" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Dallas">
			</div>

			<div id="menu">
				<ul>
					<li><a href="#">Clients</a><p>&nbsp;&nbsp;/&nbsp;&nbsp;</p></li>
					<li><a href="#topcontact">Contact</a></li>
				</ul>
			</div>

		</header>

		<div id="main">
			<div id="page">