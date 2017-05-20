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
    

        <div id="header-background-color" class="row flex-direction-row">
            <div class="column column-50 column-offset-20 aligner-logo">
            <p class="navbar-brand">Devluxe</p>
          </div>
            <div id="logo-mail-icon" class="column column-10">
                   
                <button class="button button-outline"><i class="fa fa-envelope" aria-hidden="true"></i></button>
            
            </div>
            
            </div> 
