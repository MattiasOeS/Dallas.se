		<div id="caselist">
			<div id="casefilter" class="column filter"></div><!-- casefilter -->
			<?php $clients=get_clients();?>
			<div class="clients hide filterlist">
				<?php 
				$i=0;
				$j=0;
				$k=0;
				foreach($clients as $client){
					if($i==0){
						echo '<div class="column column-'.$k.'">';
					}
				?>
					<a href="#" class="clients--<?=$client->slug?>" rel="clients--<?=$client->slug?>"><?=$client->name?></a>
				<?php
					$i++;
					$j++;
					if($i==12||$j==count($clients)){
						$i=0;
						if($k==4){
							$k=0;
						}else{
							$k++;
						}
						echo '</div><!-- column -->';
					}
				}
				?>
			</div><!-- clients -->
			<?php $tasks=get_tags();?>
			<div class="tasks hide filterlist">
				<?php 
				$i=0;
				$j=0;
				$k=0;
				foreach($tasks as $task){
					if($i==0){
						echo '<div class="column column-'.$k.'">';
					}
				?>
					<a href="#" class="tasks--<?=$task->slug?>" rel="tasks--<?=$task->slug?>"><?=$task->name?></a>
				<?php
					$i++;
					$j++;
					if($i==1||$j==count($tasks)){
						$i=0;
						if($k==4){
							$k=0;
						}else{
							$k++;
						}
						echo '</div><!-- column -->';
					}
				}
				?>
			</div><!-- projects -->
		</div><!-- caselist -->
		<ul id="caseresults">
			<?php
			$casePosts = new WP_Query();
			$casePosts->query('cat=3,4&showposts=1000');
			while ($casePosts->have_posts()) : $casePosts->the_post();
			?>
    		<li class="<?=get_client_class_string($post->ID)?> <?=get_task_class_string($post->ID)?>">
    			<?php echo get_post_media_html($postid=$post->ID,$size="medium",$order="image",$limit=1)?>
    			<h3><a href="<?php the_permalink(); ?>" title="<?=htmlentities_utf8($post->post_title)?>"><?php the_title(); ?></a></h3>
    			<?php #the_underlinks($post->ID, "\n"); ?>
    		</li>
			<?php 
			endwhile;
			?>
    	</ul><!-- caseresults -->
