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

       <div class="column"> <?php 
           
           
           $args = array( 
						'post_type' => 'homepagepiece',
						/*'posts_per_page' => -1,*/
					);


					$displayFields = new WP_Query( $args ); 
           
		
		/*if( have_posts() ):*/
        if( $displayFields->have_posts() ):
			
           
           
			/*while( have_posts() ): the_post(); ?>*/
           while( $displayFields->have_posts() ): $displayFields->the_post(); ?>
           
        
           <?php/*
$fieldname = get_field('fieldname');
get_template_part('subdirectory/' . $fieldname ); */?>
        
        <?php/* $fieldname = get_field('wpcf-sociallinks');*/?>
           
           
           
           
           
           <?php $title = get_field('title'); 
         get_template_part($title); ?>
           
        <?php/* this works......    get_template_part('content','test2'); */?>

        <?php/* this one works........    get_template_part('content',get_post_format()); */?>

           
           
           
           
           <?php/*$fieldname = get_field('fieldname');
get_template_part('subdirectory/' . $fieldname );*/?>
           


        <?php endwhile;
			
		endif;
		wp_reset_postdata();
				
		?>
        </div>


    </div>

</div>

    <!--<div class="col-xs-12 col-sm-4">
					<?/* php get_sidebar(); */?>
				</div>-->


  

    <?php get_footer(); ?>