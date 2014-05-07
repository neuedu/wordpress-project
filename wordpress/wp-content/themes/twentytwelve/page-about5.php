<style>
.wrap{ max-width:1100px; margin:0 auto;}
.top{ overflow:hidden;}
.left{ width:50%; float:left; min-width:300px;}
.right{ width:50%; float:left; min-width:300px;}
.bottom{ margin-top:40px;overflow:hidden;}
.bl,.bm,.br{ height:520px; float:left; width:33%; min-width:330px;}
</style>
<?php
/*
Template Name: table5
*/

get_header(); ?>



<div class="wrap">
	<div class="top">
    	<div class="left"><img src="http://localhost/wordpress/images/ru.png" width="450px" height="380px"></div>
        <div class="right"><?php locate_template( array( 'page-about4.php' ), true ); ?></div>
    </div>
    <div class="bottom">
    	<div class="bl"><?php locate_template( array( 'page-about1.php' ), true ); ?></div>
        <div class="bm"><?php locate_template( array( 'page-about2.php' ), true ); ?></div>
        <div class="br"><?php locate_template( array( 'page-about3.php' ), true ); ?></div>
    </div>
</div>

<?php get_footer(); ?>

