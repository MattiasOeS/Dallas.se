<?php get_header(); ?>

	<div class="inner-section">
	
		<?php if(!is_front_page()) : ?>
			<h2 class="pageTitle alignCenter"><?php the_title(); ?></h2>
		<?php endif; ?>

		<?php get_template_part('parts/part', 'modules'); ?>
	
	</div>
	

<?php get_footer(); ?>