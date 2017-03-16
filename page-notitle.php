<?php
/*
Template Name: Page No Title
*/
?>

    <html>
    <?php get_header(); ?>

    <?php 
		if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>

    <h1>
        <?php the_title(); ?>
    </h1>

    <!--			<small>Posted <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small> -->

    <div>
        <p>
            <?php the_content(); ?>
        </p>



        <?php endwhile;

	endif;
	
	?>
    </div>

    </html>
    <?php get_footer(); ?>