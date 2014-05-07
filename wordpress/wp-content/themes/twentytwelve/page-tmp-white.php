<?php
/*
Template Name: page-tmp-white
*/
?>

    <?php 
	query_posts('showposts=10&page_id=6');
	
	while (have_posts()) : the_post();?>

	<h1 class="entry-title" style="color:#3CC43C; font-family: Calibri;">
	<?php the_title();?>
	</h1>

	<div class="entry-content" style="font-family: Calibri;">
	<?php the_content();?>
	</div>
    
    <?php endwhile;?>



