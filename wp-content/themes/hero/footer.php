	</div>
	</div>	
	<div id="footer" >
		<div class="inside">		
		<div class="primary clearfix">
			<div class="col1">
				
				<?php
				$query = new WP_Query(array(
						'category_name' => 'short', 
						'posts_per_page' => '3' 
					));
				
				while ( $query->have_posts() ) : $query->the_post(); 
				?>
				
				<div class="blog-post">
					<p>
						<strong><?php the_time('F jS, Y') ?> - <?php echo get_the_title(); ?></strong><br />
						<?php echo get_the_excerpt(); ?>
					</p>
				</div>
				
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
			
			</div>
			<div class="col2">
				<p>
					<strong>HQ</strong><br />
					Riddargatan 17c, SE - 114 57 Stockholm<br />
					Phone: +46 (0)8 670 96 00<br />
					E-mail: <a href="mailto:info@dallas.se">info@dallas.se</a><br />
					Map: <a href="http://kartor.eniro.se/m/MAElE" target="_blank">Click here</a><br />
				</p>
				<p>
					<strong>Arctic Office</strong><br />
					Årevägen 70, SE - 830 13 Åre<br />
					Phone: +46 (0)70 770 72 22<br />
					E-mail: <a href="mailto:info@dallas.se">info@dallas.se</a><br />
					Map: <a href="http://kartor.eniro.se/m/MAELC" target="_blank">Click here</a> <br />
				</p>
				
			</div>
			
			
		</div>
		<div class="secondary">
		
			<p><strong><a href="">DALLAS @ Facebook</a></strong> | <strong><a href="">DALLAS @ Twitter</a></strong> | <strong><a href="">DALLAS @ Youtube</a></strong></p>
				
		</div>		
		</div><!-- end footer inside-->		
	</div><!-- end footer -->
</div><!-- end container -->
<?php wp_footer(); ?>
</body>
</html>