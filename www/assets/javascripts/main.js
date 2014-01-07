$( document ).ready(function() {

	var viewportWidth = $(window).width();

	$('iframe').each(function() {
		$(this).addClass('video').data('src', $(this).attr('src')).removeAttr('src');
	});
	// Function to load and unload iframes on click of grid items
	$(".column").click(function(e){

		var datasrc = $(this).find(".video").data("src");
		var realsrc = $(this).find(".video").attr("src");

		$(".video").removeAttr( "src" );
		$(this).find(".video").attr("src", datasrc + '?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1&enablejsapi=1');

		//Change play/pause video buttons
		$('.playbtn').removeClass('pausevideo').addClass('playvideo');
		$(this).find('.playbtn').removeClass('playvideo').addClass('pausevideo');

		$('.playbtn').removeClass('mobilePause').addClass('mobilePlay');
		$(this).find('.playbtn').removeClass('mobilePlay').addClass('mobilePause');

		if (realsrc) {
			$(".video").removeAttr( "src" );
			$('.playbtn').removeClass('pausevideo').addClass('playvideo');
			$('.playbtn').removeClass('mobilePause').addClass('mobilePlay');
		};

	});

	// Scroll to contacts
	$("#contactButton").click(function() {
	    $('html, body').animate({

	    	scrollTop: $('#topcontact').position().top - 61

	    }, 500 );
	});


	// Scroll to top
	$("#clientsButton").click(function() {
	    $('html, body').animate({

	    	scrollTop: $('html, body').position().top

	    }, 500 );
	});


	// Remove attributes and classes on tablet and smaller
	$(window).resize(function() {

		var viewportResize = $(window).width();

		if ( viewportResize < 1024 ) {

			$('#logo, #menu').removeAttr("style");
			$('header').removeClass("fixedHeader");

		}

	});


	//Do animation of header on desktop
	$(document).scroll(function() {

		viewportWidth = $(window).width();

		if ( viewportWidth > 1024 ) {

			headerAnimation();

		}

	});

	//Function for headeranimation
    var scrollCalled = false;

	function headerAnimation(){

		var headerPosition = $(window).scrollTop();

		if ( headerPosition >= 89 ) {

			if (!scrollCalled) {

				$( 'header' ).addClass("fixedHeader");

				$( '#logo' ).css({
					"background-image": "url('../assets/images/logoclean.png')",
					"width": "150px",
					"height": "25px",
					"top": "110px"
				});

				$( '#menu' ).css({
					"top": "110px"
				});

				scrollCalled = true;

			};

		}else{

			if (scrollCalled) {

				$( 'header' ).removeClass("fixedHeader");

				$( '#logo, #menu' ).removeAttr("style");

				scrollCalled = false;

			};

		};

	}

});