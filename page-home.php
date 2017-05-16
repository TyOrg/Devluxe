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

<div class="container">
    <div class="row row1">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column heading">
            <p>
                <?php the_field('heading1'); ?>
            </p>

        </div>
        <div class="column">
        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>
    <div class="row row2">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column">
        </div>
        <div class="column heading">
            <p>
                <?php the_field('photo'); ?>
            </p>

        </div>
        <div class="column">
                <?php the_field('sociallinks'); ?>

        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>
    <div class="row row3">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column">
        </div>
        <div class="column">
            <p>
               Front End Developer 
            </p>

        </div>
        <div class="column">
                <hr />

        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>
    <div class="row row4">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column">
        </div>
        <div class="column">
            <p>
               paragraphs describing what I do....
            </p>

        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>
    <div class="row row5">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column">
        </div>
        <div class="column">
            <p>
               paragraphs describing what I do....
                 <?php the_content(); ?>
            </p>

        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>
    <div class="row row6">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column heading">
            <p><?php the_field('heading2'); ?></p>
        </div>
        <div class="column">

        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>    
    <div class="row row7">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column">
            <p></p>
        </div>
        <div class="column">
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
        <div class="column">
            <p>margin</p>
        </div>
    </div> 
    <div class="row row8">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column heading">
            <p><?php the_field('heading3'); ?></p>

        </div>
        <div class="column">  
        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div> 
    <div class="row row9">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column">
           
        </div>
        <div class="column">
            <p><?php the_field('photo2'); ?></p>

        </div>
        <div class="column"> 
           <p> description of photo....text</p>
        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>
     <div class="row row10">
        <div class="column">
            <p>margin</p>
        </div>
        <div class="column heading">
            <p><?php the_field('heading4'); ?></p>

        </div>   
        
        <div class="column">
            <p>find me links</p>
            <p>find me links</p>
            <div class="social-icon"><a href="https://twitter.com/Tyler_Co_"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></a></div>
            <div class="social-icon"><a href="https://github.com/temoty"><i class="fa fa-lg fa-github" aria-hidden="true"></i></a></div>
            <div class="social-icon"><a href="https://www.linkedin.com/in/tyler-cornett-a8a815100/"><i class="fa fa-lg fa-linkedin" aria-hidden="true"></i></a></div>

        </div>
        <div class="column">
            <p>margin</p>
        </div>
    </div>



            <?php endwhile; ?>
            <?php endif; ?>


            <?php wp_reset_query();
				
		?>


    

</div>


<?php get_footer(); ?>