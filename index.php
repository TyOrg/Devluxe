<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Devluxe
    </title>
    <meta name="description" content="Devluxe">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="stylesheet" id="googlefonts_css-css" href="//fonts.googleapis.com/css?family=Audiowide%7CLato%7CCabin%7COld+Standard+TT%7CRaleway%7CMerriweather&amp;ver=4.8" type="text/css" media="all">
    <link rel="stylesheet" href="css/milligram.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    
    <link rel="stylesheet" href="css/devluxe.css">
    
    
    
</head>

<body>

    <div id="header-background-color" class="row flex-direction-row">
        <div class="column column-50 column-offset-20 aligner-logo">
            <p class="navbar-brand">Devluxe</p>
        </div>
        <div id="logo-mail-icon" class="column column-10">
            <a href="#test-popup" class="open-popup-link"><button class="button button-outline"><i class="fa fa-envelope" aria-hidden="true"></i></button></a>
        </div>
        <div id="test-popup" class="white-popup mfp-hide">
            <!-- Beginning of Form -->
            <form id="contact" name="contact" method="post">
                <fieldset>
                    <label for="name" id="name">Name<span class="required">*</span></label>
                    <input type="text" name="name" id="name" size="30" value="" required/>

                    <label for="email" id="email">Email<span class="required">*</span></label>
                    <input type="text" name="email" id="email" size="30" value="" required/>

                    <!--<label for="phone" id="phone">Phone</label>
                    <input type="text" name="phone" id="phone" size="30" value="" />-->

                    <label for="Message" id="message">Message<span class="required">*</span></label>
                    <textarea name="message" id="message" required></textarea>

                    <label for="Captcha" id="captcha">Name the small house pet that says "<i>meow</i>"<span class="required">*</span></label>
                    <input type="text" name="captcha" value="" required/>

                    <input id="submit" type="submit" name="submit" value="Send" />
                </fieldset>
            </form>

            <div id="success">
                <span>
    <p>Your message was sent succssfully! I will be in touch soon! Thanks, Tyler</p>
  </span>
            </div>

            <div id="error">
                <span>
    <p>Something went wrong, try refreshing and submitting the form again.</p>
  </span>
            </div>
            <!-- end of form -->

        </div>

    </div>
        <!-- old form 

        
          <form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Email:<br>
  <input type="text" name="email" value="">
  <br>Your Message:<br>
  <input type="text" name="yourmessage" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 
        </div>

        end of old form -->



        <div class="container">
            <section class="top-background-color">
                <div class="row">

                    <div class="column column-25 column-offset-20 heading">
                        <p>
                            Profile
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-offset-25">
                        <div class="row">
                            <div class="column-10">
                                <figure id="profile-photo" class=""><img src="images/Tyler-3.png"><figcaption>Tyler Cornett</figcaption>
                                </figure>
                            </div>
                            <div id="div-photo-ul" class="column">

                                <ul id="ul-style" class="column column-75" style="list-style: none;">

                                    <li><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Boston</li>
                                    <li><i class="fa fa-code" aria-hidden="true"></i>&nbsp;&nbsp;Front End Developer</li>
                                    <li><a href="http://localhost:8888/devluxe/wp-content/uploads/2017/06/Resume.pdf"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;Resume</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="column column-30 column-offset-25">
                    </div>
                    <div class="column">
                        <!-- <hr class="hr"> add this only on desktop screens -->
                    </div>
                </div>
            </section>
            <section class="second-background-color">
                <div class="row portfolio-row">

                    <div class="column column-25 column-offset-20 heading">
                        <p>
                            Portfolio
                        </p>

                    </div>

                </div>

                <div class="row flex-direction-row portfolio-row">

                    <div id="column-border-id" class="column column-33 column-offset-20 column-border">
                        <!-- Maybe use a UL list for the little circle bullets as decoration on border -->
                        <a href="https://instaprovider.com">
                            <img class="portfolio-border" src="images/Instaprovider.jpg"></a>
                        <div class="ulborder"></div>
                    </div>

                    <div class="col2ndsection column-50">
                        <p><a href="https://instaprovider.com">Instaprovider</a> is a site using WordPress Beaver Builder Theme that incorporates WP Advanced Search functionality and uses Vimeo video integration. The site is a referral system for professional providers based on their video interviews.</p>
                    </div>
                </div>
                <div class="row flex-direction-row portfolio-row">
                    <div id="column-border-id" class="column column-33 column-offset-20 column-border">
                        <a href="https://jesskern.com">
                            <img class="portfolio-border" src="images/JessKern.jpg"></a>
                        <div class="ulborder"></div>
                    </div>
                    <div class="col2ndsection column-50">
                        <p><a href="https://jesskern.com">Jess Kern</a> was a joy to work with on this project. I enjoyed helping her reach new customers and enhancing her online ordering software. I customized a Twentyfifteen WordPress Child Theme for her. This included creating a CSS Button for her online ordering software.</p>
                    </div>
                </div>
                <div class="row flex-direction-row portfolio-row">
                    <div id="column-border-id" class="column column-33 column-offset-20 column-border">
                        <a href="https://codepen.io/temoty/pen/yXyLBr"><img class="portfolio-border" src="images/Space-blog2.png"></a>

                        <div class="ulborder"></div>
                    </div>
                    <div class="column-50 col2ndsection">
                        <p><a href="https://codepen.io/temoty/pen/yXyLBr">Space Blog </a>is a template created in Codepen.Increased efficiency and performance within E-Learning Department by developing Administrative Support solutions, Excel Spreadsheet Reports, and Learning Management System Software edits.</p>
                    </div>
                </div>

                <div class="row flex-direction-row portfolio-row">
                    <div id="column-border-id" class="column column-33 column-offset-20 column-border">
                        <a href="https://beeandbe.com"><img class="portfolio-border" src="images/beeandbe.jpg"></a>
                        <div class="ulborder"></div>
                    </div>
                    <div class="column-50 col2ndsection">
                        <p>With <a href="https://beeandbe.com">BeeAndBe.com</a>, it was a pleasure working with Jess Kern to help place a customized logo on this WordPress site. I did basic design features and helped organize her site in this popular WordPress theme.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-50 column-offset-25">
                        <p>

                        </p>
                    </div>
                </div>
            </section>
            <section class="top-background-color">
                <div class="row flex-direction-row">

                    <div class="column column-25 column-offset-20 heading">
                        <p>
                            Experience
                        </p>
                    </div>
                </div>
                <div class="row flex-direction-row">

                    <div id="column-border-id" class="column column-25 column-offset-25 column-border">
                        <!-- Maybe use a UL list for the little circle bullets as decoration on border -->
                        <p class="experience-header">Front End Developer</p>
                        <p class="experience-subheader">2015-Present</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>

                    <div class="col2ndsection column-50">
                        <p>BKJ Productions, Freelance, skilled in WordPress Development, PHP, HTML, CSS(Bootstrap, Sass), Javascript(jQuery, Node), Git, SEO, website optimization, email marketing, Pay Per Click advertising.</p>
                    </div>
                </div>
                <div class="row flex-direction-row">
                    <div id="column-border-id" class="column column-25 column-offset-25 column-border">
                        <p class="experience-header">E-Learning Department, Lesley University</p>
                        <p class="experience-subheader">2016</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>
                    <div class="column-50 col2ndsection">
                        <p>Increased efficiency and performance within E-Learning Department by developing Administrative Support solutions, Excel Spreadsheet Reports, and Learning Management System Software edits.</p>
                    </div>
                </div>

                <div class="row flex-direction-row">
                    <div id="column-border-id" class="column column-25 column-offset-25 column-border">
                        <p class="experience-header">U.S. Coast Guard Information Systems Technician</p>
                        <p class="experience-subheader">1996 - 2015</p>
                        <div class="ulborder"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                    </div>
                    <div class="column-50 col2ndsection">
                        <p>Received 5 Coast Guard Achievement Awards while completing a 20 Year Active Duty Coast Guard career on the West and East Coast of United States as a Chief Warrant Officer. Spent years managing large scale IT projects, served as a Windows systems administrator, supervised junior technicians, served as a junior applications developer utilizing SQL, VB Script, HTML, CSS, and Databases, and served as a Security Officer.</p>
                    </div>
                </div>

            </section>

            <section class="second-background-color">
                <div class="row">

                    <div class="column column-25 column-offset-20 heading">
                        <p>
                            Recommendations
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="column column-33">
                    
                    </div>

                    <div class="column column-33 recommendations-middle">
                        <div class="my-slick-div">
                            <div>
                        "I've been working with Tyler for over a year now to keep my website up and running, and up to date. Each time I meets with Tyler to discuss improvements to the site, I feel at ease, comfortable asking questions, and confident that I'm in good hands. Tyler brings enthusiasm, patience, focus and technical knowledge to our collaboration, and I've gotten so much positive feedback from clients about improved usability and overall attractiveness of my website. Thank you Tyler for all of your hard work - I am so grateful to be working with you!" Jess Kern
                        </div>
                               <div>
                        Tyler is cool
                        </div>
                               <div>
                        Tyler is cool.
                        </div>
                    </div>
                    </div>
                    <div class="column column-25">
                        <p></p>
                    </div>

                </div>
            </section>
            <section class="top-background-color">
                <div class="row">

                    <div class="column column-25 column-offset-20 heading">
                        <p>
                            Find Me
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="column column-33">
                    </div>
                    <div class="column cloumn-33">
                        <div class="social-icon"><a href="https://twitter.com/Tyler_Co_"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></a></div>
                        <div class="social-icon"><a href="https://github.com/temoty"><i class="fa fa-lg fa-github" aria-hidden="true"></i></a></div>
                        <div class="social-icon"><a href="https://www.linkedin.com/in/tyler-cornett-a8a815100/"><i class="fa fa-lg fa-linkedin" aria-hidden="true"></i></a></div>

                    </div>
                    <div class="column column-25">
                    </div>
                </div>
               

            </section>


        </div>


        <!-- .container -->


        <!-- <div class="footer-wrapper container"> This was replaced with below div 5/12/17-->
        <div class="footer-wrapper">

            <!--<div id="footer">-->
            <footer class="footer">



                <div id="footer-right">Copyright ©
                    <?php echo date('Y') ?> Devluxe.</div>
            </footer>
            <!--</div>-->
        </div>

        <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
        <!-- Ajax jQuery PHP Contact Form - http://insightandinsanity.com/build-a-simple-php-jquery-and-ajax-powered-contact-form/ -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>

        <!-- Magnific Popup core JS file -->
        <script src="js/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="js/magnific-popup/initialize-popup.js"></script>
        
        
        <script src="js/ajax-php-js-form/validate.js"></script>
        
        <!-- Slick Slider component -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script src="slick/initialize-slick.js"></script>
        
</body>

</html>