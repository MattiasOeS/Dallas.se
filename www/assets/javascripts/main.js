$( document ).ready(function() {

	var viewportWidth = $(window).width();

	var columnclick = true;

	$(".column").click(function(e){

		var datasrc = $(this).find(".video").attr("data-src");

		if (columnclick) {
			$(this).closest(".column").find(".video").attr("src", datasrc);
			columnclick = false;
		}else {
			$(this).closest(".column").find(".video").removeAttr( "src" );
			columnclick = true;
		}

		e.preventDefault();

	});

	$("#contactButton").click(function() {
	    $('html, body').animate({

	    	scrollTop: $('#topcontact').position().top - 62

	    }, 500 );
	});

	$("#clientsButton").click(function() {
	    $('html, body').animate({

	    	scrollTop: $('html, body').position().top - 62

	    }, 500 );
	});

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