<!DOCTYPE html>
<html lang="en">

<!--
=======================================================================================
 Purple Dash 2016&reg;
=======================================================================================
--><head>

<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>. Purple Dash .</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" media="all">
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ut-fontface.css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ut-responsive-grid.css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/color.css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" media="all">
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
	<![endif]-->

<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="ie8-and-down.css" />
	<style>.hero .hero-holder {
		margin-left:-410px;
	}
	</style>
    <![endif]-->

<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->

<!-- Favicons
	================================================== -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png">

<!-- Load jQuery
  	================================================== -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/SmoothScroll.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/device.min.js"></script>
<?PHP wp_head();?>
</head>

<body id="mainsite">
<a id="top"></a> 

<!-- Page Layout
	================================================== --> 

<!-- header section -->
<header id="header-section" class="ha-header ha-header-hide">
  <div class="grid-container">
    <div class="ha-header-perspective">
      <div class="ha-header-front">
        <div class="grid-20 tablet-grid-20 hide-on-mobile">
          <h1 class="logo"><a href="#top"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a></h1>
        </div>
        <nav id="ut-navigation" class="grid-80 tablet-grid-80 hide-on-mobile"> <a class="selected" href="#top">Home</a> <a href="#about-section">About</a> <a href="#team-section">Team</a> <a href="#service-section">Service</a> 
          <!--<a href="#service-section">Service</a>--> 
          <a href="#portfolio-section">Work</a> <a href="#testimonial-section">Aim</a> <a href="#contact-section">Contact</a> </nav>
      </div>
    </div>
    <!-- close .ha-header-perspective --> 
  </div>
  <!-- close grid container --> 
</header>
<!-- close header -->

<div class="clear"></div>

<!-- hero section -->
<section class="slider hero ha-waypoint parallax-section parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">

  <div class="grid-container"> 
    
    <!-- hero holder -->
    <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100 bg-white">
      <div class="hero-inner"> <span class="hero-description">Creative Design Studio</span>
        <div class="hero-title-holder">
          <h1 class="hero-title">We are <span>Purple Dash</span></h1>
        </div>
        <span class="btn-holder"><a id="to-about-section" class="hero-btn">What We Do</a></span> </div>
    </div>
    <!-- close hero-holder --> 
  </div>
  
  <!-- slider -->
  <div class="main-slider">
    <ul class="slides">
      <li style="background:url(http://bepurpledash.com/wp-content/themes/purpledash/images/slider/s1.jpg);"></li>
      <li style="background:url(http://bepurpledash.com/wp-content/themes/purpledash/images/slider/s2.jpg);"></li>
      <li style="background:url(http://bepurpledash.com/wp-content/themes/purpledash/images/slider/s3.jpg);"></li>
      <li style="background:url(http://bepurpledash.com/wp-content/themes/purpledash/images/slider/s4.jpg);"></li>
    </ul>
  </div>
  <!-- close slider --> 
  
</section>
<!-- close hero section -->

<div class="clear"></div>
<div id="main-content" class="wrap"> 
  
  <!-- about section -->
  <div class="nav-waypoint">
    <section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
      <div class="grid-container"> 
        
        <!-- section header -->
        <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
          <header class="section-header">
            <h2 class="section-title"><span>About Purple Dash</span></h2>
            <?PHP $args = array(
	
	'pagename' =>'about-us'
	
 );

$wp_query = new WP_Query($args);
?>
            <?PHP  while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
            <?PHP the_content();?>
            <?PHP endwhile;?>
          </header>
        </div>
        <!-- close section header --> 
        
      </div>
      <!-- close grid-container --> 
    </section>
    <!-- close about section -->
    
    <div class="clear"></div>
    
    <!-- parallax banner 2-->
    <section id="parallax-section-2" class="parallax-section parallax-banner-2 parallax-background parallax-section-2 ha-waypoint">
      <div class="parallax-overlay parallax-overlay-2"></div>
      <div class="grid-container parallax-content"> 
        
        <!-- parallax header -->
        <div class="grid-40 prefix-60 mobile-grid-100 tablet-grid-100" style="text-shadow: 1px 1px gray;">
          <header class="parallax-header">
            <h2 class="parallax-title"><span>Our Philosophy</span></h2>
            <?PHP $args = array(
	
	'pagename' =>'our-philosophy'
	
 );

$wp_query = new WP_Query($args);
?>
            <?PHP  while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
            <?PHP the_content();?>
            <?PHP endwhile;?>
          </header>
        </div>
        <!-- close parallax header --> 
        
      </div>
      <!-- close grid container --> 
    </section>
    <!-- close parallax banner 2--> 
    
  </div>
  <!-- close nav-waypoint -->
  
  <div class="clear"></div>
  
  <!-- team section -->
  <div class="nav-waypoint">
    <section id="team-section" class="team-section content-section">
      <div class="grid-container"> 
        
        <!-- section header -->
        <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
          <header class="section-header">
            <h2 class="section-title"><span>Our Team</span></h2>
            <?PHP $args = array(
	
	'pagename' =>'our-team'
	
 );

$wp_query = new WP_Query($args);
?>
  <?PHP  while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
  <?PHP the_content();?>
  <?PHP endwhile;?> </header>
        </div>
        <!-- close section header -->
        
        <div class="clear"></div>
        <!-- close member --> 
        
      </div>
      <!-- close grid-container --> 
    </section>
    <!-- close team section -->
    
    <div class="clear"></div>
    <div class="nav-waypoint"> 
    <!-- Counter Section -->
    <section id="service-section" class="service-section parallax-section parallax-banner-6 parallax-background">
      <div class="parallax-overlay parallax-overlay-6"></div>
      <div class="grid-container parallax-content">
        <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100"> 
          
          <!-- entry header -->
          <div class="grid-90 prefix-5 mobile-grid-100 tablet-grid-100">
            <header class="parallax-header">
              <h2 class="parallax-title"><span>OUR SERVICES</span></h2>
              <p class="parallax-slogan"><strong>PURPLEDASH</strong> IS A VERSATILE CREATIVE STUDIO FOUNDED BY PROFESSIONALS FROM DIFFERENT FIELDS. WE KNOW HOW TO BRING NEW LIFE TO A BRAND AND HOW TO CREATE ENTIRELY NEW CONCEPTS. WE LIKE TO WORK CLOSELY WITH CLIENTS AND INCLUDE THEM IN OUR DESIGN PROCESS TO CREATE BETTER RESULTS.</p>
            </header>
          </div>
          <!-- close entry header --> 
          
          <!-- icon box 1 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-mobile icon-2x service-icon" style="font-size: 50px;"></i> </div>
            <div class="box-fade info">
              <h3>App Design & Development</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
          
          <!-- icon box 2 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-lightbulb-o icon-2x service-icon" style="font-size: 45px;"></i> </div>
            <div class="box-fade info">
              <h3>Branding</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
          
          <!-- icon box 3 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-desktop icon-2x service-icon"></i> </div>
            <div class="box-fade info">
              <h3>Web Design &amp; Development</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
          <!-- icon box 3 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-archive icon-2x service-icon"></i> </div>
            <div class="box-fade info">
              <h3>Packaging</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
          <!-- icon box 3 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-camera-retro icon-2x service-icon"></i> </div>
            <div class="box-fade info">
              <h3>Photo Editing</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
          <!-- icon box 3 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-newspaper-o icon-2x service-icon"></i> </div>
            <div class="box-fade info">
              <h3>Editorial</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
          <!-- icon box 3 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-paint-brush icon-2x service-icon"></i> </div>
            <div class="box-fade info">
              <h3>Graphic Design</h3>
              
            </div>
          </div>
          <!-- close icon box --> 
          <!-- icon box 3 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-pencil icon-2x service-icon"></i> </div>
            <div class="box-fade info">
              <h3>Illustration</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
            <!-- icon box 3 -->
          <div class="grid-10 mobile-grid-10 tablet-grid-50">
            <div class="box-fade icon-box">
              
              <i class="fa fa-star icon-2x service-icon"></i> </div>
            <div class="box-fade info">
              <h3>Full Corporate Identity</h3>
             
            </div>
          </div>
          <!-- close icon box --> 
        </div>
        <!-- close grid-100 --> 
      </div>
      <!-- close grid container --> 
    </section>
    <!-- close parallax banner 3--> 
    </div>
    <!-- cta section -->
    <section id="cta-section" class="cta-section content-section">
      <div class="grid-container">
    <div class="grid-100 mobile-grid-100 tablet-grid-100">
                                    
                                                                 

                                    <span class="cta-btn cl-effect-18 "><a class="cl-effect-18" href="#contact-section"> Drop us a line </a></span>
                                    
                                                                    
                                                                    
                                </div>
      </div>
    </section>
    <!-- close cta section --> 
  </div>
  <!-- close nav-waypoint -->
  
  <div class="clear"></div>
  
  <!-- service section -->
  <div class="nav-waypoint">
    <section id="service-section" class="parallax-section parallax-banner-3 parallax-background service-section">
      <div class="parallax-overlay parallax-overlay-3"></div>
      <div class="grid-container parallax-content">
        <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100"> 
          
          <!-- entry header -->
          <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100" style="min-height:518px;text-shadow: 1px 1px gray;">
            <header class="parallax-header quotes">
 <i class="fa fa-quote-left"></i>
               <h2 class="ut-parallax-quote-title ">Design is not just what it looks like and feels like. Design is how it works. </h2>
         
          <i class="fa fa-quote-right"></i><span class="ut-parallax-quote-name">Steve Jobs</span>
            </header>
          </div>
          <!-- close entry header --> 
          
        </div>
      </div>
      <!-- close grid container --> 
    </section>
    <!-- close service section --> 
    
  </div>
  <!-- close nav-waypoint -->
  
  <div class="clear"></div>
  
  <!-- portfolio section -->
  <div class="nav-waypoint">
    <section id="portfolio-section" class="portfolio-section content-section">
      <div class="grid-container"> 
        
        <!-- section header -->
        <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
          <header class="section-header">
            <h2 class="section-title"><span>Our Work</span></h2>
            <p class="section-slogan">“We believe our work <strong>speaks</strong> for itself. Browse our most recent projects below”.</p>
          </header>
        </div>
        <!-- close section header -->
        
        <div class="clear"></div>
        <?php
			
			$args = array(
				'category_name'=>"works",
				'orderby' => 'id',
				'order' => 'DESC',
			);
			$query = new WP_Query($args);
			// duplicate groups.
			
			// getGroupOrder us back an array of the order of groups
			// The parameter for this function is the name of a field belonging to the group
      $x = 0;
			while ( $query->have_posts() ) : $query->the_post();
			$x++;
			?>
        <!-- portfolio box 1 -->
        <div class="grid-33 mobile-grid-100 tablet-grid-50"> <a class="portfolio-ajax" href="<?PHP the_permalink();?>">
          <div class="portfolio-box">
            <figure class="portfolio-image"><?PHP echo gen_image('thumb',1,1)?></figure>
            <!-- close portfolio image -->
             <div class="portfolio-caption">
              <h3 class="portfolio-title"><?PHP the_title();?><span class="portfolio-category"><?php echo get('categorias');?></span></h3>
            </div>
            <!-- close portfolio caption --> 
          </div>
          </a> </div>
        <!-- close portfolio -->

        <?php if($x%3 == 0){ ?>
        <div class="clear"></div>
        <?php } ?>
        
        <?PHP endwhile?>
      </div>
      <!-- close grid-container --> 
    </section>
    <!-- close portfolio section -->
    
    <div class="clear"></div>
    
    <!-- social section -->
    <section id="social-section" class="parallax-section parallax-banner-4 parallax-background social-section">
      <div class="parallax-overlay parallax-overlay-4"></div>
      <!-- parallax overlay -->
      <div class="grid-container parallax-content">
        <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100"> 
          
          <!-- parallax header -->
          <div class="grid-45 prefix-55 mobile-grid-100 tablet-grid-100">
            <header class="parallax-header">
              <h2 class="parallax-title"><span>Get Connected</span></h2>
              <p class="parallax-slogan">Do not hesitate! Contact us! We are waiting for you!</p>
            </header>
          </div>
          <!-- close parallax header -->
          
          <div class="clear"></div>
          
          <!-- social network -->
          <div class="grid-45 prefix-50 mobile-grid-100 tablet-grid-100">
          <ul class="social-network">
            <li class="skype grid-50 tablet-grid-100 mobile-grid-100"></li>
            <li class="facebook grid-25 tablet-grid-100 mobile-grid-100">&nbsp;</li>
            <li class="skype grid-25 tablet-grid-50 mobile-grid-50"> <a class="social-link" href="skype:PurpleDash.Studio?chat"> <span class="social-icon"><i class="fa fa-skype fa-4x"></i></span>
              <!-- <h3 class="social-title">skype</h3>
              <span class="social-info">Talk with us</span> --> </a> </li>
            <li class="facebook grid-25 tablet-grid-50 mobile-grid-50" style="float:right;"> <a class="social-link" href="https://plus.google.com/u/1/115024707889329031789/" target="_blank"> <span class="social-icon"><i class="fa fa-google-plus fa-4x"></i></span>
              <!-- <h3 class="social-title">Google+</h3>
              <span class="social-info">Join the Conversation</span> --> </a> </li>
          </ul>
          </div>
          <!-- close social network --> 
          
        </div>
        <!-- close grid-100 --> 
      </div>
      <!-- close grid container --> 
    </section>
    <!-- close social section --> 
  </div>
  <!-- close nav-waypoint -->
  
  <div class="clear"></div>
  
  <!-- testimonial section -->
  <div class="nav-waypoint">
    <section id="testimonial-section" class="testimonial-section content-section">
      <div class="grid-container"> 
        
        <!-- section header -->
        <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
          <header class="section-header">
            <h2 class="section-title"><span>THE AIM</span></h2>
            <p class="section-slogan">Our ultimate goal is to make our clients happy. <br>
              What counts is not that the client comes but that he <strong>comes back</strong>. 
          </header>
        </div>
        <!-- close section header --> 
        
      </div>
      <!-- close container --> 
    </section>
    <!-- close testimonial section -->
    
    <div class="clear"></div>
    
    <!-- close client section --> 
    <!-- client section -->
    <section id="client-section" class="client-section content-section">
      <div class="grid-container">
        <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
          <h1 class="hero-title3">Details matter, it’s worth waiting to get it right.</h1>
        </div>
      </div>
      <!-- close container --> 
    </section>
    <!-- close client section --> 
    
  </div>
  <!-- close nav-waypoint -->
  
  <div class="clear"></div>
  
  <!-- contact section -->
  <div class="nav-waypoint">
    <section id="contact-section" class="contact-section parallax-section parallax-banner-5 parallax-background">
     
      <!-- parallax overlay -->
      <div class="grid-container parallax-content"> 
        
        <!-- parallax header -->
        <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
          <header class="parallax-header">
            <h2 class="parallax-title" style="color:#fdfd28;"><span>Contact us</span></h2>
          </header>
        </div>
        <!-- close parallax header -->
        
        <div class="clear"></div>
        
        <!-- contact wrap -->
        <div class="grid-100 mobile-grid-100 tablet-grid-100">
          <div class="contact-wrap"> 
            
            <!-- contact message -->
            <div class="grid-parent suffix-5 mobile-grid-100 tablet-grid-100">
              <div class="contact-message">
                <h3 class="grid-100" style="padding-left:0;">Our Address</h3>
                <ul class="icons-ul">
                  <li>Buenos Aires - Argentina</li>
                  <li>Tel: (5411) 5901-2596 </li>
                  <li>hello@bepurpledash.com</li>
                  <li>www.bepurpledash.com</li>
                </ul>
              </div>
            </div>
            <!-- close contact message --> 
            
            <!-- contact form -->
            <div class="grid-parent grid-55 mobile-grid-100 tablet-grid-100">
              <div class="contact-form-holder clearfix">
                <h3 class="grid-100">Drop us a line</h3>
                
                <!-- contact form -->
                <form id="contact-form" class="contact-form">
                  <ul class="grid-85">
                    <li>
                      <input id="name" class="name" type="text" name="name" placeholder="Name:">
                    </li>
                    <li>
                      <input id="email" class="email" type="email" name="email" placeholder="E-Mail:">
                    </li>
                    <!-- <li>
                      <input id="phone" class="phone" type="text" name="phone" placeholder="Phone:">
                    </li> -->
                 <!--  </ul>
                  <ul class="grid-50"> -->
                    <li>
                      <textarea id="message" class="message" name="message" placeholder="Message:"></textarea>
                    </li>
                  </ul>
                  <div class="grid-100">
                    <input id="send-btn" class="send-btn" type="submit" name="send-btn" value="Send">
                    <input name="ruta" type="hidden" id="ruta" value="<?php bloginfo('template_directory'); ?>">
                    <div class="success-message">Email has been sent!</div>
                    <div class="alert-message"></div>
                    <div class="error-message">Email could not be delivered. Please try again later!</div>
                  </div>
                </form>
                <!-- close contact form --> 
                
              </div>
            </div>
            <!-- close contact-form-holder --> 
            
          </div>
        </div>
        <!-- close contact wrap --> 
        
      </div>
      <!-- close container --> 
    </section>
    <!-- close contact section --> 
    
  </div>
  <!-- close nav-waypoint -->
  
  <div class="clear"></div>
  
  <!-- Footer Section -->
  <footer class="footer"> <a href="#top" class="toTop"><i class="fa fa-angle-up"></i></a>
    <div class="grid-container">
      <div class="grid-100 mobile-grid-100 tablet-grid-100">
        <h3>Relax, we got you covered.</h3>
      </div>
    </div>
    <div class="sub-footer">
      <div class="grid-container">
        <div class="grid-100 mobile-grid-100 tablet-grid-100">
          <h4>©2015 PurpleDash Design Studio. All Rights Reserved.</h4>
        </div>
      </div>
    </div>
    <!-- close container --> 
  </footer>
  <!-- close footer --> 
</div>

<!-- Load Javascript
  	================================================== --> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mb.YTPlayer.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.parallax.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollTo.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/waypoints.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.custom.js"></script> 
<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>

</div>

<!-- End Document
================================================== -->
<?PHP wp_footer();?>
</body>
</html>