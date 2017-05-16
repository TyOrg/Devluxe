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

<div class="container">
    <div class="row">

       <div class="column"> 
           
           <?php
           
           // args 
           $args = array(
                'numberposts'=>-1,
                'post_type'=>'homepagepiece',
                'meta_key'=>'sociallinks'
           );
           
           // query
           $the_query = new WP_Query( $args );
           
           ?>
           
           
           <?php 
            if( $the_query->have_posts() ): ?>

         
			<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

            
            <h1><?php the_field('sociallinks'); ?></h1>
        
           
       <?/*php the_content(); */?>
           


        <?php endwhile; ?>
        <?php endif; ?>
			
		
		<?php wp_reset_query();
				
		?>
        </div>


    </div>

</div>

    <!--<div class="col-xs-12 col-sm-4">
					<?/* php get_sidebar(); */?>
				</div>-->


  

    <?php get_footer(); ?>