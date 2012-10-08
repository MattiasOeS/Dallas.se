<?php $slideshow_delay = of_get_option('ttrust_slideshow_delay'); ?>
<?php $autoPlay = ($slideshow_delay != "0") ? 1 : 0; ?>
<?php $slideshow_effect = of_get_option('ttrust_slideshow_effect'); ?>

<script type="text/javascript">
//<![CDATA[

jQuery(window).load(function() {

	var youtube = jQuery("#content > #youtube");
	if(youtube.length > 0) {
		jQuery('#project-slider > ul.slides').append('<li><div class="youtube_embed">'+youtube.html()+'</div></li>');
	}
	
	jQuery('.project-content .flexslider').prependTo(jQuery('#content > .project'));		
	jQuery('.flexslider').flexslider({ 
		directionNav: true,
		slideshow: false,				 				
		animation: '<?php echo $slideshow_effect; ?>',
		animationLoop: true,
		prevText: "h",
		nextText: "j"
	});  
	
});

//]]>
</script>