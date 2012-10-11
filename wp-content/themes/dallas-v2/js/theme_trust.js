
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
		
	jQuery('#content.fullProjects #projects .thumbs').masonry({
		itemSelector: '.project:not(.inactive)',
		animate: true,
	    animationOptions: {
	      duration: 200,
	      queue: false,
	      easing: 'easeOutQuint'
	    }
	});
	
	jQuery('#filterNav a').click(function(){
		var selector = jQuery(this).attr('data-filter');	
		jQuery(this).css('outline','none');
		jQuery('ul#filter .current').removeClass('current');
		jQuery(this).parent().addClass('current');
		
		if(selector == 'all') {
			jQuery('#projects .thumbs .project').removeClass('inactive').removeClass('active').fadeIn(200, 'easeOutQuint');
		} else {
			jQuery('#projects .thumbs .project').each(function() {
			
				if(!jQuery(this).hasClass(selector)) {
					jQuery(this).removeClass('active').addClass('inactive').fadeOut(200, 'easeOutQuint');
				} else {
					jQuery(this).addClass('active').removeClass('inactive').fadeIn(200, 'easeOutQuint');
				}
			});
		}		
	
		if ( !jQuery(this).hasClass('selected') ) {
			jQuery(this).parents('#filterNav').find('.selected').removeClass('selected');
			jQuery(this).addClass('selected');
		}
		
		$('#content.fullProjects #projects .thumbs').masonry();
		setTimeout(function() {
			$(window).resize();
		}, 50);
		
		$('#content.fullProjects #projects .thumbs .preloader').each(function() {
			if($(this).html() == '9') {
				$(this).hide();
			}
		});
		
		

		return false;
	});
	
}

///////////////////////////////
// Project thumbs 
///////////////////////////////

function projectThumbInit() {
	
	if(!isMobile()) {		
	
			
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
	
	
	jQuery("img.lazy").lazyload({
		load: function() {
		
			var preloader = $(this).parent().find(".preloader"),
				count = 0;
			
			var counting = setInterval(function() {
				preloader.html(count);
				count++;
				if(count == 10 || preloader.html() == 9) {
					clearInterval(counting);
					preloader.fadeOut(100);
				}
			}, 25);
			
			$(this).delay(250).animate({
				'opacity': '1'
			});

		}
	});
	
	
}

///////////////////////////////
// Parallax
///////////////////////////////

// Calcualte the home banner parallax scrolling
function scrollBanner() {

	//Get the scoll position of the page
	scrollPos = jQuery(this).scrollTop();
	scrollMax = jQuery(document).height() - jQuery(window).height();
	/*
	if(scrollPos > 0 && scrollPos < scrollMax) {
	
		//Scroll and fade out the banner text
		jQuery('#topBanner .flexslider').css({
			'opacity' : 1-(scrollPos/600)
		});
		jQuery('#topBanner').css({
		  'margin-top' : -(scrollPos/5)+"px"
		});
		jQuery('.wrap').css({
			'margin-top' : -(scrollPos/2.5)+"px"
		});
		jQuery('#topBanner_bottom').css({
			'margin-bottom' : (scrollPos/2.5)+"px"
		});
		jQuery('#header > .inside').css({
			'margin-top' : (scrollPos/1.3)+"px"
		});
	
	} else {
		
		jQuery('#header > .inside').css({
			'margin-top' : '0px'
		});
	}
	*/
}


///////////////////////////////
// Initialize
///////////////////////////////	

var $ = jQuery.noConflict();
$(document).ready(function(){
	
	if(!isMobile()) {
		jQuery(window).scroll(function() {	      
	       scrollBanner();	      
		});
	}
	
	
	projectThumbInit();	
	projectFilterInit();
		
	
	$("#topBanner").css("height", $("#topBanner").height());
	$(window).resize(function() { $("#topBanner").css("height", "auto"); });
	
	
	
	
	
});


/* showreel */
var video,
	showreel,
	yt_id,
	showreel_loaded = false;

function onYouTubeIframeAPIReady() {

	if(!isMobile()) {
		$('div.youtube').each(function() {
			yt_id = $(this).find(".embed").attr("id");
			
			video = new YT.Player(yt_id, {
				videoId: yt_id,
				playerVars: {
					showinfo: '0',
					controls: '0'
				},
				events: {
					'onReady': onPlayerReady,
					'onStateChange': onPlayerStateChange
				}
			});
			console.log(video);
		});
	}
	else {
		$("#showreel .control").hide();
		showreel = new YT.Player('showreel_embed', {
			videoId: 'Z8Wy7rGKsT0',
			playerVars: {
				showinfo: '0',
				controls: '1'
			},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
		});		
	}  
	      
}

function onPlayerReady(event) {
	if($(event.target.a).parent().hasClass("showreel")) {
		showreel_loaded = true;
		showreel = event.target;
	}
	
	$(event.target.a).parent().find('.control').click(function() {
		if($(this).hasClass("play")) {
			event.target.playVideo();
		}
		if($(this).hasClass("pause")) {
			event.target.pauseVideo();
		}
	});
}

function onPlayerStateChange(event) {
	
	var controller = $(event.target.a).parent().find('.control');
	
	if(event.data == 0) {
		controller.removeClass("pause").addClass("play");
		event.target.seekTo(0, false);
		event.target.pauseVideo();
	}
	if(event.data == 1) {
		controller.removeClass("play").addClass("pause");
	}
	if(event.data == 2) {
		controller.removeClass("pause").addClass("play");
	}
	
}




$(window).load(function() {
	
	$("#topBanner .flexslider").flexslider({
		prevText: "​b",
		nextText: "a",
		animation: "slide",
		useCSS: false,
		animationLoop: false,
		slideshow: false,
		start: function(slider) {
			slider.removeClass("loading");
			jQuery("#topBanner h2").fitText(1.9, { minFontSize: '18px', maxFontSize: '36px' });
			jQuery("#topBanner p").fitText(2.5, { minFontSize: '13px', maxFontSize: '21px' });	
			jQuery("#topBanner a#showreel_link").show();
		},
		before: function(slider) {
			if(showreel_loaded)
				showreel.pauseVideo();
		}
	});
	
	$("#showreel_link").click(function() {
		$("#topBanner .flexslider").flexslider("next");
		
		return false;
	});
	
	
});





