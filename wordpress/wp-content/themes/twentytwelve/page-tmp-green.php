<style>

</style>
<?php
/*
Template Name: page-tmp-green
*/
?>

<div id="content" class="widecolumn">
 <?php 
query_posts('showposts=10&page_id=10');

while(have_posts()): the_post();

?>

<?php the_content();?>

<?php endwhile; ?>
</div>



