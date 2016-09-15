<?php 
$queryObject = new WP_Query( 
	array( 
		'post_type' => array('video', 'photo'), 
		'showposts' => '1' 
	) 
);
if ($queryObject->have_posts()) : while ($queryObject->have_posts()) : $queryObject->the_post(); ?>

<?php endwhile; endif; ?>