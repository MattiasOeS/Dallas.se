
///////////////////////////////		
// Mobile Detection
///////////////////////////////

function isMobile(){
    return (
        (navigator.userAgent.match(/Android/i)) ||
		(navigator.userAgent.match(/webOS/i)) ||
		(navigator.userAgent.match(/iPhone/i)) ||
		(navigator.userAgent.match(/iPod/i)) ||
		(navigator.userAgent.match(/iPad/i)) ||
		(navigator.userAgent.match(/BlackBerry/))
    );
}

///////////////////////////////
// Project Filtering 
///////////////////////////////

function projectFilterInit() {
	jQuery('#filterNav a').click(function(){
		var selector = jQuery(this).attr('data-filter');	
		jQuery(this).css('outline','none');
		jQuery('ul#filter .current').removeClass('current');
		jQuery(this).parent().addClass('current');
		
		if(selector == 'all') {
			jQuery('#projects .thumbs .project.inactive .inside').fadeIn('slow');
			jQuery('#projects .thumbs .project').removeClass('inactive').removeClass('active');
		} else {
			jQuery('#projects .thumbs .project').each(function() {
				if(!jQuery(this).hasClass(selector)) {
					jQuery(this).removeClass('active').addClass('inactive');
					jQuery(this).find('.inside').fadeOut('normal');
				} else {
					jQuery(this).addClass('active').removeClass('inactive');
					jQuery(this).find('.inside').fadeIn('slow');
				}
			});
		}		
	
		if ( !jQuery(this).hasClass('selected') ) {
			jQuery(this).parents('#filterNav').find('.selected').removeClass('selected');
			jQuery(this).addClass('selected');
		}
	
		return false;
	});		
}

///////////////////////////////
// Project thumbs 
///////////////////////////////

function projectThumbInit() {
	
	if(!isMobile()) {		
	
		jQuery(".project.small .inside a").hover(
			function() {
				jQuery(this).find('img:last').stop().fadeTo("fast", .1);
				jQuery(this).find('img:last').attr('title','');	
			},
			function() {
				jQuery(this).find('img:last').stop().fadeTo("fast", 1);	
		});
			
		jQuery(".project.small .inside").hover(	
			function() {				
				jQuery(this).find('.title').stop().fadeTo("fast", 1);
				jQuery(this).find('img:last').attr('title','');				
			},
			function() {				
				jQuery(this).find('.title').stop().fadeTo("fast", 0);							
		});
		
	}
	
	jQuery(".project.small").css("opacity", "1");	
}

///////////////////////////////
// Parallax
///////////////////////////////

// Calcualte the home banner parallax scrolling
function scrollBanner() {

	//Get the scoll position of the page
	scrollPos = jQuery(this).scrollTop();
	
	//Scroll and fade out the banner text
	jQuery('#bannerText, #showreel .youtube a.playbtn').css({
	  'margin-top' : -(scrollPos/3)+"px"
	});
	jQuery('#homeBanner > .flexslider').css({
	  'opacity' : 1-(scrollPos/300)
	});
	//Scroll the background of the banner
	jQuery('#homeBanner').css({
	  'background-position' : 'center ' + (-scrollPos/8)+"px"
	});
	
}


///////////////////////////////
// Initialize
///////////////////////////////	

jQuery.noConflict();
jQuery(document).ready(function(){
	
	if(!isMobile()) {
		jQuery(window).scroll(function() {	      
	       scrollBanner();	      
		});
	}
	projectThumbInit();	
	projectFilterInit();
	jQuery(".videoContainer").fitVids();
	
	jQuery("#homeBanner .flexslider").flexslider({
		slideshow: false
	});
	
	jQuery("#homeBanner h2").fitText(1.7, { minFontSize: '24px', maxFontSize: '64px' });	
	
	
	jQuery("#showreel a.playbtn").click(function() {
		jQuery("#showreel .youtube iframe").fadeIn(800);
		showreelPlayer.playVideo();
	});
	
	jQuery("#homeBanner ol.flex-control-nav > li > a").click(function() {
		showreelPlayer.pauseVideo();
		showreelPlayer.seekTo(0, true);
		setTimeout(function() {
			jQuery("#showreel .youtube iframe").hide();
		}, 1000);
		
	});
	
});



/** Load youtube API **/
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var showreelPlayer;
function onYouTubeIframeAPIReady() {
	showreelPlayer = new YT.Player('yt_showreel', {
		events: {
	        'onReady': onPlayerReady
        }
	});
	
	
}
function onPlayerReady(event) {
	showreelPlayer.playVideo();
}