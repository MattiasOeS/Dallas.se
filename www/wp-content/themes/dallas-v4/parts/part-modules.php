<?php global $xc1_section; ?>
<?php $xc1_section = 1; while(the_flexible_field("modules")): ?>
	<?php get_template_part('sections/section', get_row_layout()); ?>
<?php if(get_row_layout() != 'divider') { $xc1_section++; } endwhile; ?>