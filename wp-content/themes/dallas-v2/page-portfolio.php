<?php /*
Template Name: Portfolio - filterable
*/

 ?>
<?php get_header(); ?>			

			<div id="content" class="fullProjects clearfix full grid">			
				<div id="projects" class="clearfix">		
					<div id="projects_head" class="clearfix">
						<?php while (have_posts()) : the_post(); ?>											
							<h1><?php the_title(); ?></h1>													
						<?php endwhile; ?>	
						
						
						
						<div class="filterWrap">
						<ul id="filterNav">
							<?php 
							
							$filters = get_terms('filters');
							$preselect = false;
							
							foreach ($filters as $filter) {
															
								$a = '<li><a href="#" ' . $selected . ' data-filter="'.$filter->slug.'">';
					  				if($filter->name == 'Interactive') {
						  				$a .= '<span class="first">Inter</span><span class="last">active</span>';
					  				}
					  				else {
										$a .= $filter->name;
									}				
								$a .= '</a></li>';
								echo $a;
								echo "\n";
								
							}
							
							?>
							<li class="allBtn"><a href="#" data-filter="all" class="selected"><?php _e('All', 'themetrust'); ?></a></li>
						</ul>
						</div>
						<?php query_posts( 'post_type=project&posts_per_page=200' ); ?>
					</div>

					<div class="thumbs">			
					<?php  while (have_posts()) : the_post(); ?>

						<?php
						global $p;				
						$p = "";
						$filters = get_the_terms( $post->ID, 'filters');
						if ($filters) {
						   foreach ($filters as $filter) {				
						      $p .= $filter->slug . " ";						
						   }
						}
						?>  	
						<?php get_template_part( 'part-project-thumb' ); ?>		

					<?php endwhile; ?>
										
					
					</div>
				</div>

							
			</div>
	
<?php get_footer(); ?>