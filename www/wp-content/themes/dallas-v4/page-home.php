
<?php get_header(); ?>


<div class="columns" id="case-grid">
	
	<?php 
	$top_case = get_field('top_case');
	$takeoverDesktop = get_field('takeover_desktop');
	$takeoverMobile = get_field('takeover_mobile');
	$takeOverLink = get_field('takeover_link');
	if( $top_case ) : foreach( $top_case as $post) : setup_postdata($post); $top_case_id = $post->ID;
	
	if($post->post_name === 'svenska-designpriset') {
  	?>
  	
  	<div class="column g-12 top-post">
    	<div class="videoEmbed">
      	<iframe width="560" height="315" src="https://www.youtube.com/embed/EXVxViP4F1U?autoplay=1&controls=0&rel=0&showinfo=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>
    	</div>
  	</div>
  	
  	<?php
	} else { 
	?>
	
	<div class="column g-12 top-post">
		<div class="takeover<?php echo ($takeoverDesktop) ? ' takeover-desktop' : ''; echo ($takeoverMobile) ? ' takeover-mobile' : '';?>">
			<?php if ($takeoverDesktop) { ?>
			<div class="desktop">
				<?php if($takeOverLink): ?> <a href="<?php echo $takeOverLink; ?>" target="_blank"> <?php endif; ?>
					<img src="<?php echo $takeoverDesktop['url']; ?>">
				<?php if($takeOverLink): ?> </a> <?php endif; ?>
			</div>
			<?php } 
			if ($takeoverMobile) {
			?>
			<div class="mobile">
				<?php if($takeOverLink): ?> <a href="<?php echo $takeOverLink; ?>" target="_blank"> <?php endif; ?>
					<img src="<?php echo $takeoverMobile['url']; ?>">
				<?php if($takeOverLink): ?> </a> <?php endif; ?>
			</div>
			<?php } ?>
			<a href="#" class="play-btn">I want to<span class="play-btn-icon"></span>the reel!</a>
		</div>
		<?php if( get_field('yt_id') ) { ?>
		<div class="videoEmbed youtubeEmbed topEmbed paused-with-thumb">
			<div class="youtube" data-ytid="<?php the_field('yt_id'); ?>" id="yt-embed-top"></div>
			<?php the_post_thumbnail('video-thumb-full'); ?>
			<a class="yt-load" data-player="0">Ladda video</a>
			<a class="yt-play" data-player="0"></a>
		</div>
		<?php }else if ( get_field('vimeo_id') ) { ?>
		<div class="videoEmbed vimeoEmbed topEmbed paused-with-thumb not-ready">
			<iframe data-src="https://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?title=0&byline=0&portrait=0&color=ffcc00&api=1&player_id=yt-embed-0" class="vimeo" id="yt-embed-0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<?php the_post_thumbnail('video-thumb-half'); ?>
			<a class="vimeo-load">Ladda video</a>
			<a class="vimeo-play"></a>
		</div>
		<?php } ?>
		<article>
			<div class="title">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="body">
				<?php the_content(); ?>
			</div>
		</article>

	</div>
	     
	<?php } endforeach; wp_reset_postdata(); endif; ?>
	
	
	<?php 
	$query = new WP_Query(array(
		'post_type' => 'post',
		'post__not_in' => array($top_case_id),
		'posts_per_page' => -1
	)); 
	$count = 0;
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $count++; ?>
		
		<div class="column g-6">
		
			<?php if( get_field('yt_id') ) { ?>
			
				<div class="videoEmbed youtubeEmbed paused-with-thumb">
					<div class="youtube" data-ytid="<?php the_field('yt_id'); ?>" id="yt-embed-<?php echo $count; ?>"></div>
					<?php the_post_thumbnail('video-thumb-half'); ?>
					<a class="yt-load" data-player="<?php echo $count; ?>">Ladda video</a>
					<a class="yt-play" data-player="<?php echo $count; ?>"></a>
				</div>
				
			<?php }else if ( get_field('vimeo_id') ) { ?>
				<div class="videoEmbed vimeoEmbed paused-with-thumb not-ready">
					<!-- <div class="vimeo" data-vimeoid="<?php the_field('vimeo_id'); ?>" id="yt-embed-<?php echo $count; ?>"></div> -->
					<iframe data-src="https://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?title=0&byline=0&portrait=0&color=ffcc00&api=1&player_id=yt-embed-<?php echo $count; ?>" class="vimeo" id="yt-embed-<?php echo $count; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<?php the_post_thumbnail('video-thumb-half'); ?>
					<a class="vimeo-load" data-player="<?php echo $count; ?>">Ladda video</a>
					<a class="vimeo-play" data-player="<?php echo $count; ?>"></a>
				</div>
			<?php }else{ ?>

			<div class="imgContainer">
			<?php echo (get_field('linkout')) ? '<a class="blockLink" href="' . get_field('linkout') . '" target="_blank">' : ''; ?>
				<?php the_post_thumbnail('video-thumb-half'); ?>
			<?php echo (get_field('linkout')) ? '</a>' : ''; ?>
			</div>
			
			<?php } ?>
			
			<article>
				<div class="title">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="body">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
		
		
		<?php if($count == 2) : ?>
			
		<div class="column g-12" id="contact">
			
			<article>
				<h3><?php the_field('phonenr', 'option'); ?></h3>
				<div class="seperator icon-dot"></div>
				<h4><?php the_field('social_header', 'option'); ?></h4>
				<?php if(have_rows('social-links', 'option')) : $count = 0; ?>
				<p class="social-links">
					<?php while(have_rows('social-links', 'option')) : the_row(); $count++; ?>
					<?php if($count != 1 && $count != 5){ echo '<span class="icon-dot"></span>'; }else{ echo ''; } ?>
					<a href="<?php the_sub_field('link', 'option'); ?>" target="_blank"><?php the_sub_field('text', 'option'); ?></a><?php if($count == 4){ ?><br><?php } ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>
			</article>
			
		</div>
		
		<?php endif; ?>
		
		
	<?php endwhile; endif; ?>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38051668-1', 'auto');
  ga('send', 'pageview');

</script>

</div>
	

<?php get_footer(); ?>