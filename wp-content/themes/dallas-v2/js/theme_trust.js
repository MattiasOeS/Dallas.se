
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



function loadImages() {

	var retina = false;
	if (window.devicePixelRatio >= 1.3) { retina = true; }
	
	$('img.lazy').each(function() {
		if(retina == true) {
			$(this).attr('data-original', $(this).data('retina'));
		}
	});
 
}


///////////////////////////////
// Project Filtering 
///////////////////////////////

function projectFilterInit() {
		
	$('#content.fullProjects #projects .thumbs').masonry({
		itemSelector: '.project:not(.inactive)',
		animate: true,
	    animationOptions: {
	      duration: 200,
	      queue: false,
	      easing: 'easeOutQuint'
	    }
	});
	
	/*setTimeout(function() {
		$('#projects_head #filterNav a').each(function() {
			if($(this).hasClass("selected")) {
				$(this).click();
			}
		});
	}, 200);*/
	setTimeout(function() {
		if(window.location.hash != '') {
			var hash = window.location.hash.replace("#","");
			
			$('#projects_head #filterNav a').each(function() {
				if($(this).attr("data-filter") == hash)
					$(this).click();
			});
		}
	}, 200);
	
	$('#projects_head #filterNav a').click(function(){
		var selector = $(this).attr('data-filter');	
		if(window.location.hash != '') {
			window.location.hash = selector;
		}
		$(this).css('outline','none');
		$('ul#filter .current').removeClass('current');
		$(this).parent().addClass('current');
		
		if(selector == 'all') {
			$('#projects .thumbs .project').removeClass('inactive').removeClass('active').fadeIn(200, 'easeOutQuint');
		} else {
			$('#projects .thumbs .project').each(function() {
			
				if(!$(this).hasClass(selector)) {
					$(this).removeClass('active').addClass('inactive').fadeOut(200, 'easeOutQuint');
				} else {
					$(this).addClass('active').removeClass('inactive').fadeIn(200, 'easeOutQuint');
				}
			});
		}		
	
		if ( !$(this).hasClass('selected') ) {
			$(this).parents('#filterNav').find('.selected').removeClass('selected');
			$(this).addClass('selected');
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
			
		$(".project.small .inside").hover(	
			function() {				
				$(this).find('.title').addClass("show");
			},
			function() {				
				$(this).find('.title').removeClass("show");					
		});
		
		$("img.lazy").lazyload({
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
	else {
		$(".project.small .inside").find('.title').css('opacity', '1');
		        
		        
	    $("img.lazy").each(function() {
		    
			var retina = false;
			if (window.devicePixelRatio >= 1.3) { retina = true; }
			
			if(retina) {
				$(this).attr("src", $(this).data("retina"));
			}
			else {
				$(this).attr("src", $(this).data("original"));
			}
			$(this).parent().find(".preloader").fadeOut(100);
			$(this).animate({ 'opacity': '1' }, 200);
	    });
	}
	
	$(".project.small").css("opacity", "1");	
	
	
	
	
	
	
}

function startSlider() {
	
	$('a#showreel_cta').click(function() {
		$('#topSlider .container').animate({
			'left': '-125%'
		}, 700);
	});
	$('a#showreel_back').click(function() {
		$('#topSlider .container').animate({
			'left': '0%'
		}, 500);
	});
	
	
	$("#topBanner h2").fitText(1, { minFontSize: '40px', maxFontSize: '66px' });
	$("#topBanner p").fitText(3, { minFontSize: '16px', maxFontSize: '22px' });
	$("#showreel_cta span.dallaswebicons").fitText(0.1, { minFontSize: '100px', maxFontSize: '166px' });
	$("#showreel_cta span.txt").fitText(0.6, { minFontSize: '18px', maxFontSize: '28px' });
	
}


function caseNavigation() {
	var origTextNext = $('.projectNav .next a').html();
	var origTextPrev = $('.projectNav .previous a').html();
	if($(window).width() < 541) {
		$('.projectNav .next a').html('<span class="drop-right"></span>Next');
		$('.projectNav .previous a').html('<span class="drop-left"></span>Previous');
	}
	$(window).resize(function() {
		if($(window).width() < 541) {
			$('.projectNav .next a').html('<span class="drop-right"></span>Next');
			$('.projectNav .previous a').html('<span class="drop-left"></span>Previous');
		}
		else {
			$('.projectNav .next a').html(origTextNext);
			$('.projectNav .previous a').html(origTextPrev);
		}
	});
	
	$('.project_head h1').css("padding-right", ($('.filterWrap').width() + 10));
}


///////////////////////////////
// Initialize
///////////////////////////////	

var $ = jQuery.noConflict();
$(document).ready(function(){

	loadImages();
	
	projectThumbInit();	
	projectFilterInit();
	startSlider();
	
	$("#pageHead.fitText h1").fitText(1, { minFontSize: '42px', maxFontSize: '66px' });
	$("#content .excerpt p").fitText(3, { minFontSize: '16px', maxFontSize: '22px' });
	
	caseNavigation();
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





