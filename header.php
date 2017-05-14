<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php bloginfo('name'); ?>
        <?php wp_title('|'); ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>


<?php

  		if( is_front_page() ):
  			$devluxe_classes = array( 'devluxe-class', 'my-class' ); /*devluxe-class and my-class doesnt exist yet.*/
  		else:
  			$devluxe_classes = array( 'no-devluxe-class' );
  		endif;

  	?>

    <body <?php body_class( $devluxe_classes ); ?> >

        <div id="header-background-color">
            <p class="navbar-brand">Devluxe</p>
          
            
            </div> 
