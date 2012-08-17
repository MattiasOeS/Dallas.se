<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Homepage

*/
$posts["motion"]=10;
$posts["short"]=10;
$posts["interactive"]=9;

add_action("the_content","remove_target");
get_header(); ?>
		<div id="content">
		<div class="column leftcolumn">
			<div class="flag lubalin">MOTION STORIES</div>
				<?php
				$pushPosts = new WP_Query();
				$pushPosts->query('cat=3&showposts='.$posts["motion"]);
				while ($pushPosts->have_posts()) : $pushPosts->the_post();
				?>
				<div class="post" id="post_<?=$post->ID?>">
					<?php echo get_post_media_html($postid=$post->ID,$size="medium",$order="image",$limit=1)?>
					<h2><a href="<?php the_permalink(); ?> " title=""><?=the_title()?></a></h2>
					<p>
						<?php echo filter_excerpt(get_the_excerpt());?> <a href="<?php the_permalink(); ?>" title="View case" class="viewcase">View case</a>
					</p>
					<div class="casemustache"></div><!-- casemustache -->
				</div><!-- post -->
				<?php endwhile;?>
			</div><!-- column -->
			<div class="column midcolumn">
				<div class="flag lubalin">SHORT STORIES</div>
				<?php
				$pushPosts = new WP_Query();
				$pushPosts->query('cat=5&showposts='.$posts["short"]);
				while ($pushPosts->have_posts()) : $pushPosts->the_post();
				?>
				<div class="post" id="post_<?=$post->ID?>">
					<?php echo get_post_media_html($postid=$post->ID,$size="thumbnail",$order="image",$limit=1)?>
					<h3><?=the_title()?></h3>
					<?php the_content();?>
				</div><!-- post -->
				<div class="storyhr"></div>
				<?php endwhile;?>
			</div><!-- midcolumn -->
			<div class="column rightcolumn">
				<div class="flag lubalin">INTERACTIVE STORIES</div>
				<?php
				$pushPosts = new WP_Query();
				$pushPosts->query('cat=4&showposts='.$posts["interactive"]);
				while ($pushPosts->have_posts()) : $pushPosts->the_post();
				?>
				<div class="post" id="post_<?=$post->ID?>">
					<?php echo get_post_media_html($postid=$post->ID,$size="medium",$order="image",$limit=1)?>
					<h2><a href="<?php the_permalink(); ?>" title=""><?=the_title()?></a></h2>
					<p>
						<?php echo filter_excerpt(get_the_excerpt());?> <a href="<?php the_permalink(); ?>" title="View case" class="viewcase">View case</a>
					</p>
					<div class="casemustache"></div><!-- casemustache -->
				</div><!-- post -->
				<?php endwhile;?>
			</div><!-- rightcolumn -->	
		</div><!-- content -->
<?php get_footer(); ?>