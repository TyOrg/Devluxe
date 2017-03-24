

<?php get_header(); ?>
</div>
<div class="full-width-container">

  <div id="aboveslider" class="row">
		
		<div class="col-md-12">
		
		<div id="devluxe-carousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">

 
					<?php

							
							$args = array( 
								//'post_parent' => 'post',
								'post_type' => 'carouselslider',
								'posts_per_page' => -1,
							);

						
							$bullets = '';

							$carouselImages = new WP_Query( $args ); 
							
							if( $carouselImages->have_posts() ):
							$count = 0;


								
								while( $carouselImages->have_posts() ): $carouselImages->the_post(); ?>
									
									<div class="item <?php if($count == 0): echo 'active'; endif; ?>">
								      <?php the_post_thumbnail('full'); ?>
								      <div class="carousel-caption">

								      		<!-- Removed hyperlink from Carousel Titles -->
									      <?php/* the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); */?>

									      <?php the_title('<h1 class="entry-title">'); ?>
			
										  <small><?php/* the_category(' '); */?></small>
								      </div>
								    </div>
								    

								    <?php $bullets .= '<li data-target="#devluxe-carousel" data-slide-to="'.$count.'" class="'; ?>
								    
								    <?php if($count == 0): $bullets .='active'; endif; ?>
								    
								    <?php  $bullets .= '"></li>'; ?>
								
								<?php 
								$count++;

								endwhile;
								
							endif;
							
							wp_reset_postdata();

						
					?>



					<!-- Indicators -->
					  <ol class="carousel-indicators">
					    <?php echo $bullets; ?>
					  </ol>
		    
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#devluxe-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#devluxe-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		</div>
		
</div>

</div>


<div class="container"><!--this div closes on footer page?-->


<div class="row">
	
	
	<div id="homemiddle" class="col-md-12 col-sm-7">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
				
		?>
			
    </div>

		
		<!--<div id="home-photo" class="col-md-12 col-sm-4 col-sm-offset-1">-->
		<div id="home-photo" class="col-md-12 col-sm-4 col-sm-offset-1">


		<!--<img src="wp-content/uploads/2017/02/MG_7613-2.jpg">-->
		

		</div>
	

	
				<!--<div class="col-xs-12 col-sm-4">
					<?php get_sidebar(); ?>
				</div>-->
	
</div>

<?php get_footer(); ?>