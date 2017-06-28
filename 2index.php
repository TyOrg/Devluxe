<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
      Devluxe
    </title>
    <meta name="description" content="Devluxe">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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

        <div class="container">
            <section class="top-background-color">
                <div class="row">

                    <div class="column column-25 column-offset-20 heading">
                        <p>
                            <?php the_field('heading1'); ?>
                        </p>

                    </div>


                </div>
                <div class="row">



                    <div class="column column-offset-25">
                        <div class="row">

                           
                                <div class="column-10">
                            <figure id="profile-photo" class=""><img src="<?php the_field('facephoto'); ?>">
                                    </figure></div>
                            <div id="div-photo-ul" class="column">
                                
                                <ul id="ul-style" class="column column-75" style="list-style: none;">
                                    
                                <li><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Boston</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;TylerCornettNow [at] gmail.com</li>
                                <li><a href="http://localhost:8888/devluxe/wp-content/uploads/2017/06/Resume.pdf"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;Resume</a></li>
                                 </ul>    
                                </div>

                        </div>
                    </div>

                </div>
                <div class="row">


                    <div class="column column-30 column-offset-25">
                        <p><i>
                        Tyler Cornett - Front End Developer
                        </i>
                        </p>

                    </div>
                    <div class="column">
                        <!-- <hr class="hr"> add this only on desktop screens -->

                    </div>

                </div>
                <div class="row flex-direction-row">


                    <div id="column-border" class="column column-25 column-offset-25 column-border">
                        <!-- Maybe use a UL list for the little circle bullets as decoration on border -->
                         <p>
                            <?php the_field('heading2'); ?>
                        </p>
                        <img src="https://devluxe.com/wp-content/uploads/2017/04/Instaprovider.jpg">
                        <p class="experience-header">Front End Developer</p><p class="experience-subheader">2015-Present</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>


                    <div class="col2ndsection column-50">
                        <p>BKJ Productions, Freelance, skilled in WordPress Development, PHP, HTML, CSS(Bootstrap, Sass), Javascript(jQuery, Node), Git, SEO, website optimization, email marketing, Pay Per Click advertising.</p>
                    </div>
                </div>
                <div class="row flex-direction-row">
                    <div id="column-border" class="column column-25 column-offset-25 column-border">
                        <p class="experience-header">E-Learning Department, Lesley University</p><p class="experience-subheader">2016</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>
                    <div class="column-50 col2ndsection">
                        <p>Increased efficiency and performance within E-Learning Department by developing Administrative Support solutions,
Excel Spreadsheet Reports, and Learning Management System Software edits.</p>
                    </div>
                    </div>
                   
                    

                
                <div class="row flex-direction-row">
                    <div id="column-border" class="column column-25 column-offset-25 column-border">
                        <p class="experience-header">U.S. Coast Guard Information Systems Technician</p><p class="experience-subheader">1996 - 2015</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>
                     <div class="column-50 col2ndsection">
                        <p>Received 5 Coast Guard Achievement Awards while completing a 20 Year Active Duty Coast Guard career on the West and East Coast of United States as a Chief Warrant Officer.  Spent years managing large scale IT projects, served as a Windows systems administrator, supervised junior technicians, served as a junior applications developer utilizing SQL, VB Script, HTML, CSS, and Databases, and served as an IT Security Officer.</p>
                    </div>
                    </div>
                <div class="row">


                    <div class="column column-50 column-offset-25">
                        <p>
                            <?php the_content(); ?>
                        </p>

                    </div>


                </div>

            </section>
            <section class="second-background-color">
                <div class="row flex-direction-row">

                    <div class="column column-25 column-offset-20 heading">
                        <p>
                            <?php the_field('heading2'); ?>
                        </p>


                    </div>


                </div>
                <div class="row flex-direction-row">


                    <div id="column-border" class="column column-25 column-offset-25 column-border">
                        <!-- Maybe use a UL list for the little circle bullets as decoration on border -->
                        <p class="experience-header">Front End Developer</p><p class="experience-subheader">2015-Present</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>


                    <div class="col2ndsection column-50">
                        <p>BKJ Productions, Freelance, skilled in WordPress Development, PHP, HTML, CSS(Bootstrap, Sass), Javascript(jQuery, Node), Git, SEO, website optimization, email marketing, Pay Per Click advertising.</p>
                    </div>
                </div>
                <div class="row flex-direction-row">
                    <div id="column-border" class="column column-25 column-offset-25 column-border">
                        <p class="experience-header">E-Learning Department, Lesley University</p><p class="experience-subheader">2016</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>
                    <div class="column-50 col2ndsection">
                        <p>Increased efficiency and performance within E-Learning Department by developing Administrative Support solutions,
Excel Spreadsheet Reports, and Learning Management System Software edits.</p>
                    </div>
                    </div>
                   
                    

                
                <div class="row flex-direction-row">
                    <div id="column-border" class="column column-25 column-offset-25 column-border">
                        <p class="experience-header">U.S. Coast Guard Information Systems Technician</p><p class="experience-subheader">1996 - 2015</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>
                     <div class="column-50 col2ndsection">
                        <p>Received 5 Coast Guard Achievement Awards while completing a 20 Year Active Duty Coast Guard career on the West and East Coast of United States as a Chief Warrant Officer.  Spent years managing large scale IT projects, served as a Windows systems administrator, supervised junior technicians, served as a junior applications developer utilizing SQL, VB Script, HTML, CSS, and Databases, and served as an IT Security Officer.</p>
                    </div>
                    </div>
                    
                   

               
            </section>

            <section class="bottom-background-color">
                <div class="row">

                    <div class="column column-25 column-offset-20 heading">
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

                    <div class="column column-25 column-offset-20 heading">
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

            </section>


        </div>


        <!-- .container -->


<!-- <div class="footer-wrapper container"> This was replaced with below div 5/12/17-->
    <div class="footer-wrapper">
    
    <!--<div id="footer">-->
    <footer class="footer">
        

        <?php/* wp_nav_menu(array('theme_location'=>'secondary')); */?>
            
            <div id="footer-right">Copyright ©
                <?php the_date('Y') ?> Devluxe.</div>
    </footer>
    <!--</div>-->
</div>



    </body>
</html>