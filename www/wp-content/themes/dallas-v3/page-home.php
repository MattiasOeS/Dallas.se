<?php get_header(); ?>

<?php 
$queryObject = new WP_Query( 
	array( 
		// 'post_type' => array('video', 'photo'), 
		'showposts' => '-1',
		'cat' => '3, 4',
		'orderby' => 'menu_order'
	) 
);
$queryObjectTop = new WP_Query( 
	array( 
		'showposts' => '1', 
		'cat' => '5' 
	) 
);
?>


<div class="row clear nomargin">

	<!-- ///////// 
	Display top box 
	/////////// -->
	<?php $counter = 0 ?>
	<?php if ($queryObjectTop->have_posts()) : while ($queryObjectTop->have_posts()) : $queryObjectTop->the_post(); ?>
    <div class="column grid-12">

		<div class="fluidMedia">
			<?php the_post_thumbnail(); ?>

			<?php if( get_field('iframe') ): ?>
				<?php the_field('iframe'); ?>
			<?php endif; ?>
		</div>

		<div class="hoverContent">

			<div class="textHolderLarge">

				<?php if( get_field('iframe') ): ?>
					<div class="playbtn playvideo"></div>
				<?php endif; ?>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3><?php echo get_the_title(); ?></h3>

				<?php the_content(); ?>

			</div>

		</div>

		<div class="mobileTitleHolder">

			<h3><?php echo get_the_title(); ?></h3>

			<?php if( get_field('iframe') ): ?>
				<div class="playbtn mobilePlay"></div>
			<?php endif; ?>
		</div>

	</div>
	<?php $counter = $counter + 2; endwhile; endif; ?>

	<!-- ///////////////////// 
	Loop through rest of posts 
	////////////////////// -->
	<?php if ($queryObject->have_posts()) : while ($queryObject->have_posts()) : $queryObject->the_post(); ?>
	<?php if ( in_category(array('4')) ) { ?>
           <div class="column grid-12">
           <?php $counter = $counter + 2; ?>
	<?php } else { ?>
	           <div class="column grid-6">
	           <?php $counter++;?>
	<?php } ?>

	<?php if ( in_category(array('3')) ) { ?>
		<div class="fluidMedia">
	<?php } ?>

			<?php the_post_thumbnail(); ?>

			<?php if( get_field('iframe') ): ?>
				<?php the_field('iframe'); ?>
			<?php endif; ?>
		    
	<?php if ( in_category(array('3')) ) { ?>
		</div>
	<?php } ?>

		<?php if( get_field('linkout') ): ?>
			<a href="<?php the_field('linkout'); ?>">
		<?php endif; ?>
		<div class="hoverContent">

			<?php if ( in_category(array('4')) ) { ?>
				<div class="textHolderLarge">
			<?php } else { ?>
	           <div class="textHolderSmall">
			<?php } ?>

				<?php if( get_field('iframe') ): ?>
					<div class="playbtn playvideo"></div>
				<?php endif; ?>
				<img src="<?php echo XC1_THEME_IMAGES_URI;?>/pinkdot.png" alt="Pink dot">

				<h3><?php echo get_the_title(); ?></h3>

				<?php the_content(); ?>

			</div>

		</div>
		<?php if( get_field('linkout') ): ?>
			</a>
		<?php endif; ?>

		<div class="mobileTitleHolder">

			<?php if( get_field('linkout') ): ?>
				<a href="<?php the_field('linkout'); ?>"><?php echo get_the_title(); ?>
			<?php endif; ?>

			<?php if(! get_field('linkout') ): ?>
				<h3><?php echo get_the_title(); ?></h3>
			<?php endif; ?>

			<?php if( get_field('linkout') ): ?>
				</a>
			<?php endif; ?>

			<?php if( get_field('iframe') ): ?>
				<div class="playbtn mobilePlay"></div>
			<?php endif; ?>

		</div>

	</div>
	<?php if ($counter == 4){ ?>
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
	<?php } ?>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>