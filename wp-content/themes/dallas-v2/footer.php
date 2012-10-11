	</div>
	</div>	
	<div id="footer" >
		<div class="inside">		
		<div class="primary">
			<div class="footershade_top"></div>
			<div class="recent clearfix">
			
				<h1>Recent stories</h1>
				
				<?php
				$query = new WP_Query(array(
						'category_name' => 'short', 
						'posts_per_page' => '2' 
					));
				
				while ( $query->have_posts() ) : $query->the_post(); 
				?>
				
				<div class="blog-post">
					<h2><?php the_title(); ?></h2>
					<p>
						<?php echo substr(get_the_excerpt(),0,150); ?>... <a class="more">Read more<span></span></a>
					</p>
					<a href="<?php the_permalink(); ?>"></a>
				</div>
				
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
			
			</div>
			<div class="footershade_bottom"></div>
			
			<div class="contact">
				
				<span class="large">Sthlm: 46 (0)8-670 96 00</span>
				<div class="dot"></div>
				<span class="large">Åre: +46 (0)8-670 96 00</span>
				
				<div class="links">
					<a href="mailto:info@dallas.se">info@dallas.se</a>
					<a href="https://www.facebook.com/dallassthlm">Facebook</a>
					<a href="http://www.youtube.com/user/dallassthlm">YouTube</a>
					<a href="https://twitter.com/dallassthlm">Twitter</a>
					<a href="/blog/">Stories</a>
				</div>
				
			</div>
			
			
		</div>	
		</div><!-- end footer inside-->		
	</div><!-- end footer -->
</div><!-- end container -->
<?php wp_footer(); ?>
</body>
</html>