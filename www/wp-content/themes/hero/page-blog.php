<?php /*
Template Name: Blog
*/ ?>

<?php get_header(); ?>

<div id="content" class="full blog">

<?php
$query = new WP_Query(array(
		'category_name' => 'short', 
		'posts_per_page' => '-1' 
	));

while ( $query->have_posts() ) : $query->the_post(); 
?>
<div class="blog-post">
 	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 	
 	<small class="date"><?php the_time('F jS, Y') ?></small>
 	
 	<?php
 		global $more;
 		$more = 0;
 	?>
 	
 	<?php the_content('Read on...'); ?>
 	
</div>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>	