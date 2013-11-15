(function($) {
	lazy_load_init();
	$( 'body' ).bind( 'post-load', lazy_load_init ); // Work with WP.com infinite scroll

	function lazy_load_init() {
		jQuery( 'img[data-lazy-src]' ).bind( 'scrollin', { distance: 0 }, function() {
			console.log("A");
			var img = this,
				$img = jQuery(img),
				src = $img.attr( 'data-lazy-src' ),
				preloader = $img.parent().find('.preloader'),
				count = 0;
			$img.unbind( 'scrollin' ) // remove event binding
				.hide()
				.removeAttr( 'data-lazy-src' )
				.attr( 'data-lazy-loaded', 'true' );;
			img.src = src;
			var counting = setInterval(function() {
				preloader.html(count);
				count++;
				if(count == 10 || preloader.html() == 9) {
					clearInterval(counting);
					preloader.fadeOut(100);
				}
			}, 50);
			$img.delay(500).fadeIn(500);
			
			
			
		});
		jQuery(window).bind("resize",function(event){
			jQuery('img[data-lazy-src]').trigger('scrollin');
		});

	}
})(jQuery);