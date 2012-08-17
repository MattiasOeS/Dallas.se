<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="content">
			<div id="post-<?=$post->ID?>" class="post">
			
				<div class="entry columnx2">
					<h2><?php the_title(); ?></h2>
					<div class="caselinks">
    					<?php 
    					$tasks = get_tasks_by_postid($post->ID);
    					foreach($tasks as $task){
    					?>
    					<a href="#" rel="tasks--<?php echo $task->slug?>" title="<?php echo $client->slug?>" class="lubalin"><?php echo $task->name?></a>
    					<?php
    					}
    					?>
	    			</div><!-- caselinks -->
					<?php the_content(); ?>
				</div><!-- entry -->
				
				<div class="lightbox assets"><?php echo get_post_media_html($post->ID, "medium")?></div>
    			<div id="post-trail" class="hide"><?PHP get_post_trail($post->ID)?></div>
			
			</div> <!-- post -->
			<?php include("include_cases.php");?>		
		</div><!-- content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>