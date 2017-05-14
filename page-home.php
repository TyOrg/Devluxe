 
<?php
/*
*	Template Name: Page-Home-Milligram-CSS
*/
?>



<?php get_header(); ?>

<!-- This is Milligram Layout

<div class="container">
    
    <div class="row">
    <div class="column">.column</div>
    <div class="column">.column</div>
    <div class="column">.column</div>
    <div class="column">.column</div>
  </div>

    -->
    

        <div class="row">
 
            <?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>

            <?php get_template_part('content',get_post_format()); ?>

            <?php endwhile;
			
		endif;
		
				
		?>


        </div>




        <!--<div class="col-xs-12 col-sm-4">
					<?php get_sidebar(); ?>
				</div>-->

     
    </div>

    <?php get_footer(); ?>
