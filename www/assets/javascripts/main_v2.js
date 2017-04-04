// add test for pointer-events
Modernizr.addTest("pointerevents",function(){var a=document.createElement("x");a.style.cssText="pointer-events:auto";return a.style.pointerEvents==="auto"});


// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var vimeoPlayers = [];



// jquery $ variable
window.jQuery = window.$ = jQuery;

var retina = (window.devicePixelRatio > 1) ? true : false;
var ytPlayers = new Array();
var currentPlayingVideo;
var previousPlayingVideo;
var pauseTimeout = false;

function onYouTubePlayerAPIReady() {

	$('body').addClass('youtube-api-ready');
	
}

function loadYouTubeEmbed(wrapper) {
	var ytid = wrapper.data('ytid');
	var player = wrapper.attr('id');
	var playerCount = wrapper.closest('.videoEmbed').find('.yt-play').data('player');
	if($('html').hasClass('touch'))
		var showControls = 1;
	else
		var showControls = 0;
	
	ytPlayers[playerCount] = new YT.Player(player, {
		videoId: ytid,
		playerVars: { 
			'autoplay': 0, 
			'controls': showControls,
			'rel': 0,
			'showinfo': 0,
			'modestbranding': 1
		},
        events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		}
    });
}
function onPlayerReady(event) {
	$(event.target.a).closest('.videoEmbed').removeClass('buffering').addClass('ready');
}
function onPlayerStateChange(event) {
	var player = $(event.target.a);
	var wrapper = player.closest('.videoEmbed');

	if(event.data == 0) {
		wrapper.removeClass('playing paused buffering paused-with-thumb');
	}

	if(event.data == 1) {
		wrapper.removeClass('paused paused-with-thumb').addClass('playing');
		
		if(wrapper.hasClass('topEmbed') && !$('html').hasClass('touch'))
			$('body').addClass('yt-playing');

		if($('html').hasClass('touch'))
			player.siblings('img, .yt-play').css({
				"opacity" : 0
			});
			
		for(var i = 0; i < ytPlayers.length; i++) {
			if(ytPlayers[i] && ytPlayers[i] != event.target)
				ytPlayers[i].pauseVideo();
		}
		setTimeout(function() {
			wrapper.removeClass('buffering');
		}, 500);
		
	} else {
		$('body').removeClass('yt-playing');
	}
	
	if(event.data == 2) {
		wrapper.removeClass('playing buffering').addClass('paused');
		if(pauseTimeout)
			clearTimeout(pauseTimeout);

		if($('html').hasClass('touch') && $('body').hasClass('chrome'))
			player.siblings('img, .yt-play').css({
				"opacity" : 1
			});
			
		pauseTimeout = setTimeout(function() {
			if(wrapper.hasClass('paused'))
				wrapper.addClass('paused-with-thumb');
		}, 5000);
	}
	if(event.data == 3) {
		wrapper.removeClass('playing paused paused-with-thumb').addClass('buffering');
	}
	
	if (event.data===YT.PlayerState.ENDED) {
    	event.target.aueVideoById(event.target.getVideoData().video_id);
    }
}


$(document).ready(function() {
	
	if(!Modernizr.pointerevents)
		$('body').addClass('no-pointer-events-support');
	$(window).on('resize', function(){
		var w = window.innerWidth;
		if (w < 768 && $('.takeover')) {
			$('.takeover').find('.desktop').hide();
			$('.takeover').find('.mobile').show();
		}else{
			$('.takeover').find('.desktop').show();
			$('.takeover').find('.mobile').hide();
		}
	});
	$(window).trigger('resize');
	/* LEETS GO */
	
	youtubeEmbeds();
	retinaImgs();
	$('.vimeoEmbed').on('click', function(){
		if ($(this).hasClass('not-ready')) {
			var frame = $(this).find('iframe');
			$(this).addClass('buffering');
			frame.attr('src', $(this).find('iframe').data('src'));
			frame.load(function(){
				vimeoEmbeds(this);
			});
			vimeoPlayers.push(frame);
		}
	});

	$('a[href*=\\#]:not(.play-btn)').click(function(event){
		var targetScroll = $( $.attr(this, 'href') ).offset().top - 73;
	    $('html, body').animate({
	        scrollTop: targetScroll
	    }, 500);
	    event.preventDefault();
	});
	
	$('a.home-link').on('click', function(){
		$('html, body').animate({
	        scrollTop: 0
	    }, 500);
	    return false;
	});

	$('.takeover a.play-btn').on('click', function(){
		$('.takeover').fadeOut(500);
		setTimeout(function(){
			if ($('.top-post').find('iframe.vimeo')) {
				if ($('.top-post').find('.vimeoEmbed').hasClass('not-ready')) {
					var frame = $('.top-post').find('iframe');
					frame.closest('div').addClass('buffering');
					frame.attr('src', frame.data('src'));
					frame.load(function(){
						vimeoEmbeds(this);
					});
					vimeoPlayers.push(frame);
				}
			}else{
				console.log('else');
				$('.top-post').find('.yt-play').trigger('click');
			}
		},500);
		return false;
	});

	/* THE SUPERAWESOME FUNCTIONS: */
	
	function youtubeEmbeds() {
		if($('html').hasClass('touch')) {
			
			$('.videoEmbed.youtubeEmbed').on('click', function(){
				if(!$(this).hasClass('ready')) {
					$(this).closest('.videoEmbed').addClass('buffering');
					var player = $(this).closest('.videoEmbed').find('.youtube');
					loadYouTubeEmbed(player);
				}
			});
			
		} else {
		
			$('a.yt-play, .videoEmbed.youtubeEmbed > img.wp-post-image').on('click', function() {
				var el = $(this);
				var wrapper = el.closest('.videoEmbed');
				var playerCount = el.closest('.videoEmbed').find('a.yt-play').data('player');

				//Pause vimeo videos
				$('.vimeoEmbed:not(.not-ready)').find('.vimeo').each(function(){
            		var frame = $f(this);
            		frame.api('pause');
            	});

				if(wrapper.hasClass('buffering'))
					return false;
	
				if(!wrapper.hasClass('ready')) {
					wrapper.addClass('buffering');
					loadYouTubeEmbed(wrapper.find('.youtube'));
				
					var waitForYt = setInterval(function() {
						if(wrapper.hasClass('ready')) {
							el.trigger('click');
							clearInterval(waitForYt);
						}
					}, 50);
					return false;
				}
				else {
					if(wrapper.hasClass('playing')) {
						if(ytPlayers[playerCount]) 
							ytPlayers[playerCount].pauseVideo();
					} else {
						if(ytPlayers[playerCount]) {
							wrapper.removeClass('paused playing').addClass('buffering');
							ytPlayers[playerCount].playVideo();
						}
					}
				}
				
				
			});
			
		}
	}

	function vimeoEmbeds(thisplayer) {

        var player = thisplayer;
        $f(player).addEvent('ready', ready);

        function addEvent(element, eventName, callback) {
            if (element.addEventListener) {
                element.addEventListener(eventName, callback, false);
            }
            else {
                element.attachEvent(eventName, callback, false);
            }
        }

        function ready(player_id) {
            var froogaloop = $f(player_id);
            var wrapper = $('#' + player_id).closest('.videoEmbed');
            var playBtn = $('#' + player_id).siblings('img');
            froogaloop.api('play');

            if($('html').hasClass('touch')){
            	wrapper.removeClass('buffering');
				wrapper.find('img, .vimeo-play').css({
					"opacity" : 0
				});
			}

            wrapper.removeClass('not-ready').addClass('ready');

            playBtn.on('click', function(){
            	if(!wrapper.hasClass('playing')){
            		froogaloop.api('play');
            	}else{
            		froogaloop.api('pause');
            	}
            });
            function onPlay() {
                froogaloop.addEvent('play', function(data, playerID) {
                	//Pause other videos
                	$('.vimeoEmbed:not(.not-ready)').find('.vimeo:not(#' + playerID +')').each(function(){
                		var frame = $f(this);
                		frame.api('pause');
                	});
                	//Play this video
                    wrapper.removeClass('paused paused-with-thumb').addClass('playing');
		
					if(wrapper.hasClass('topEmbed') && !$('html').hasClass('touch'))
						$('body').addClass('yt-playing');

					if($('html').hasClass('touch'))
						wrapper.find('img, .vimeo-play').css({
							"opacity" : 0
						});
						
					for(var i = 0; i < ytPlayers.length; i++) {
						if(ytPlayers[i] && ytPlayers[i] != event.target)
							ytPlayers[i].pauseVideo();
					}
					setTimeout(function() {
						wrapper.removeClass('buffering');
					}, 500);
                });
            }
            function onPause() {
                froogaloop.addEvent('pause', function(data) {
                	wrapper.removeClass('playing buffering').addClass('paused');
					if(pauseTimeout)
						clearTimeout(pauseTimeout);
					if($('html').hasClass('touch'))
						wrapper.find('img, .vimeo-play').css({
							"opacity" : 1
						});
					$('body').removeClass('yt-playing');
						
					pauseTimeout = setTimeout(function() {
						if(wrapper.hasClass('paused'))
							wrapper.addClass('paused-with-thumb');
					}, 5000);
                });
            }
            function onFinish() {
                froogaloop.addEvent('finish', function(data) {
                    wrapper.removeClass('playing').addClass('paused-with-thumb');
                    $('body').removeClass('yt-playing');
                });
            }
            onPlay();
            onPause();
            onFinish();
        }
	}
	
	function retinaImgs() {
		
		if(retina) {
			$('img.retinafy').each(function() {
				if($(this).data('2x'))
					$(this).attr('src', $(this).data('2x'));
			});
		}
		
	}
	
});
