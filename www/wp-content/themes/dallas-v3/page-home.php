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
	<!--<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>-->
	<div class="column grid-12">

		<div class="fluidMedia">
			<!--<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>-->
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/00_DallasSthlm_Julkort_2013_Montage_AJ03.jpg" alt="">
		    <iframe id="frame1" class="video" data-src="//www.youtube.com/embed/w6rnP0wPabQ?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1&enablejsapi=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderLarge">

				<div class="playbtn playvideo"></div>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3>GOD JUL<!--<?php the_title(); ?>--></h3>
				<!--<?php the_content(); ?>-->
				<p>God jul och gott nytt år!</p>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<h3>GOD JUL<!--<?php the_title(); ?>--></h3>

			<div class="playbtn mobilePlay"></div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/01_Bris_puff.jpg" alt="">
		</div>
		

		<div class="hoverContent block">

			<div class="textHolderSmall centered">

				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">BRIS</h3>
				<p class="small">Vi är otroligt stolta över att snart kunna presentera ett helt nytt utryck för Bris. Första stegen mot en ny look kommer strax i form av site och mobil…håll er uppkopplade!</p>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<h3>BRIS</h3>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/02_NEMS_inspelning.jpg" alt="">
		    <iframe class="video" data-src="//www.youtube.com/embed/DnEwmb3wWVg?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<div class="playbtn playvideo"></div>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">NYA ENSAMMA MAMMA SÖKER</h3>
				<p class="small">I en av våra skönaste inspelningar där vi inte bara hade tur med vädret utan även med Mammorna! Sen var det bara att stänga in sig och animera blommor så det stod härliga till...</p>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<h3>NYA ENSAMMA MAMMA SÖKER</h3>


			<div class="playbtn mobilePlay">
			</div>

		</div>

	</div>

	<!-- <div class="column grid-12">

		<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case4bg.png" alt="">

		<div class="hoverContent">

			<div class="textHolderLarge">

				<img class="mobilehide" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3>Programvinjett för Svenska Hockeyligan</h3>
				<p>Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div> -->

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

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/03_Sailracing_puff.jpg" alt="">
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">SAILRACING</h3>
				<p class="small">Att integrera en webshop i en varumärkessajt kan vara en utmaning, men vinst förbästa design i Scandinavian E-business Camp 2013 och silver för bästa e-handel i Retail Awards visar på att vi lyckades! Bedöm själv på <a href="http://www.sailracing.se">www.sailracing.se</a></p>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<a href="http://www.sailracing.se">SAILRACING</a>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/04_Eniro.jpg" alt="">
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<!-- <div class="playbtn playvideo"></div> -->
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">ENIRO</h3>
				<a class="small" href="http://www.eniro.se/julklappstips/">Värdens första Julklappsgenerator! Not! Men är man inte först får man göra finast!</a>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<a href="http://www.eniro.se/julklappstips/">ENIRO</a>

		</div>

	</div>

	<!-- <div class="column grid-12">

		<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case7bg.png" alt="">

		<div class="hoverContent">

			<div class="textHolderLarge">

				<img class="mobilehide" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3>Programvinjett för Svenska Hockeyligan</h3>
				<p>Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div> -->

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/05_Mavshack_puff.jpg" alt="">
		    <iframe id="frame6" class="video" data-src="//www.youtube.com/embed/EdMn5VbcMzY?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<div class="playbtn playvideo"></div>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">MAVSHACK</h3>
				<p  class="small">En liten film om ett företag som siktar på världsherravälde! Vi börjar med Filippinerna…</p>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<h3>MAVSHACK</h3>

			<div class="playbtn mobilePlay">
			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/06_DallasSthlm_Ref_SM_General_Interactive_1500x844.jpg" alt="">
		    <iframe class="video" data-src="//www.youtube.com/embed/Z2JrdBQeKKA?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<div class="playbtn playvideo"></div>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">SWEDISH MATCH</h3>
				<p  class="small">Under tre år har vi haft äran att digitalt, filmiskt och visuellt förfina det svenska snusarvets mediala närvaro, på både produkt- och varumärkesnivå.  Strategier, Siter, Touchscreens, kampanjer, kortfilmer, logotyper, och en och annan en bok. Fint som snus!</p>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<h3>SWEDISH MATCH</h3>

			<div class="playbtn mobilePlay">
			</div>

		</div>

	</div>

	<!-- <div class="column grid-12">

		<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case10bg.png" alt="">

		<div class="hoverContent">

			<div class="textHolderLarge">

				<img class="mobilehide" src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3>Programvinjett för Svenska Hockeyligan</h3>
				<p>Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case11bg.png" alt="">
		    <iframe id="frame8" class="video" data-src="//www.youtube.com/embed/MEa7d70k16k?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<div class="playbtn playvideo"></div>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p  class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

		<div class="mobileTitleHolder">
			<div class="mobileTitle">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="playbtn mobilePlay">
			</div>

		</div>

	</div>

	<div class="column grid-6">

		<div class="fluidMedia">
			<img src="<?php echo XC1_THEME_IMAGES_URI;?>/case12bg.png" alt="">
		    <iframe id="frame9" class="video" data-src="//www.youtube.com/embed/p_IUYRtjnxE?rel=0&vq=hd720&controls=0&showinfo=0&autoplay=1" frameborder="0"></iframe>
		</div>

		<div class="hoverContent">

			<div class="textHolderSmall">

				<div class="playbtn playvideo"></div>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3 class="large">Programvinjett för Svenska Hockeyligan</h3>
				<p  class="small">Dallas Sthlm för CMORE/SHL 2013. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

			</div>

		</div>

		<div class="mobileTitleHolder">
			<div class="mobileTitle">
				<h3><?php the_title(); ?></h3>
			</div>

			<div class="playbtn mobilePlay">
			</div>

		</div>

	</div>
	<?php endwhile;?> -->
</div>

<?php get_footer(); ?>