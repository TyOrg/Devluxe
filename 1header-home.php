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
  			$devluxe_classes = array( 'devluxe-class', 'my-class' );
  		else:
  			$devluxe_classes = array( 'no-devluxe-class' );
  		endif;

  	?>

    <body <?php body_class( $devluxe_classes ); ?> >

        <div class="container">

            <div class="row">

                <div class="col-xs-12">


                </div>
                
               <div class="col-xs-12">
                    <div class="search-form-container">
                        <div class="container">
                            <?php get_search_form(); ?>
                        </div>

                    </div>

                </div> 

            </div>


            <!--this code below is making a small square dot in upper left of pages.-->
            <!--<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />-->