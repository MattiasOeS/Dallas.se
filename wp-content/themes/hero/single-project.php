<?php get_header(); ?>			
		
		<div id="pageHead">
			<h1><?php the_title(); ?></h1>
			<div class="projectNav clearfix">
				<div class="previous <?php if(!get_previous_post()){ echo 'inactive'; }?>">
					<?php previous_post_link('%link', '&larr; %title'); ?>
				</div>				
				<div class="next <?php if(!get_next_post()){ echo 'inactive'; }?>">						
					<?php next_post_link('%link', '%title &rarr;'); ?>				
				</div>					
			</div> <!-- end navigation -->					
		</div>
				 
		<div id="content" class="full">			
			<?php while (have_posts()) : the_post(); ?>	
			
			<?php $youtube_id = get_post_meta($post->ID, "_ttrust_youtube_id_value", true); ?>
			<?php if($youtube_id) : ?>
				<div id="youtube">
					<iframe src="http://www.youtube.com/embed/<?php echo $youtube_id; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			<?php endif; ?>		
				    
			<div class="project clearfix">  
				<div class="project-content"> 						
					<?php the_content(); ?>		
				</div>		

				<?php $project_url = get_post_meta($post->ID, "_ttrust_url_value", true); ?>
				<?php $project_url_label = get_post_meta($post->ID, "_ttrust_url_label_value", true); ?>
				<?php $project_url_label = ($project_url_label!="") ? $project_url_label : __('Visit Site', 'themetrust'); ?>
				<?php if ($project_url) : ?>
					<p><a class="action" href="<?php echo $project_url; ?>"><?php echo $project_url_label; ?></a></p>
				<?php endif; ?>	
				<ul class="skillList clearfix"><?php ttrust_get_terms_list(); ?></ul>	
				
				
				
				
						
								
			</div>
			<?php comments_template('', true); ?>	
			<?php endwhile; ?>										    	
		</div>
	
<?php get_footer(); ?>