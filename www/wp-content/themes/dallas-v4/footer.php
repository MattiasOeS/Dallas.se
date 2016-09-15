	
	
	
</section>

	
<footer>

	<?php if(have_rows('logos', 'option')) : ?>
	<div id="clients">
		<?php while(have_rows('logos', 'option')) : the_row(); $logo_img = get_sub_field('image'); ?>
		<img src="<?php echo $logo_img["url"]; ?>" alt="<?php echo $logo_img["alt"]; ?>" title="<?php echo $logo_img["title"]; ?>" />		
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
	
</footer>


<?php wp_footer(); ?>

</body>
</html>