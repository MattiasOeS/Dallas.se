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
 	<h2><?php the_title(); ?></h2>
 	
 	<small class="date"><?php the_time('F jS, Y') ?></small>
 	
 	<?php
	$img_id = get_post_thumbnail_id();
	$img = wp_get_attachment_image_src ($img_id, 'ttrust_half_notcropped');
	$img_retina = wp_get_attachment_image_src ($img_id, 'ttrust_half_notcropped_x2');
	if($img != '') {
		?>
		<img data-aspect-ratio="auto" data-src="<?php echo $img[0]; ?>" data-high-resolution-src="<?php echo $img_retina[0]; ?>" style="display: none;" />
		<noscript>
			<img src="<?php echo $img[0]; ?>" />
		</noscript>
		<?php
	}
	
	 
 	the_excerpt(); 
 	
 	if(get_the_content() != '') {
	 	?>
	 	<a class="more" href="<?php the_permalink(); ?>">Read more &rarr;</a>
	 	<?php
 	}
 	?>
 	
 	
 	
 	<!-- <a href="<?php the_permalink(); ?>"></a> -->
</div>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>	