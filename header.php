<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Devluxe</title>	
		<?php wp_head(); ?>	 
  	</head>

  	<?php

  		if( is_front_page() ):
  			$devluxe_classes = array( 'devluxe-class', 'my-class' );
  		else:
  			$devluxe_classes = array( 'no-devluxe-class' );
  		endif;

  	?>
  
  <body <?php body_class( $devluxe_classes ); ?> >

  	<div class="container">

  	<div class="row">

  		<div class="col-xs-12">
		  	<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
		</div>
	</div>
  	

  	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

  		



