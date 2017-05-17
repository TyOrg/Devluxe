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



    <?php
           
           // args 
           $args = array(
                'numberposts'=>-1,
                'post_type'=>'homepagepiece'
           );
           
           // query
           $the_query = new WP_Query( $args );
           
           ?>


        <?php 
            if( $the_query->have_posts() ): ?>
        <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

        <!--<div class="column column-50 column-offset-25">-->

 <!-- .row .column.column-offset-25 {
  margin-left: 25%;
} -->

        <div class="container">
            <div class="row">
                
                <div class="column heading">
                    <p>
                        <?php the_field('heading1'); ?>
                    </p>
                   
                </div>
                

            </div>
            <div class="row">
                


                <div class="column column-50">
                    <div class="row">


                        <figure id="profile-photo" class="column column-25"><img src="<?php the_field('facephoto'); ?>"></figure>


                        <ul id="ul-style" class="column column-50" style="list-style: none;">

                            <li><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Boston</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;tylercornettnow [at] gmail.com</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Twitter</li>

                        </ul>

                    </div>
                </div>


                

              
                
            </div>
            <div class="row">
                
                
                <div class="column">
                    <p>
                        Front End Developer
                    </p>

                </div>
                <div class="column">
                    <hr />

                </div>
                
            </div>
            <div class="row">
                
                
                <div class="column">
                    <p>
                        paragraphs describing what I do....
                    </p>

                </div>
               
            </div>
            <div class="row">
                
                
                <div class="column">
                    <p>
                        paragraphs describing what I do....
                        <?php the_content(); ?>
                    </p>

                </div>
               
            </div>
            <div class="row">
               
                <div class="column heading">
                    <p>
                        <?php the_field('heading2'); ?>
                    </p>


                </div>
                
              
            </div>
            <div class="row">
               
              
                <div class="column">
                    <!-- Maybe use a UL list for the little circle bullets as decoration on border -->
                    <p>Freelance</p>
                    <p>July 2014 - Present</p>
                    <p>Coast Guard</p>
                    <p>September 1994 - June 2014</p>
                </div>
                <div class="column">
                    <p>Front End Developer</p>
                    <p>Working on WordPress sites, etc. etc.</p>
                    <p>Security Officer</p>
                    <p>Maintained physical and IT security for Classified Networks.</p>
                </div>
               
            </div>
            <div class="row">
               
                <div class="column heading">
                    <p>
                        <?php the_field('heading3'); ?>
                    </p>

                </div>
               
               
            </div>
            <div class="row">
                
                <div class="column">
                    <p>
                        <?php the_field('photo2'); ?>
                    </p>

                </div>
                <div class="column">
                    <p> description of photo....text</p>
                </div>
               
            </div>
            <div class="row">
                
                <div class="column heading">
                    <p>
                        <?php the_field('heading4'); ?>
                    </p>

                </div>

                <div class="column">
                    <p>find me links</p>
                    <p>find me links</p>
                    <div class="social-icon"><a href="https://twitter.com/Tyler_Co_"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></a></div>
                    <div class="social-icon"><a href="https://github.com/temoty"><i class="fa fa-lg fa-github" aria-hidden="true"></i></a></div>
                    <div class="social-icon"><a href="https://www.linkedin.com/in/tyler-cornett-a8a815100/"><i class="fa fa-lg fa-linkedin" aria-hidden="true"></i></a></div>

                </div>
               
            </div>



            <?php endwhile; ?>
            <?php endif; ?>


            <?php wp_reset_query();
				
		?>




        </div>


        <?php get_footer(); ?>