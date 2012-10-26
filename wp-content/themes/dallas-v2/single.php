<?php /*
Template Name: Blog
*/ ?>


<?php get_header(); ?>

	<div id="pageHead" class="clearfix">
		<div class="projectNav clearfix">
			<div class="previous <?php if(!get_previous_post(true)){ echo 'inactive'; }?>">
				<?php previous_post_link('%link', '<span class="drop-left"></span>%title', true); ?>
			</div>
			<div class="next <?php if(!get_next_post(true)){ echo 'inactive'; }?>">
				<?php next_post_link('%link', '%title<span class="drop-right"></span>', true); ?>
			</div>
		</div>
		
		<div class="project_head">
			<?php $blog_page_id = of_get_option('ttrust_blog_page'); ?>
			<?php $blog_page = get_page($blog_page_id); ?>
			<h1><?php echo $blog_page->post_title; ?></h1>
			<?php $page_description = get_post_meta($blog_page_id, "_ttrust_page_description_value", true); ?>
			<?php if ($page_description) : ?>
				<p><?php echo $page_description; ?></p>
			<?php endif; ?>
		</div>
	</div>
				 
	<div id="content" class="full clearfix">
		<?php while (have_posts()) : the_post(); ?>
		    
			<?php the_content(); ?>		
			
		<?php endwhile; ?>					    	
	</div>
		
	<?php get_sidebar(); ?>	
	
<?php get_footer(); ?>
