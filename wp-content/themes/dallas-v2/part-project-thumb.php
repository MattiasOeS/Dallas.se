<?php global $p; ?>
<div class="project small <?php echo $p; ?>" id="project-<?php echo $post->post_name;?>">
	<div class="inside">
	<a href="<?php the_permalink(); ?>" rel="bookmark" >	
		<div class="preloader">0</div>
		<?php 
		$img_id = get_post_thumbnail_id();
		$original_img = wp_get_attachment_image_src ($img_id, 'ttrust_one_third_cropped');
		?>
		<img src="" data-original="<?php echo $original_img[0]; ?>" class="thumb lazy" />
		<div class="title">
			<div class="title_inside">
				<span>
					<?php the_title(); ?><br />
					<span class="view">View case</span>
				</span>
			</div>
		</div>
	</a>
	</div>																																
</div>