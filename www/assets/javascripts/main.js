$( document ).ready(function() {

	viewportWidth = $(window).width();

	$( window ).resize(function() {

		var viewportResize = $(window).width();

		if ( viewportResize < 1024 ) {

			$('#logo, #menu').removeAttr("style");
			$('header').removeClass("fixedHeader");

		}

	});


	$(document).scroll(function() {

		viewportWidth = $(window).width();

		if ( viewportWidth > 1024 ) {

			headerAnimation();

		}

	});

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