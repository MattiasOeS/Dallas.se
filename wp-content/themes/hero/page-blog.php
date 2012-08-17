<?php /*
Template Name: Blog
*/ ?>
<?php get_header(); ?>

<div id="pageHead" class="withBorder">

<?php while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
<?php endwhile; ?>

</div>


<div id="content" class="full blog">

<?php
$query = new WP_Query(array(
		'category_name' => 'short', 
		'posts_per_page' => '-1' 
	));

while ( $query->have_posts() ) : $query->the_post(); 
?>
<div class="blog-post">
 	<h2><?php the_title(); ?></h2>
 	
 	<small class="date"><?php the_time('F jS, Y') ?></small>
 	
 	<?php the_content(); ?>
</div>
 	
<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>	