<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="sv-SE">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(' | ', true, 'left'); ?></title>
	<link href="/wp-content/themes/dallas/style.css" rel="stylesheet" type="text/css" />
	<link href="/wp-content/themes/dallas/styleforjs.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/dallas/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" media="screen" />	
	<!--[if lte IE 6]><style type="text/css">@import "/wp-content/themes/dallas/ie6.css";</style><![endif]-->
	<!--[if IE 7]><style type="text/css">@import "/wp-content/themes/dallas/ie7.css";</style><![endif]-->
	<script type="text/javascript" src="/wp-content/themes/dallas/js/init.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js"></script>
	<?php wp_head(); ?>
</head>
<body class="<?if(is_front_page()){echo "homepage";}else{echo "subpage";}?>">
	<div id="page">
		<div id="header">
		<?php if(is_front_page()){ ?>
			<div id="topline">
				<div id="toplinecontent">
					<div id="headerDate" class="font-small"><?=date("j")?><span class="smaller"><?=date("S")?> <span class="italic">of</span></span> <?=date("F")?></div><!-- headerDate -->
					<div id="tagline">- COMMUNICATING AND FLAVOURING BRANDS IN SCREEN MEDIA -</div>
					<div id="headerIssue" class="font-small">Nr. <?=get_issuenr()?></div><!-- headerIssue -->
				</div><!-- toplinecontent -->
			</div><!-- topline -->
			<h1><a href="/" title="Dallas">Dallas</a></h1>
			<div id="dallassthlm">DALLAS STHLM</div><!-- dallassthlm -->
			<ul id="nav">
				<li id="navitem1" class="current_page_item"><a title="news" href="/">news</a></li>
				<li id="navitem2"><a title="cases" href="/cases/">cases</a></li>
				<li id="navitem3"><a title="contact" href="/contact/">contact</a></li>
				<li id="navitem4"><a title="about" href="/about/">about</a></li>
			</ul>
			<div id="toplineunder"></div>
		<?php }else{ ?>
			<div id="headerDate" class="font-small"><?=date("j")?><span class="smaller"><?=date("S")?> <span class="italic">of</span></span> <?=date("F")?></div><!-- headerDate -->
			<div id="headerIssue" class="font-small">Nr. <?=get_issuenr()?></div><!-- headerIssue -->
			<div id="topline">
				<div id="toplinecontent">
					<div id="tagline">- COMMUNICATING AND FLAVOURING BRANDS IN SCREEN MEDIA -</div>
				</div><!-- toplinecontent -->
			</div><!-- topline -->
			<h1><a href="/" title="Dallas">Dallas</a></h1>
			<ul id="nav">
				<li id="navitem1"><a title="news" href="/">news</a></li>
				<li id="navitem2"<?php echo get_current_nav_class("cases")?>><a title="cases" href="/cases/">cases</a></li>
				<li id="navitem3"<?php echo get_current_nav_class("contact")?>><a title="contact" href="/contact/">contact</a></li>
				<li id="navitem4"<?php echo get_current_nav_class("about")?>><a title="about" href="/about/">about</a></li>
			</ul>
			<div id="toplineunder"></div>
		<?php } ?>
		</div><!-- /header -->
		