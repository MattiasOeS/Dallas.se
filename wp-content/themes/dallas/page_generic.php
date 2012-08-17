<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Generic
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="content" class="generic">
		<h2><?php the_title(); ?></h2>		
		<div class="columnx2">
			<?php the_content(); ?>
		</div> <!-- columnx2 -->
		<div class="assets">
			<?php echo get_post_media_html($post->ID, "medium")?>
		</div><!-- assets -->
	</div><!-- content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>