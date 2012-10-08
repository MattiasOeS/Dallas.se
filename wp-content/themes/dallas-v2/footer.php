	</div>
	</div>	
	<div id="footer" >
		<div class="inside">		
		<div class="primary clearfix">
			<div class="recent">
			
				<h2>Recent stories</h2>
				
				<?php
				$query = new WP_Query(array(
						'category_name' => 'short', 
						'posts_per_page' => '3' 
					));
				
				while ( $query->have_posts() ) : $query->the_post(); 
				?>
				
				<div class="blog-post">
					<h3><?php the_title(); ?></h3>
					<p>
						<?php echo substr(get_the_excerpt(),0,150); ?>... <a class="more green">Read more</a>
					</p>
					<a href="<?php the_permalink(); ?>"></a>
					<div class="divider"></div>
				</div>
				
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
			
			</div>
			
			<div class="empire">
				
				<h3>DALLAS STHLM</h3>
				<p>
					<a class="green" href="#">INFO<span class="dallaswebicons">d</span>DALLAS.SE</a><br />
					HEAD QUATER: +46 (0)8-670 96 00<br />
					ARTIC OFFICE: +46 (0)8-670 96 00<br />
				</p>
				<div class="divider"></div>
				<p class="green">
					<a class="green" href="#">FACEBOOK</a>, <a class="green" href="#">YOUTUBE</a>, <a class="green" href="#">TWITTER</a>
				</p>
				
			</div>
			
			
		</div>	
		</div><!-- end footer inside-->		
	</div><!-- end footer -->
</div><!-- end container -->
<?php wp_footer(); ?>
</body>
</html>