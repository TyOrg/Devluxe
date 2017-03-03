<?php get_header(); ?>

<div id="aboveslider" class="row">
		
		<div class="col-xs-12">
		
		<div id="devluxe-carousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">

 
			<?php

				
					
					$args = array( 
						'post_type' => 'portfolio',
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
							      <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	
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

<div class="row">
	<div class="col-xs-12 col-sm-3">
	</div>
	
	<div id="homemiddle" class="col-xs-12 col-sm-6">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
		
		
				
?>
		
	
	</div>
	<div class="col-xs-12 col-sm-3">
	</div>

	
	<!--<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>-->
	
</div>

<?php get_footer(); ?>