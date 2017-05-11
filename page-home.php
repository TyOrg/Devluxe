<?php get_header(); ?>

</div> <!-- div class="container" from header.php ends here. -->



<div class="container">
    <!--this div closes on footer page?-->


    <div class="row">


        <div class="col-xs-12 col-md-6 homemiddle">
            
            <?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>

            <?php get_template_part('content',get_post_format()); ?>

            <?php endwhile;
			
		endif;
		
				
		?>


        </div>
        
        <div class="col-xs-12 col-md-6 homemiddle">
        
        
        Tyler
        
        </div>                         


        <!--<div class="col-xs-12 col-sm-4">
					<?php get_sidebar(); ?>
				</div>-->

    </div>

    <?php get_footer(); ?>