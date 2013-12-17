<?php get_header(); ?>

<?php $args = array(
	'offset'           => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true );

	$the_query = new WP_Query( $args );
?>

<div class="row clear nomargin">
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
	<div class="column grid-12 pointer">

		<div class="fluidMedia">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		    <iframe id="frame1" class="video" data-src="//www.youtube.com/embed/DWhWH8ie0NQ?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1&enablejsapi=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderLarge">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case2bg.png">
		    <iframe id="frame2" class="video" data-src="//www.youtube.com/embed/TSUv8jdr3t0?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>
		

		<div class="hoverContent block">

			<div class="textHolderSmall centered">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case3bg.png">
		    <iframe id="frame3" class="video" data-src="//www.youtube.com/embed/MgswVCMO63w?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-12">

		<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case4bg.png" alt="">

		<div class="hoverContent">

			<div class="textHolderLarge">

				<img class="mobilehide" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3>Programvinjett för Svenska Hockeyligan</h3>
				<p>Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case5bg.png">
		    <iframe id="frame4" class="video" data-src="//www.youtube.com/embed/tyqN7n2fuvo?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case6bg.png">
		    <iframe id="frame5" class="video" data-src="//www.youtube.com/embed/Z2JrdBQeKKA?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="contact column grid-12" id="topcontact">

		<div class="contactinfo aligncenter">

			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/contactlogo.png" alt="Dallas">

			<div class="numbers">

				<h2>Sthlm: +46 (0)8-670 96 00</h2>
				<span><img src="<?php echo XC1_THEME_IMAGES_URI;?>/whitedot.png" alt="Bullet"></span>
				<h2>Åre: +46 (0)8-670 96 00</h2>

			</div>

			<a href="mailto:info@dallas.se">info@dallas.se</a>
			<span>/</span>
			<a href="https://www.facebook.com/dallassthlm">Facebook</a>
			<span>/</span>
			<a href="http://www.youtube.com/user/dallassthlm">Youtube</a>
			<span>/</span>
			<a href="https://twitter.com/dallassthlm">Twitter</a>

			<img class="ornament" src="<?php echo XC1_THEME_IMAGES_URI;?>/blackornament.png" alt="Ornament">

		</div>

	</div>

	<div class="column grid-12">

		<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case7bg.png" alt="">

		<div class="hoverContent">

			<div class="textHolderLarge">

				<img class="mobilehide" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3>Programvinjett för Svenska Hockeyligan</h3>
				<p>Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case8bg.png">
		    <iframe id="frame6" class="video" data-src="//www.youtube.com/embed/EdMn5VbcMzY?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p  class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case9bg.png">
		    <iframe id="frame7" class="video" data-src="//www.youtube.com/embed/8QIOuLVeUw4?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p  class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-12">

		<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case10bg.png" alt="">

		<div class="hoverContent">

			<div class="textHolderLarge">

				<img class="mobilehide" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3>Programvinjett för Svenska Hockeyligan</h3>
				<p>Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case11bg.png">
		    <iframe id="frame8" class="video" data-src="//www.youtube.com/embed/MEa7d70k16k?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p  class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case12bg.png">
		    <iframe id="frame9" class="video" data-src="//www.youtube.com/embed/p_IUYRtjnxE?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<a href="#" class="playvideo"><img src="<?php echo XC1_THEME_IMAGES_URI;?>/play.png"></a>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p  class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>
	<?php endwhile;?>
</div>

<?php get_footer(); ?>