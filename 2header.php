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

        <div class="remove-class-row">

            <div>

                <div>


                    <!-- Navbar from Bootstrap Components Tab -->
                    
                    <nav id="header-background-color" class="navbar navbar-inverse navbar-fixed-top">
                        <div class="container-fluid row col-md-12 remove-class-row">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                                <a id="logo-color" class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                                    <?php bloginfo( 'name' ); ?>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php/* 
			wp_nav_menu(array(
				'theme_location'=>'primary',
				'container'=>false,
				'menu_class' => 'nav navbar-nav navbar-right',
        'walker' => new Walker_Nav_Primary()
			)
		  ); 
		*/?>  
                            </div>

                        </div>
                    </nav> 

                <!-- End of Bootstrap Navbar -->



                </div>
                
            <!--    <div class="col-xs-12">
                    <div class="search-form-container">
                        <div class="container">
                            <?php get_search_form(); ?>
                        </div>

                    </div>

                </div> -->

            </div>


            <!--this code below is making a small square dot in upper left of pages.-->
            <!--<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />-->