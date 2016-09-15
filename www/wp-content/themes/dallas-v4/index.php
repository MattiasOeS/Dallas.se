<?php get_header(); ?>


		
<?php if (have_posts()) : ?>
<div class="inner-section">
	<div class="columns">
		<?php while (have_posts()) : the_post(); ?>
		<div class="column g-6">
			<p class="gray small caps"><?php echo date_i18n("j F, Y" ,strtotime($post->post_date)); ?></p>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>



<?php get_footer(); ?>