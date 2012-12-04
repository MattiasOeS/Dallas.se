<?php get_header(); ?>			
		
		<div id="pageHead">
			<div class="projectNav clearfix">
				<div class="next <?php if(!get_previous_post()){ echo 'inactive'; }?>">
					<?php previous_post_link('%link', '<span class="drop-right"></span>%title'); ?>
				</div>				
				<div class="previous <?php if(!get_next_post()){ echo 'inactive'; }?>">						
					<?php next_post_link('%link', '%title<span class="drop-left"></span>'); ?>				
				</div>					
			</div>	
			<div class="project_head clearfix">
				<h1><?php the_title(); ?></h1>
				<div class="filterWrap">
					<ul id="filterNav"><?php echo list_filters(); ?></ul>
				</div>
			</div>
		</div>
				 
		<div id="content" class="full">			
			<?php while (have_posts()) : the_post(); ?>	
				    
			<div class="project clearfix">  
				<?php			
				$excerpt_color = get_post_meta($post->ID, "excerpt_color", true); 
				?>
				<div class="project-excerpt" <?php if($excerpt_color != '') { ?> style="color: <?php echo $excerpt_color; ?>;" <?php } ?>>
					<?php the_excerpt(); ?>
				</div>
				<div class="project-content">				
					<?php 
					$content = split_content();  
					if(strlen($content[1]) > 0) {
						echo '<div class="page-column page-column-first">', $content[0], '</div>';  
						echo '<div class="page-column page-column-second">', $content[1], '</div>';  
					}
					else {
						echo $content[0];
					}
					
					?> 	
					<div class="tags clearfix">
						<?php echo list_tags(); ?>
					</div>
				</div>		

				<?php $project_url = get_post_meta($post->ID, "_ttrust_url_value", true); ?>
				<?php $project_url_label = get_post_meta($post->ID, "_ttrust_url_label_value", true); ?>
				<?php $project_url_label = ($project_url_label!="") ? $project_url_label : __('Visit Site', 'themetrust'); ?>
				<?php if ($project_url) : ?>
					<p><a class="action" href="<?php echo $project_url; ?>"><?php echo $project_url_label; ?></a></p>
				<?php endif; ?>		
				
				
				
				
						
								
			</div>
			<?php comments_template('', true); ?>	
			<?php endwhile; ?>										    	
		</div>
	
<?php get_footer(); ?>