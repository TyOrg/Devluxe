<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
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


<!-- Navbar from Bootstrap Components Tab -->

  			<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Devluxe</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php 
			wp_nav_menu(array(
				'theme_location'=>'primary',
				'container'=>false,
				'menu_class' => 'nav navbar-nav navbar-right',
        'walker' => new Walker_Nav_Primary()
			)
		  ); 
		?>
	</div>
    <!-- Collect the nav links, forms, and other content for toggling 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--End of Bootstrap Navbar-->



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
  <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />






